<?php

class Error extends CI_Controller {

    function __construct()
    {
      parent::__construct();
      session_start();

          // Require members to be logged in. If not logged in, redirect to the Ion Auth login page.
          //
          if( ! $this->ion_auth->logged_in())
          {
            redirect(base_url() . 'auth/login');
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
