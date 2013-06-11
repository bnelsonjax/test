<?php

class Admin extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();
    }

    public function index()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

        if ( $this->form_validation->run() !== false ) {
                $this->load->model('admin_model');
             // then validation passed. Get from the db.
                $res = $this
                        ->admin_model
                        ->verify_user(
                        $this->input->post('email'),
                        $this->input->post('password')
                        );



            if ($res !== false) {
                //person has account
                $_SESSION['username']  = $this->input->post('email');
                redirect('../home');
            }
        }
        $data['data'] = "Username or Password Incorrect";
        $this->load->view('adminLogin', $data);
    }

    public function logout() {

        session_destroy();
        $this->load->view('adminLogin');
    }



}