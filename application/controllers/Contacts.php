<?php

class Contacts extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();

      if ( !isset($_SESSION['username'])) {
         redirect('login');
      }
    }

    public function view($id)
    {

        $this->load->model('Company_model');
        $this->load->view('templates/header');
        $data['result'] = $this->Company_model->view();
        $this->load->view('company/view', $data);
        $this->load->view('templates/footer');

    }

    public function viewAll()
    {

        $this->load->model('Contacts_model');
        $this->load->view('templates/header');
        $data['result'] = $this->Contacts_model->viewAll();
        $this->load->view('contacts/viewAll', $data);
        $this->load->view('templates/footer');

    }


}
?>