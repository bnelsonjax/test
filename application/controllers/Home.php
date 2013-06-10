<?php

class Home extends CI_Controller
 {

    function __construct()
    {
        session_start();
        parent::__construct();

      if ( !isset($_SESSION['username'])) {
         redirect('login');
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
?>