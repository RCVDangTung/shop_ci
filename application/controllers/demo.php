<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Someclass');
    }

    public function index() {
//        $this->someclass->some_function();
        $param = array(
            'name' => 'Tung',
            'age' => '23'
        );
        $this->someclass->auth($param);
        
        $this->output->enable_profiler(TRUE);
    }

}

?>
