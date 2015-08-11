<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Multi_Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
//        $data['site_url'] = site_url('multi_upload/do_upload');
        $data['site_url'] = site_url('multi_upload/upload');
        $this->load->view('upload/view_upload', $data);
    }

    public function do_upload() {
        $set_val = $this->set_upload_options();
        $this->load->library('upload', $set_val);
        $this->upload->initialize($set_val);


        if ($this->upload->do_multi_upload("file")) {
            //Print data for all uploaded files.
            print_r($this->upload->get_multi_upload_data());
        } else {
            
        }

//        if ($this->input->post('submit')) {
//            if ($this->upload->do_upload('image')) {
//                $data = $this->upload->data();
//                print_r($data);
//            } else {
//                $error = $this->upload->display_errors();
//            }
//        }
//        $CI = &get_instance();
//        $CI->load->library('upload');
//        $CI->upload->initialize($set_val);
//        $CI->load->library('upload', $set_val);
//        $this->upload->initialize($set_val, $reset = true);
//        $this->load->library('upload');
//        $this->upload->initialize($set_val);
//        if($this->input->post('submit')){
//        $post = $this->input->post('data');
//        var_dump($post);
//        }
    }

    private function set_upload_options() {
        $date = date('Y-m-d');
        $config = array();
//        $config['allowed_types'] = 'jpg|gif|png|txt';
        $config['allowed_types'] = '*';
        $config['max_size'] = '256000'; //250 MB max size
        $config['max_width'] = 5000;
        $config['max_height'] = 5000;
        $config['overwrite'] = FALSE;
        $config['remove_spaces'] = TRUE;
        if (!is_dir('./upload/' . $date . '/')) {
            mkdir('./upload/' . $date . '/', 0777, true);
        }
        $config['upload_path'] = './upload/' . $date;
        return $config;
    }

    public function upload() {
        $date = date('Y-m-d');
        $config = $this->set_upload_options();
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_multi_upload("file")) {
            //Print data for all uploaded files.
            print_r($this->upload->get_multi_upload_data());
        } else {
            
        }
    }

}

?>
