<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_list() {
        $query = $this->db->get('users');
        foreach ($query->result() as $row) {
            echo $row->first_name;
        }

//        if ($query->num_rows() != 0) {
//            return true;
//        } else {
//            echo "somethings wrong";
//        }
    }

}

?>
