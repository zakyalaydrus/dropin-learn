<?php

/**
 * User Controller
 * This controller fully demonstrates the user class.
 *
 * @package User
 * @author Waldir Bertazzi Junior
 * @link http://waldir.org/
 * */
class Logins extends MY_Controller {

    function __construct() {
        parent::__construct();

        // Load the Library
        $this->load->library(array('login', 'login_manager'));
        $this->load->model('user_profile');
        $this->load->model('user_alias');
        $this->load->model('user_activity');
    }

    function index() {
        // If user is already logged in, send it to main
        $this->login->on_valid_session('logins/private_page');

        // Loads the login view
        $this->load->view('login');
    }

    function private_page() {
        // if user tries to direct access it will be sent to index
        $this->login->on_invalid_session('login');

        // ... else he will view non private page ...
    }

    function validate() {
        // Receives the login data
        $login = $this->input->post('login');
        $password = $this->input->post('password');

        /*
         * Validates the user input
         * The user->login returns true on success or false on fail.
         * It also creates the user session.
         */
        if ($this->login->login($login, $password)) {
            // Success
            $user_id = $this->login->get_id();
            
            //get user alias, if any..
            redirect(base_url('users/show/' . $user_id));
        } else {
            // Oh, holdon sir.
            $this->session->set_flashdata('error_message', 'Invalid login or password.');
            redirect(base_url('login'));
        }
    }

    // Simple logout function
    function logout() {
        // Remove user session.
        $this->login->destroy_user();

        // Bye, thanks! :)
        $this->session->set_flashdata('success_message', 'You are now logged out.');
        redirect(base_url(''));
    }

}

?>
