<?php

class HomeModel extends CI_Model
{

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
?>