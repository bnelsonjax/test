<?php

class Company extends CI_Controller {

        public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
	    $this->load->view('templates/header');
        $this->load->view('company/add');
       	$this->load->view('templates/footer');
    }

    public function view($id)
    {

        $this->load->model('Company_model');
        $data['data']= $this->Company_model->view($id);
        $this->load->view('templates/header');
        $this->load->view('company/view', $data);
        $this->load->view('templates/footer');

    }

    public function viewAll()
    {

        $this->load->model('Company_model');
        $this->load->view('templates/header');
        $data['result'] = $this->Company_model->viewAll();
        $this->load->view('company/viewAll', $data);
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