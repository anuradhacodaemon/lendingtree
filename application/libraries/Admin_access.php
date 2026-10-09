<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Shared admin access checks for restricted admin modules.
 */
class Admin_access {

    /**
     * Allow access only for authenticated Super Admin users.
     */
    public function require_superadmin() {
        $ci =& get_instance();

        if (!isset($ci->session->userdata['userdata']['ud'])) {
            $ci->load->view('admin', array());
            exit;
        }

        if ($ci->session->userdata['userdata']['ud'] !== 'superadmin') {
            show_error('You are not authorized to access this page.', 403);
        }
    }

    public function set_module_flash($key, $message) {
        $ci =& get_instance();
        $ci->session->set_flashdata($key, array('message' => $message, 'class' => 'success'));
    }

    public function get_module_flash($key) {
        $ci =& get_instance();
        $flash = $ci->session->flashdata($key);

        if (!empty($flash)) {
            $this->_unset_session_key($key);
        }

        return $flash;
    }

    public function set_module_repopulate($key, $data) {
        $ci =& get_instance();
        $ci->session->set_flashdata($key, $data);
    }

    public function get_module_repopulate($key) {
        $ci =& get_instance();
        $repopulate = $ci->session->flashdata($key);

        if (is_array($repopulate) && !empty($repopulate)) {
            $this->_unset_session_key($key);
            return $repopulate;
        }

        return array();
    }

    private function _unset_session_key($key) {
        $ci =& get_instance();
        $ci->session->unset_userdata($key);

        $ci_vars = $ci->session->userdata('__ci_vars');
        if (is_array($ci_vars) && isset($ci_vars[$key])) {
            unset($ci_vars[$key]);
            $ci->session->set_userdata('__ci_vars', $ci_vars);
        }
    }
}
