<?php

class Company_model extends CI_Model {

    function __construct()
    {

    }

    public function viewAll() {

                $this->db->select('c.id
                        			, c.name AS companyName
                        			, c.active
                        			, con.id as conId
                        			, con.firstName
                        			, con.lastName
                        			, l.id AS lid
                        			, l.name AS locationName
                                  , ct.name AS ctype');
                $this->db->from('company c');
                $this->db->join('contacts con','c.primary_contact = con.id','left');
                $this->db->join('locations l','c.id = l.cid','left');
                $this->db->join('enum_company_type ct','ct.id = c.type','left');
                $query = $this->db->get();
                return $query->result_array();

    }

    function view($id) {
                $this->db->select('c.id,
									, c.name
									, c.active
									, c.type
									, c.website
									, c.website
									, c.phone
									, c.fax
                                    , c.website
									, c.primary_contact
									, c.primary_tech
                                    , c.date_acquired AS dateAcquired
									, c.dateUpdated AS dateUpdated
                                    , c.cc_name
                                    , c.cc_num
                                    , c.cc_expmm
                                    , c.cc_expyy
                                    , c.cc_ccv
                                    , c.cc_address
                                    , c.cc_city
                                    , c.cc_state
                                    , c.cc_zip
                                    , con.firstName
                                    , con.lastName
                                    , l.name AS locationName
									, l.address
									, l.address2
									, l.city
									, l.state
									, l.zip
									, l.country
                                    , ct.name AS typeName
                                    , coun.name AS country');
                $this->db->from('company c');
                $this->db->join('contacts con','c.primary_contact = con.id','left');
                $this->db->join('locations l','c.id = l.cid','left');
                $this->db->join('countries coun','coun.id = l.country','left');
                $this->db->join('enum_company_type ct','ct.id = c.type','left');
                $this->db->where('c.id', $id);
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

    public function viewContacts($id) {

                $this->db->select('contacts.*
									, c.id as cid');
                $this->db->from('contacts');
                $this->db->join('company c','c.id = contacts.cid','left');
                $this->db->where('c.id', $id);
                $query = $this->db->get();
                return $query->result_array();
	}

    public function viewLocations($id) {

                $this->db->select('l.*
									,c.id as cid');
                $this->db->from('locations l');
                $this->db->join('company c','l.cid = c.id','left');
                $this->db->where('c.id', $id);
                $query = $this->db->get();
                return $query->result_array();
	}

    public function viewEquipment($id) {

                $this->db->select('equipment.*
									,company.id as cid
									,locations.name');
                $this->db->from('equipment');
                $this->db->join('company','equipment.cid = company.id','left');
                $this->db->join('locations','equipment.location = locations.id','left');
                $this->db->where('company.id', $id);
                $query = $this->db->get();
                return $query->result_array();
	}

    public function viewAgreements($id) {

	}

    public function viewWorkOrders($id)	{

                $this->db->select('wo.id
            				        , wo.description
            						, wo.dateCreated AS entryDate
            						, p.name AS priority
            						, st.name AS serviceType
            						, s.name AS `status`
            						, l.name AS locationName
            						, ct.name as companyType
            						, t.firstName as firstName
            						, t.lastName as lastName');
                $this->db->from('work_orders AS wo');
                $this->db->join('enum_priority p','p.id = wo.priority','left');
                $this->db->join('enum_service_type st','st.id = wo.serviceType','left');
                $this->db->join('enum_status s','s.id = wo.`status`','left');
                $this->db->join('locations l','l.id = wo.lid','left');
                $this->db->join('enum_company_type ct','ct.id = wo.companyType','left');
                $this->db->join('technicians t','t.id = wo.tid','left');
                $this->db->join('company c','c.id = wo.cid','left');
                $this->db->where('c.id', $id);
                $query = $this->db->get();
                return $query->result_array();
	}
}