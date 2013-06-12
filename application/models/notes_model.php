<?php

class Notes_model extends CI_Model {

    function __construct()
    {

    }

    function view($id) {
                $this->db->select('cn.id as nid
									, cn.note
									, cn.postedBy
									, cn.time AS notePostedTime
									, t.firstName
									, t.lastName
                                    , c.id AS cid');
                $this->db->from('company_notes cn');
                $this->db->join('company c','c.id = cn.cid','left');
                $this->db->join('technicians t','t.id = cn.postedBy','left');
                $this->db->where('cn.id', $id);
                $query = $this->db->get();
                return $query->row_array();
     }

     public function viewNotes($id)	{

                $this->db->select('cn.id AS nid
                                    , cn.note
                                    , cn.time AS notePostedTime
                                    , t.firstName
                                    , t.lastName');
                $this->db->from('company_notes cn');
                $this->db->join('company c','c.id = cn.cid','left');
                $this->db->join('technicians t','t.id = cn.postedBy','left');
                $this->db->where('c.id', $id);
                $query = $this->db->get();
                return $query->result_array();
	}

	function edit($formdata)
	{
              $this->db->where('id', $id);
              $this->db->update('mytable', $data);

	}

     public function delete($id)	{

                $this->db->where('id', $id);
                $this->db->delete('company_notes');
	}

}