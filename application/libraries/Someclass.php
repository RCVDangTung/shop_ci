<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Someclass {

    private $CI;
// Trong thu vien moi khong the load dk thu vien
//    khong su dung dk get_instance() version PHP4
//     Thu vien moi khong co thuoc tinh load
    public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
        $this->CI->config->intem('base_url');
        $this->CI->load->helper('url');
    }

    public function some_function() {
        echo 'a';
    }

    public function auth(array $param) {
        var_dump($param);
    }

}