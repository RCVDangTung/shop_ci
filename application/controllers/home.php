<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($param = NULL) {

        $data = json_decode(base64_decode($param), TRUE);

        echo $data['name'];

//        echo base64_encode(json_encode(array('id' => '1234','name' => 'NguyenDangTung')));
//        eyJpZCI6IjEyMzQiLCJuYW1lIjoiTmd1eWVuRGFuZ1R1bmcifQ==
    }

    public function contact() {
        echo 'contact';
    }

    public function test_url() {
        $data['url'] = site_url('home/test1');
        $data['id'] = base64_encode('1234');
        $data['name'] = base64_encode('tungnd');
        $this->load->view('test_url/test1', $data);
    }

    public function test1($param1 = NULL, $param2 = NULL) {
        $id = base64_decode($param1);
        $name = base64_decode($param2);
        var_dump($id);
        var_dump($name);
    }

}

?>
