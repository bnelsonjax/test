<?php

class Notes extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();
      $this->load->model('Notes_model');
      //$this->load->helper(form);

            if ( !isset($_SESSION['username']))
            {
               redirect('admin');
            }
    }

    public function view($id) {

        $data['data']  = $this->Notes_model->view($id);
        $this->load->view('templates/header');
        $this->load->view('notes/view', $data);
        $this->load->view('templates/footer');

    }

    public function add($id) {

            if (isset($_POST["add"]))
    		{
    		 $this->Notes_model->add($id);
    		 $url = "/notes/view/" . $this->db->insert_id() ;
    		 redirect($url);
    		}
        $data['data']  = $id;
        $this->load->view('templates/header');
        $this->load->view('notes/add', $data);
        $this->load->view('templates/footer');

    }

    public function edit($id) {

    		if (isset($_POST["edit"]))
    		{
    			$this->Notes_model->edit($id);
    			$url = "/notes/view/" . $id;
    			redirect($url);
    		}
        $data['data']  = $this->Notes_model->view($id);
        $this->load->view('templates/header');
        $this->load->view('notes/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id) {
        $this->Notes_model->delete($id);
        $this->load->view('templates/header');
        $this->load->view('company/view', $cid);
        $this->load->view('templates/footer');

    }

    public function printNote($id) {

        $data['data']  = $this->Notes_model->view($id);
   		$this->load->view('notes/print', $data);

    }

    public function test(){

    print_r($this->session->userdata);
    }


}