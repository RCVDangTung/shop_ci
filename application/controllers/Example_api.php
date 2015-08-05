<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


//require(APPPATH'.libraries/REST_Controller.php');

include (APPPATH . 'libraries/REST_Controller.php');

class Example_api extends REST_Controller {

    function demo_get() {
        $data->name = 'Hello_Tung';
        $this->response($data, 200);
//        $data = array('returned: ' . $this->get('id'));
//        $this->response($data);
    }
    
    

    

}

?>
