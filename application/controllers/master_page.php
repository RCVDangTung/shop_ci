<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Master_Page extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
//        $string = $this->load->view('template', 'template_1', true);
        $data = array();
        $page = array();
        $page['left_content'] = $this->load->view('left_content', $data, TRUE);
//        $page['main_content'] = $this->load->view('main_content', $data, TRUE);
        $page['right_content'] = $this->load->view('right_content', $data, TRUE);
        $this->load->view('home', $page);
    }

    public function index01() {
        $user = array(
            'id' => '17',
            'name' => 'Tung'
        );
        $data['user'] = $user;

        $this->load->view('home/index', $data);
    }

}

?>
