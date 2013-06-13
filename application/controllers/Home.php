<?php

class Home extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();

          // Require members to be logged in. If not logged in, redirect to the Ion Auth login page.
          //
          if( ! $this->ion_auth->logged_in())
          {
            redirect(base_url() . 'auth/login');
          }

    }

    public function index()
    {
        $this->load->model('Home_model');
        $this->load->view('templates/header');
        $data['result'] = $this->Home_model->function1();
        $this->load->view('home', $data);
        $this->load->view('templates/footer');

    }



}