<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Form extends CI_Controller {

    public function index() {
        $data = array();
        $data['data']['post'] = $this->input->post('search');
        $this->load->view('form/form', $data);
    }

}
