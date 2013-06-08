<?php
class Company_model extends CI_Model {

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
									, l.country');
                $this->db->from('company c');
                $this->db->join('contacts con','c.primary_contact = con.id','left');
                $this->db->join('locations l','c.id = l.cid','left');
                $this->db->join('countries coun','coun.id = l.country','left');
                $this->db->where('c.id', $id);
                $query = $this->db->get();
                return $query->row_array();
     }



}
?>