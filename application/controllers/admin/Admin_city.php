<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Admin_city extends CI_Controller {

    const FLASH_KEY = 'admin_city_flash';
    const REPOPULATE_KEY = 'admin_city_repopulate';

    private $current_city_id = 0;

    public function __construct() {
        parent::__construct();
        $this->load->library('admin_access');
        $this->admin_access->require_superadmin();
        $this->load->model('admin/city_model');
        $this->load->model('admin/country_model');
        $this->load->model('admin/state_model');
        $this->load->library('pagination');
    }

    public function index() {
        $filterData = $this->_normalize_city_filters();

        if ($this->input->get('record_limit')) {
            $config['per_page'] = (int) $this->input->get('record_limit');
        } else {
            $config['per_page'] = RECORD_LIMIT;
        }

        $sortData = array(
            'sort_by' => $this->input->get('sort_by') ? $this->input->get('sort_by') : '',
            'sort_direction' => $this->input->get('sort_direction') ? $this->input->get('sort_direction') : '',
        );

        $data['sort_by'] = $sortData['sort_by'];
        $data['sort_direction'] = $sortData['sort_direction'];
        $data['countries'] = $this->country_model->get_countries();
        $data['selected_country_id'] = $filterData['country_id'];
        $data['selected_state_id'] = $filterData['state_id'];
        $data['search'] = $filterData['search'];

        $statesCountryId = $filterData['country_id'];
        if (empty($statesCountryId) && !empty($filterData['state_id'])) {
            $selectedState = $this->state_model->get_state_by_id($filterData['state_id']);
            if (!empty($selectedState)) {
                $statesCountryId = $selectedState['country_id'];
                $data['selected_country_id'] = $statesCountryId;
            }
        }

        $data['states'] = !empty($statesCountryId)
            ? $this->city_model->get_states_by_country($statesCountryId)
            : array();

        $record_num = $this->uri->segment(3);
        if (!is_numeric($record_num)) {
            $record_num = $this->uri->segment($this->uri->total_segments());
        }

        $config['base_url'] = base_url() . MASTERADMIN . '/city';
        $config['total_rows'] = $this->city_model->get_count_cities($filterData);
        $page = (is_numeric($record_num)) ? $record_num : 0;
        $config['reuse_query_string'] = TRUE;
        $config['use_page_numbers'] = TRUE;

        if ($page > 0) {
            $page = ($page - 1) * $config['per_page'];
        }

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['page_no'] = $page;
        $data['total_rows'] = $config['total_rows'];
        $data['record_limit'] = $config['per_page'];
        $data['cities'] = $this->city_model->get_cities(0, $config['per_page'], $page, $filterData, $sortData);
        $data['flash_message'] = $this->admin_access->get_module_flash(self::FLASH_KEY);

        $this->template->view('admin/city/index', array_merge($data, $filterData));
    }

    public function add() {
        $repopulate = $this->admin_access->get_module_repopulate(self::REPOPULATE_KEY);

        $country_id = !empty($repopulate['country_id']) ? $repopulate['country_id'] : $this->input->get('country_id');
        $data = array(
            'countries' => $this->country_model->get_countries(),
            'states' => !empty($country_id) ? $this->city_model->get_states_by_country($country_id) : array(),
            'selected_country_id' => $country_id,
            'selected_state_id' => !empty($repopulate['state_id']) ? $repopulate['state_id'] : '',
            'city_name' => !empty($repopulate['name']) ? $repopulate['name'] : '',
            'flash_message' => $this->admin_access->get_module_flash(self::FLASH_KEY),
        );

        $this->template->view('admin/city/add', $data);
    }

    public function get_states($country_id = 0) {
        $country_id = (int) $country_id;
        $states = array();

        if ($country_id > 0 && $this->country_model->country_exists($country_id)) {
            $states = $this->city_model->get_states_by_country($country_id);
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($states));
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            show_404();
        }

        if ($this->form_validation->run('admin/city/store') == TRUE) {
            $cityData = array(
                'state_id' => $this->input->post('state_id'),
                'name' => $this->input->post('name'),
            );

            $result = $this->city_model->add_city($cityData);

            if (!$result) {
                $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=red>Unable to save city.</font>');
                $this->admin_access->set_module_repopulate(self::REPOPULATE_KEY, $this->input->post());
                redirect('admin/city/add');
            }

            $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=green>City added successfully.</font>');
            redirect('admin/city', 'refresh');
        }

        $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=red>' . validation_errors() . '</font>');
        $this->admin_access->set_module_repopulate(self::REPOPULATE_KEY, $this->input->post());
        redirect('admin/city/add');
    }

    public function edit($id = 0) {
        $id = (int) $id;
        $city = $this->city_model->get_city_by_id($id);

        if (empty($city)) {
            show_404();
        }

        $repopulate = $this->admin_access->get_module_repopulate(self::REPOPULATE_KEY);

        if (!empty($repopulate)) {
            $selected_country_id = !empty($repopulate['country_id']) ? $repopulate['country_id'] : $city['country_id'];
            $selected_state_id = !empty($repopulate['state_id']) ? $repopulate['state_id'] : $city['state_id'];
            $city_name = !empty($repopulate['name']) ? $repopulate['name'] : $city['name'];
        } else {
            $selected_country_id = $this->input->get('country_id') ? $this->input->get('country_id') : $city['country_id'];
            $selected_state_id = $city['state_id'];
            $city_name = $city['name'];
        }

        $data = array(
            'city_id' => $id,
            'countries' => $this->country_model->get_countries(),
            'states' => $this->city_model->get_states_by_country($selected_country_id),
            'selected_country_id' => $selected_country_id,
            'selected_state_id' => $selected_state_id,
            'city_name' => $city_name,
            'flash_message' => $this->admin_access->get_module_flash(self::FLASH_KEY),
        );

        $this->template->view('admin/city/edit', $data);
    }

    public function update($id = 0) {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            show_404();
        }

        $id = (int) $id;
        $city = $this->city_model->get_city_by_id($id);

        if (empty($city)) {
            show_404();
        }

        $this->current_city_id = $id;

        if ($this->form_validation->run('admin/city/update') == TRUE) {
            $cityData = array(
                'state_id' => $this->input->post('state_id'),
                'name' => $this->input->post('name'),
            );

            $result = $this->city_model->update_city($id, $cityData);

            if ($result === 0) {
                $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=red>You have not changed anything.</font>');
                redirect('admin/city/edit/' . $id, 'refresh');
            }

            $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=green>City updated successfully.</font>');
            redirect('admin/city', 'refresh');
        }

        $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=red>' . validation_errors() . '</font>');
        $this->admin_access->set_module_repopulate(self::REPOPULATE_KEY, $this->input->post());
        redirect('admin/city/edit/' . $id);
    }

    public function delete($id = 0) {
        $id = (int) $id;
        $city = $this->city_model->get_city_by_id($id);

        if (empty($city)) {
            show_404();
        }

        if (!$this->city_model->delete_city($id)) {
            $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=red>Unable to delete city.</font>');
            redirect('admin/city', 'refresh');
        }

        $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=green>City deleted successfully.</font>');
        redirect('admin/city', 'refresh');
    }

    public function validate_country($country_id) {
        if (!$this->country_model->country_exists($country_id)) {
            $this->form_validation->set_message('validate_country', 'Please select a valid Country.');
            return FALSE;
        }

        return TRUE;
    }

    public function validate_state($state_id) {
        if (!$this->city_model->state_exists($state_id)) {
            $this->form_validation->set_message('validate_state', 'Please select a valid State.');
            return FALSE;
        }

        $country_id = (int) $this->input->post('country_id');
        if ($country_id > 0) {
            $state = $this->state_model->get_state_by_id($state_id);
            if (empty($state) || (int) $state['country_id'] !== $country_id) {
                $this->form_validation->set_message('validate_state', 'The selected State does not belong to the selected Country.');
                return FALSE;
            }
        }

        return TRUE;
    }

    public function validate_city_unique($name) {
        $state_id = $this->input->post('state_id');

        if ($this->city_model->city_name_exists($name, $state_id, $this->current_city_id)) {
            $this->form_validation->set_message('validate_city_unique', 'This City already exists for the selected State.');
            return FALSE;
        }

        return TRUE;
    }

    private function _normalize_city_filters() {
        $filters = array(
            'page_name' => 'city',
            'country_id' => $this->input->get('country_id'),
            'state_id' => $this->input->get('state_id'),
            'search' => trim((string) $this->input->get('search')),
        );

        $filters['country_id'] = ($filters['country_id'] !== null && $filters['country_id'] !== '')
            ? (int) $filters['country_id']
            : '';
        $filters['state_id'] = ($filters['state_id'] !== null && $filters['state_id'] !== '')
            ? (int) $filters['state_id']
            : '';

        if (!empty($filters['state_id']) && !empty($filters['country_id'])) {
            $filterState = $this->state_model->get_state_by_id($filters['state_id']);
            if (empty($filterState) || (int) $filterState['country_id'] !== (int) $filters['country_id']) {
                $filters['state_id'] = '';
            }
        }

        return $filters;
    }

}
