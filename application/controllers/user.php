<?php

class User extends CI_Controller {

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

    public function my_account() {
	    $this->load->view('templates/header');
        $this->load->view('user/my_account');
       	$this->load->view('templates/footer');
    }



}    