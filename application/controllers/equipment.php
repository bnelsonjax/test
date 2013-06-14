<?php

class Equipment extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->load->model('Equipment_model');
        $this->load->model('Locations_model');


        // Require members to be logged in. If not logged in, redirect to the Ion Auth login page.
        //
        if (!$this->ion_auth->logged_in()) {
            redirect(base_url() . 'auth/login');
        }
    }

    public function add($id) {

                if (isset($_POST["add"]))
    		{
    			$this->Equipment_model->add($id);
                redirect('company/view/'.$id);
    		}
        $data['data'] = $id;
        $this->load->view('templates/header');
        $this->load->view('equipment/add', $data);
        $this->load->view('templates/footer');

    }

    public function view($id) {

        $data['data'] = $this->Equipment_model->view($id);
        $this->load->view('templates/header');
        $this->load->view('equipment/view', $data);
        $this->load->view('templates/footer');

    }

    public function edit($id) {

                if (isset($_POST["edit"]))
    		{
    			$this->Equipment_model->edit($id);
                redirect('equipment/view/'.$id);
    		}

        $data['data']  = $this->Equipment_model->view($id);
        $this->load->view('templates/header');
        $this->load->view('equipment/edit', $data);
        $this->load->view('templates/footer');
    }

}