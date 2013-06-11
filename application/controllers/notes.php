<?php

class Notes extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();

      if ( !isset($_SESSION['username'])) {
         redirect('admin');
      }
    }

    public function index() {

    }

    public function view($id) {

        $this->load->model('Notes_model');
        $data['data']  = $this->Notes_model->view($id);
        $this->load->view('templates/header');
        $this->load->view('notes/view', $data);
        $this->load->view('templates/footer');

    }

		public function add() {
				$this->model('Notes');

				if (isset($_POST["add"]))
				{
						$this->model('Notes');
						$this->_model->add();
						$url = "/Company/view/".$_POST['companyId'];
						\Logic\System\Lib\Helper::redirect($url);
				}

				$this->model('Company');
				$id = \Logic\System\Lib\Helper::getUrlParam();
				/**
				 * TODO: Change the way we get our ID
				 * We should'nt need to use a DB call
				 */
				$data = $this->_model->getCompanyId($id);
				$data['note'] = $this->_model->viewLocations($id);
				$this->_load->header();
				$this->_load->view('notes/add', $data);
				$this->footer();
		}

    public function edit($id) {
        $this->model('Notes_model');

        if (isset($_POST["edit"]))
        {
            $this->_model->edit_note($id);
            $url = "/Notes/view/" . $id;
            \Logic\System\Lib\Helper::redirect($url);
        }
          $data['notes']      = $this->_model->viewNotes($id);
        $this->_load->header();
        $this->_load->view('Notes/edit_note', $data);
        $this->footer();
   }

    public function delete($id) {
                $this->load->model('Notes_model');
                $this->Notes_model->delete($id);
                $this->load->view('templates/header');
                $this->load->view('notes/view', $cid);
                $this->load->view('templates/footer');
    }

    public function printNote($id) {
        $this->load->model('Notes_model');
        $data['data']  = $this->Notes_model->view($id);
		$this->load->view('notes/print', $data);

    }
}