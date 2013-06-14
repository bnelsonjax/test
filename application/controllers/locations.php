<?php

class Locations extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();
      $this->load->model('Locations_model');

          // Require members to be logged in. If not logged in, redirect to the Ion Auth login page.
          //
          if( ! $this->ion_auth->logged_in())
          {
            redirect(base_url() . 'auth/login');
          }
    }

    public function add($id) {

                if (isset($_POST["add"]))
    		{
    			$this->Locations_model->add($id);
                redirect('company/view/'.$id);
    		}
        $data['data'] = $id;
        $this->load->view('templates/header');
        $this->load->view('locations/add', $data);
        $this->load->view('templates/footer');

    }

    public function view($id) {

        $data['data']  = $this->Locations_model->view($id);
        $this->load->view('templates/header');
        $this->load->view('locations/view', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id) {

                if (isset($_POST["edit"]))
    		{
    			$this->Locations_model->edit($id);
                redirect('locations/view/'.$id);
    		}

        $data['data']  = $this->Locations_model->view($id);
        $this->load->view('templates/header');
        $this->load->view('locations/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id) {
        $this->Locations_model->delete($id);
        redirect('company/view/'.$id);

    }

}