<?php

class Home extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();

      if ( !isset($_SESSION['username'])) {
         redirect('admin');
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