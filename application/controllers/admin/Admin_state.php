<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Admin_state extends CI_Controller {

    const FLASH_KEY = 'admin_state_flash';
    const REPOPULATE_KEY = 'admin_state_repopulate';

    private $current_state_id = 0;

    public function __construct() {
        parent::__construct();
        $this->load->library('admin_access');
        $this->admin_access->require_superadmin();
        $this->load->model('admin/state_model');
        $this->load->model('admin/country_model');
        $this->load->library('pagination');
    }

    public function index() {
        $filterData = array(
            'page_name' => 'state',
            'country_id' => $this->input->get('country_id'),
            'search' => $this->input->get('search'),
        );

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
        $data['search'] = $filterData['search'];

        $last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);

        $config['base_url'] = base_url() . MASTERADMIN . '/state';
        $config['total_rows'] = $this->state_model->get_count_states($filterData);
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
        $data['states'] = $this->state_model->get_states(0, $config['per_page'], $page, $filterData, $sortData);
        $data['flash_message'] = $this->admin_access->get_module_flash(self::FLASH_KEY);

        $this->template->view('admin/state/index', array_merge($data, $filterData));
    }

    public function add() {
        $repopulate = $this->admin_access->get_module_repopulate(self::REPOPULATE_KEY);

        $data = array(
            'countries' => $this->country_model->get_countries(),
            'selected_country_id' => !empty($repopulate['country_id']) ? $repopulate['country_id'] : '',
            'state_name' => !empty($repopulate['name']) ? $repopulate['name'] : '',
            'flash_message' => $this->admin_access->get_module_flash(self::FLASH_KEY),
        );

        $this->template->view('admin/state/add', $data);
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            show_404();
        }

        if ($this->form_validation->run('admin/state/store') == TRUE) {
            $stateData = array(
                'country_id' => $this->input->post('country_id'),
                'name' => $this->input->post('name'),
            );

            $result = $this->state_model->add_state($stateData);

            if (!$result) {
                $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=red>Unable to save state.</font>');
                $this->admin_access->set_module_repopulate(self::REPOPULATE_KEY, $this->input->post());
                redirect('admin/state/add');
            }

            $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=green>State added successfully.</font>');
            redirect('admin/state', 'refresh');
        }

        $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=red>' . validation_errors() . '</font>');
        $this->admin_access->set_module_repopulate(self::REPOPULATE_KEY, $this->input->post());
        redirect('admin/state/add');
    }

    public function edit($id = 0) {
        $id = (int) $id;
        $state = $this->state_model->get_state_by_id($id);

        if (empty($state)) {
            show_404();
        }

        $repopulate = $this->admin_access->get_module_repopulate(self::REPOPULATE_KEY);

        if (!empty($repopulate)) {
            $selected_country_id = !empty($repopulate['country_id']) ? $repopulate['country_id'] : $state['country_id'];
            $state_name = !empty($repopulate['name']) ? $repopulate['name'] : $state['name'];
        } else {
            $selected_country_id = $state['country_id'];
            $state_name = $state['name'];
        }

        $data = array(
            'state_id' => $id,
            'countries' => $this->country_model->get_countries(),
            'selected_country_id' => $selected_country_id,
            'state_name' => $state_name,
            'flash_message' => $this->admin_access->get_module_flash(self::FLASH_KEY),
        );

        $this->template->view('admin/state/edit', $data);
    }

    public function update($id = 0) {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            show_404();
        }

        $id = (int) $id;
        $state = $this->state_model->get_state_by_id($id);

        if (empty($state)) {
            show_404();
        }

        $this->current_state_id = $id;

        if ($this->form_validation->run('admin/state/update') == TRUE) {
            $stateData = array(
                'country_id' => $this->input->post('country_id'),
                'name' => $this->input->post('name'),
            );

            $result = $this->state_model->update_state($id, $stateData);

            if ($result === 0) {
                $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=red>You have not changed anything.</font>');
                redirect('admin/state/edit/' . $id, 'refresh');
            }

            $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=green>State updated successfully.</font>');
            redirect('admin/state', 'refresh');
        }

        $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=red>' . validation_errors() . '</font>');
        $this->admin_access->set_module_repopulate(self::REPOPULATE_KEY, $this->input->post());
        redirect('admin/state/edit/' . $id);
    }

    public function delete($id = 0) {
        $id = (int) $id;
        $state = $this->state_model->get_state_by_id($id);

        if (empty($state)) {
            show_404();
        }

        if ($this->state_model->count_cities_by_state($id) > 0) {
            $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=red>Cannot delete state while cities exist. Delete related cities first.</font>');
            redirect('admin/state', 'refresh');
        }

        $this->state_model->delete_state($id);
        $this->admin_access->set_module_flash(self::FLASH_KEY, '<font color=green>State deleted successfully.</font>');
        redirect('admin/state', 'refresh');
    }

    public function validate_country($country_id) {
        if (!$this->country_model->country_exists($country_id)) {
            $this->form_validation->set_message('validate_country', 'Please select a valid Country.');
            return FALSE;
        }

        return TRUE;
    }

    public function validate_state_unique($name) {
        $country_id = $this->input->post('country_id');

        if ($this->state_model->state_name_exists($name, $country_id, $this->current_state_id)) {
            $this->form_validation->set_message('validate_state_unique', 'This State already exists for the selected Country.');
            return FALSE;
        }

        return TRUE;
    }
}
