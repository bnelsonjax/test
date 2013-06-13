<?php

class Contacts extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();
      $this->load->model('Contacts_model');

      if ( !isset($_SESSION['username'])) {
         redirect('admin');
      }
    }

    public function add($id) {

        		if (isset($_POST["add"]))
    		{
    			$this->Contacts_model->add($id);
    			$url = "/company/view/" . $id;
    			redirect($url);
    		}

        $this->load->view('templates/header');
        $data['data'] = $this->Contacts_model->view_add($id);
        $this->load->view('contacts/add', $data);
        $this->load->view('templates/footer');
        //echo $this->db->last_query();
    }

    public function edit($id) {

        		if (isset($_POST["edit"]))
    		{
    			$this->Contacts_model->edit($id);
    			$url = "/contacts/view/" . $id;
    			redirect($url);
    		}

        $this->load->view('templates/header');
        $data['data'] = $this->Contacts_model->view($id);
        $this->load->view('contacts/edit', $data);
        $this->load->view('templates/footer');
    }

    public function view($id) {

        $this->load->view('templates/header');
        $data['data'] = $this->Contacts_model->view($id);
        $data['workorders'] = $this->Contacts_model->view_wo($id);
        $this->load->view('contacts/view', $data);
        $this->load->view('templates/footer');

    }

    public function viewAll() {

        $this->load->view('templates/header');
        $data['result'] = $this->Contacts_model->viewAll();
        $this->load->view('contacts/viewAll', $data);
        $this->load->view('templates/footer');

    }


}