<?php

class Company extends CI_Controller {

        public function __construct()
    {
        parent::__construct();
    }

    public function index() {
	    $this->load->view('templates/header');
        $this->load->view('company/add');
       	$this->load->view('templates/footer');
    }

    public function view($id) {

        $this->load->model('Company_model');
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

        $this->load->model('Company_model');
        $this->load->view('templates/header');
        $data['result'] = $this->Company_model->viewAll();
        $this->load->view('company/viewAll', $data);
        $this->load->view('templates/footer');

    }

    public function notes($id) {

        $this->load->model('Company_model');
        $data['result'] = $this->Company_model->viewNotes($id);
        $this->load->view('templates/header');
        $this->load->view('company/notesList', $data);
        $this->load->view('templates/footer');

    }

    public function test($id) {

        $this->load->model('Company_model');
        $data['result'] = $this->Company_model->viewNotes($id);
        $this->load->view('templates/header');
        $this->load->view('company/test', $data);
        $this->load->view('templates/footer');

    }


    public function add() {
        $this->load->view('templates/header');
	    $data['value'] = "This is the data value";
        $this->load->view('company/add',$data);
        $this->load->view('templates/footer');
    }
}
?>