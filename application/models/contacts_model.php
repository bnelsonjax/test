<?php

class Contacts_model extends CI_Model {

    function __construct()
    {

    }

     public function add($id) {

        $data = array(
           'firstName' => $_POST['firstName']
          ,'lastName' => $_POST['lastName']
          ,'title' => $_POST['title']
          ,'email' => $_POST['email']
          ,'phone' => $_POST['phone']
          ,'fax' => $_POST['fax']
          ,'cell' => $_POST['cell']
          ,'homePhone' => $_POST['homePhone']
          ,'department' => $_POST['department']
          ,'notes' => $_POST['notes']
          ,'cid' => $_POST['cid']
      );
        $this->db->where('id', $id);
        $this->db->insert('contacts', $data);

        //echo $this->db->last_query();
    }

	public function edit($id) {

        $data = array(
          'firstName' => $_POST['firstName']
         ,'lastName' => $_POST['lastName']
         ,'title' => $_POST['title']
         ,'email' => $_POST['email']
         ,'phone' => $_POST['phone']
         ,'fax' => $_POST['fax']
         ,'cell' => $_POST['cell']
         ,'homePhone' => $_POST['homePhone']);
        $this->db->where('id', $id);
        $this->db->update('contacts', $data);
        //echo $this->db->last_query();
	}

    public function viewAll() {

        $query = $this->db->get('contacts');
            //return $query->result();
        return $query->result_array();

    }

     public function view($id) {

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

    public function view_add($id) {

        $this->db->select('*');
        $this->db->from('company');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

     public function view_wo($id) {
        //this function will get all workorders by a certain contact
        $this->db->select('*');
        $this->db->from('work_orders');
        $this->db->where('contactid', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
}