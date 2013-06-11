<?php

class Contacts_model extends CI_Model {

    function __construct()
    {

    }
    
    public function viewAll()
    {
    $query = $this->db->get('contacts');
        //return $query->result();
    return $query->result_array();

    }
}