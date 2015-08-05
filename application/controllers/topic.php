<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


include (APPPATH . 'libraries/REST_Controller.php');

class Topic extends REST_Controller {

    public $name;

    public function __construct() {
        parent::__construct();
        $this->load->spark('restclinet/2.1.0');
        $this->load->library('Rest_Client');
    }

    public function list_get() {
        $this->get('Hello_Tung');
        $this->rest->debug();
    }

    public function add_post() {
        $config = array(
                'server' => 'http://localhost/test.local/',
        );
    }

    public function update_update() {
        
    }

    public function delete_delete() {
        
    }

}

?>
