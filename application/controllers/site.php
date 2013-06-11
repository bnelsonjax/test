<?php

class Site extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();

      if ( !isset($_SESSION['username'])) {
         redirect('admin');
      }
    }


        function index() {
        $this->load->model('data_model');
        $data['rows'] = $this->data_model->getAll();

        $this->load->view('home_test',$data);

        }

}
