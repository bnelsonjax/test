<?php

class Locations_model extends CI_Model {

    function __construct()
    {

    }

     public function add($id)	{

         $data = array(
                       'name' => $_POST['name']
                       ,'address' => $_POST['address']
                       ,'address2' => $_POST['address2']
                       ,'city' => $_POST['city']
                       ,'state' => $_POST['state']
                       ,'zip' => $_POST['zip']
                       ,'notes' => $_POST['notes']
                       ,'cid' => $_POST['cid']);
        $this->db->where('id', $id);
        $this->db->insert('locations', $data);
        //echo $this->db->last_query();
	}

    public function view($id) {
        $this->db->select('l.id
                            , l.cid
                            , l.name AS locationName
                        	, l.address
                        	, l.address2
                        	, l.city
                        	, l.state
                        	, l.zip
                        	, l.country
                            , l.notes
                            , coun.name AS country');
        $this->db->from('locations l');
        $this->db->join('countries coun','coun.id = l.country','left');
        $this->db->where('l.id', $id);
        $query = $this->db->get();
        return $query->row_array();
     }

	public function edit($id)
	{
        $data = array(
                       'name' => $_POST['locationName']
                       ,'address' => $_POST['address']
                       ,'address2' => $_POST['address2']
                       ,'city' => $_POST['city']
                       ,'state' => $_POST['state']
                       ,'zip' => $_POST['zip']
                       ,'notes' => $_POST['notes']);
        $this->db->where('id', $id);
        $this->db->update('locations', $data);
        //echo $this->db->last_query();


	}

     public function delete($id)	{

      $this->db->where('id', $id);
      $this->db->delete('locations');
	}















}