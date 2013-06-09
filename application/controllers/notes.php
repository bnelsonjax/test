<?php

class Notes extends CI_Controller {

        public function __construct()
    {
        parent::__construct();
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
        $this->model('Notes');

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
        $this->model('Notes');

        $this->_model->delete($id);
        	$url = "/Company/";
            //$url = "/Company/view/" . $cid;
		\Logic\System\Lib\Helper::redirect($url);

        $this->_load->header();
		$this->_load->view('Notes/');
        $this->footer();
    }

    public function printNote($id) {
        $this->model('Notes');
        $data      = $this->_model->view($id);
		$this->_load->view('notes/print', $data);

    }
}
?>