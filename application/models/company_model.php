<?php
class Company_model extends CI_Model {

    public function viewAll()
    {

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
                $this->db->select('*');
                $this->db->from('company');
                $this->db->where('id', '2');
                $query = $this->db->get();
                return $query->result_array();
     }

    public function viewtest()
    {


                $this->db->select('c.id
									, c.name
									, c.active
									, c.type
									, c.website
									, c.website
									, c.phone
									, c.fax
									, DATE_FORMAT(c.date_acquired) AS dateAcquired
									, DATE_FORMAT(c.dateUpdated) AS dateUpdated
									, c.primary_contact
									, c.primary_tech
									, con.firstName
									, con.lastName
									, l.name AS locationName
									, l.address
									, l.address2
									, l.city
									, l.state
									, l.zip
									, l.country
									, coun.name AS countryName
                                    , cc_name
                                    , cc_num
                                    , cc_expmm
                                    , cc_expyy
                                    , cc_ccv
                                    , cc_address
                                    , cc_city
                                    , cc_state
                                    , cc_zip
									, ct.name AS typeName');
                $this->db->from('company c');
                $this->db->join('contacts con','c.primary_contact = con.id','left');
                $this->db->join('locations l','c.id = l.cid','left');
                $this->db->join('countries coun','coun.id = l.country','left');
                $query = $this->db->get_where();
                return $query->result();

    }

}
?>