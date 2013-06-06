<?php

class Contacts_model extends CI_Model
{

    public function viewAll()
    {
    $query = $this->db->get('contacts');
        //return $query->result();
    return $query->result_array();

    }
}