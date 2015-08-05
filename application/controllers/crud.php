<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->database();
//        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
    }

    public function index() {
        
    }

    public function index1() {
        $crud = new grocery_CRUD();
        $crud->set_theme('twitter-bootstrap');
//        $crud->set_theme('datatables');
//        $crud->set_theme('flexigrid');
        $crud->set_table('users');
        $crud->change_field_type('email', 'text');
        $output = $crud->render();
        $this->_example_output($output);
    }

    function _example_output($output = null) {
        $this->load->view('user_template.php', $output);
    }

}

?>
