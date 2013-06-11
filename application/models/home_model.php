<?php

class Home_model extends CI_Model {

    function __construct()
    {

    }
    
    public function index()
    {

    }

    public function function1()
    {
    $query = $this->db->get('work_orders');
        //return $query->result();
    return $query->result_array();

    }
}