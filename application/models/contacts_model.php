<?php

class Contacts_model extends CI_Model {

    function __construct()
    {

    }

    public function edit($id)
    {


    }

    public function viewAll()
    {
      $query = $this->db->get('contacts');
          //return $query->result();
      return $query->result_array();

    }

     public function view($id)
    {
        $this->db->select('con.*
                            ,c.name AS companyName
                            ,c.active AS active
                            ,c.website');
        $this->db->from('contacts con');
        $this->db->join('company c','con.cid = c.id','left');
        $this->db->where('con.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

     public function view_wo($id)
    {
        //this function will get all workorders by a certain contact
        $this->db->select('*');
        $this->db->from('work_orders');
        $this->db->where('contactid', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
}