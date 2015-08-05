<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model('user');
        
//        $this->user->get_list();

        $this->load->model('CRUD_model', 'crud');
        $data['first_name'] = 'Steve';
        $data['last_name'] = 'Jobs';
        $data['last_name'] = '408-555-1212';
        $data['email'] = 'norelpy@apple.com';
        $this->crud->table('users')->create($data);
    }

    public function index01() {
        $this->load->model('crud');
        
        echo 'a';
//        $data['first_name'] = 'Steve';
//        $data['last_name'] = 'Jobs';
//        $data['last_name'] = '408-555-1212';
//        $data['email'] = 'norelpy@apple.com';
        
//        $this->crud->table('users');
//        $this->crud->table('users')->create($data);
    }

}

?>

