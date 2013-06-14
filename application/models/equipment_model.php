<?php

class Equipment_model extends CI_Model {

    function __construct()
    {

    }

     public function add($id)	{

         $data = array(
                       'cid' => $_POST['cid']
                       ,'mfrName' => $_POST['mfrName']
                       ,'model' => $_POST['model']
                       ,'serial' => $_POST['serial']
                       ,'description' => $_POST['description']
                       ,'notes' => $_POST['notes']);
        $this->db->where('id', $id);
        $this->db->insert('equipment', $data);
        //echo $this->db->last_query();
	}

    public function view($id) {
        $this->db->select('e.*
                        ,l.name AS locations');
        $this->db->from('equipment e');
        $this->db->join('locations l','e.location = l.id','left');
        $this->db->where('e.id', $id);
        $query = $this->db->get();
        return $query->row_array();
     }

	public function edit($id)
	{
        $data = array(
                       'mfrName' => $_POST['mfrName']
                       ,'model' => $_POST['model']
                       ,'serial' => $_POST['serial']
                       ,'description' => $_POST['description']
                       ,'notes' => $_POST['notes']);
        $this->db->where('id', $id);
        $this->db->update('equipment', $data);
        //echo $this->db->last_query();

	}

     public function delete($id)	{

      $this->db->where('id', $id);
      $this->db->delete('equipment');
	}

}