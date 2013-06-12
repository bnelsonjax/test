<?php

class Contacts extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();

      if ( !isset($_SESSION['username'])) {
         redirect('admin');
      }
    }

    public function edit($id)
    {

        $this->load->model('Contacts_model');
        $this->load->view('templates/header');
        $data['data'] = $this->Contacts_model->edit($id);
        $this->load->view('contacts/edit', $data);
        $this->load->view('templates/footer');

    }

    public function view($id)
    {

        $this->load->model('Contacts_model');
        $this->load->view('templates/header');
        $data['data'] = $this->Contacts_model->view($id);
        $data['workorders'] = $this->Contacts_model->view_wo($id);
        $this->load->view('contacts/view', $data);
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