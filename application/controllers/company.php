<?php

class Company extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        session_start();
        $this->load->model('Company_model');

                // Require members to be logged in. If not logged in, redirect to the Ion Auth login page.
                //
                if( ! $this->ion_auth->logged_in())
                {
                  redirect(base_url() . 'auth/login');
                }
    }

    public function index() {
	    $this->load->view('templates/header');
        $this->load->view('company/add');
       	$this->load->view('templates/footer');
    }

    public function editcc($id) {

                if (isset($_POST["edit"]))
    		{
    			$this->Company_model->editcc($id);
                redirect('company/view/'.$id);
    		}

        $data['data']  = $this->Company_model->view($id);
        $this->load->view('templates/header');
        $this->load->view('company/editcc', $data);
        $this->load->view('templates/footer');
    }

    public function view($id) {

        $data['data']  = $this->Company_model->view($id);
        $data['notes'] = $this->Company_model->viewNotes($id);
        $data['contacts']   = $this->Company_model->viewContacts($id);
        $data['workorder']  = $this->Company_model->viewWorkOrders($id);
        $data['locations']  = $this->Company_model->viewLocations($id);
        $data['agreements'] = $this->Company_model->viewAgreements($id);
        $data['equipment']  = $this->Company_model->viewEquipment($id);
        $this->load->view('templates/header');
        $this->load->view('company/view', $data);
        $this->load->view('templates/footer');

    }

    public function viewAll() {

        $this->load->view('templates/header');
        $data['result'] = $this->Company_model->viewAll();
        $this->load->view('company/viewAll', $data);
        $this->load->view('templates/footer');

    }

    public function notes($id) {

        $data['result'] = $this->Company_model->viewNotes($id);
        $this->load->view('templates/header');
        $this->load->view('company/notesList', $data);
        $this->load->view('templates/footer');

    }

    public function edit($id) {

                if (isset($_POST["edit"]))
    		{
    			$this->Company_model->edit($id);
                redirect('company/view/'.$id);
    		}

        $data['status']  = $this->Company_model->get_companystatuslist();
        $data['type']  = $this->Company_model->get_companytype();
        $data['contacts']  = $this->Company_model->get_primarycontactlist($id);
        $data['data']  = $this->Company_model->view($id);
        $this->load->view('templates/header');
        $this->load->view('company/edit', $data);
        $this->load->view('templates/footer');
    }

    public function add() {

        $this->load->view('templates/header');
	    $data['value'] = "This is the data value";
        $this->load->view('company/add',$data);
        $this->load->view('templates/footer');
    }

	public function country_dropdown() {

		$this->load->helper('dropdown');
		$this->data['title'] = 'Country';
		$this->data['country'] = buildCountryDropdown('country', $this->input->post('country'));
		$this->load->view('dropdown', $this->data);
	}

	public function test($id) {

        $data['data']  = $this->Company_model->get_primarycontactlist($id);
        print_r($data);
	}



}