<?php

class Home extends CI_Controller
 {

    public function __construct()
    {
        parent::__construct();
    }



    public function index()
    {
        $this->load->model('HomeModel');
        $this->load->view('templates/header');
        $data['result'] = $this->HomeModel->function1();
        $this->load->view('index', $data);
        $this->load->view('templates/footer');

    }



    }
?>