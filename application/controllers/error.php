<?php

class Error extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();

      if ( !isset($_SESSION['username'])) {
         redirect('admin');
      }
    }

    public function error_403() {

        session_destroy();
        $this->load->view('adminLogin');
    }

    public function error_404() {
		$this->output->set_status_header('404');
		$data['content'] = 'error_404'; // View name
		$this->load->view('error_404',$data);//loading in my template
	}
}
