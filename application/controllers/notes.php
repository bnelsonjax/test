<?php

class Notes extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();
      $this->load->model('Notes_model');
      //$this->load->helper(form);

      if ( !isset($_SESSION['username'])) {
         redirect('admin');
      }
    }

    public function index() {

    }

    public function view($id) {

        $data['data']  = $this->Notes_model->view($id);
        $this->load->view('templates/header');
        $this->load->view('notes/view', $data);
        $this->load->view('templates/footer');

    }

    public function add() {

    		if (isset($_POST["add"]))
    		{
    				$this->model('Notes');
    				$this->_model->add();
    				$url = "/Company/view/".$_POST['companyId'];
    				\Logic\System\Lib\Helper::redirect($url);
    		}

    		$this->model('Company');
    		$id = \Logic\System\Lib\Helper::getUrlParam();
    		$data = $this->_model->getCompanyId($id);
    		$data['note'] = $this->_model->viewLocations($id);
    		$this->_load->header();
    		$this->_load->view('notes/add', $data);
    		$this->footer();
    }


        public function edit($id) {

            $nid = $id;
            $note = $this->input->post('note');
              $formdata = array(
                       'note' => $note
                       ,'id' => $id
                    );


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

	function success() {
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
    }

    public function delete($id) {
                $this->Notes_model->delete($id);
                $this->load->view('templates/header');
                $this->load->view('notes/view', $cid);
                $this->load->view('templates/footer');
    }

    public function printNote($id) {

        $data['data']  = $this->Notes_model->view($id);
		$this->load->view('notes/print', $data);

    }
}