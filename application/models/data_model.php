<?php


class Data_model extends CI_Model
{
       /*
        function getAll() {
        $q = $this->db->query('SELECT * FROM test_data');
        if($q->num_rows() > 0) {
            foreach($q->result() as $row){
                $data[] = $row;
            }
            return $data;
        }

    }

    */

     /*
     function getAll() {
     $q = $this->db->get('test_data');
             if($q->num_rows() > 0) {
            foreach($q->result() as $row){
                $data[] = $row;
            }
            return $data;
        }

    }
    */
     function getAll() {
        $this->db->select ('title, comments');
        $q = $this->db->get('test_data');
            if($q->num_rows() > 0) {
            foreach($q->result() as $row){
                $data[] = $row;
            }
            return $data;
        }



    }


}