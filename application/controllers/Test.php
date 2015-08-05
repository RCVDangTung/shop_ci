<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    public function index() {
//        $this->load->view('test/api');
//        var_dump(APPPATH);
        var_dump(BASEPATH);
    }
    
    

}

?>
