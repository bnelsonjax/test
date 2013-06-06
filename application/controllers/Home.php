<?php

class Home extends CI_Controller
 {

    public function __construct()
    {
        parent::__construct();
    }



    public function index()
    {
        $this->load->model('Home_model');
        $this->load->view('templates/header');
        $data['result'] = $this->Home_model->function1();
        $this->load->view('index', $data);
        $this->load->view('templates/footer');

    }



    }
?>