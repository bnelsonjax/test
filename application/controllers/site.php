<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct()
    {
        session_start();
        parent::__construct();

      if ( !isset($_SESSION['username'])) {
         redirect('login');
      }
    }


        function index() {
        $this->load->model('data_model');
        $data['rows'] = $this->data_model->getAll();

        $this->load->view('home_test',$data);

        }

}
