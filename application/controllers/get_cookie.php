<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class get_cookie extends CI_Controller {

    public function index() {
        $_get = $this->input->get();

        echo "<pre>";
        var_dump($_get);
        
        
    }

}
