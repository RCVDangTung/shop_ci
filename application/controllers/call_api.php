<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class call_api extends CI_Controller {

    var $wdsl = 'http://tracking.mickey.com.vn/Tracking.asmx?wsdl';

    public function api() {
        $this->load->library("nusoap");
        $client = new nusoap_client($this->wdsl, 'wsdl', FALSE, FALSE, FALSE, FALSE, 30, 60);
        $client->decode_utf8 = false;


        $err = $client->getError();
        if ($err) {
            return 0;
        }

        $result = $client->call('Fdt_tracking_list', array(
            'b_ma_dvi' => '160',
            'b_so_hieu' => '1212'
                )
        );
        $items = $result['Fdt_tracking_listResult']['TrackingItem'];

        echo "<pre>";
        var_dump($items);
//        print_r($items);
//        $result = $client->call('submit', $param, '', '', false, true);
//        if ($client->fault || $client->getError()) {
//            echo json_encode($response);
//            exit;
//        } else if (isset($result['submitReturn'])) {
//            $_data = json_decode($result['submitReturn']);
//            $response["call_id"] = $_data->data->call_id;
//            if ($response["call_id"] != -1) {
//                $response["state"] = 1;
//                $response['msg'] = "Tạo cuộc gọi thành công!";
//            }
//        }
    }

    public function demo_api() {
        $objClient = new SoapClient($this->wdsl, 'wsdl', FALSE, FALSE, FALSE, FALSE, 30, 60);

        $objClient->decode_utf8 = false;
        $result = $objClient->call('Fdt_tracking_list', array(
            'b_ma_dvi' => '160',
            'b_so_hieu' => '1212'
        ));

        $items = $result['Fdt_tracking_listResult']['TrackingItem'];

        print_r($items);
//        $param = Array(
//            'input' => $inputCall
//        );
//        $result = $objClient->submit($param);
    }

    function test_soap() {
        require_once(APPPATH . 'libraries/nusoap/nusoap.php'); //includes nusoap
        // Same as application/libraries/nusoap/nusoap.php
        $n_params = array('name' => 'My Name', 'email' => 'my@email.adr');
        $client = new nusoap_client('http://server.com/soap/server.php');
        $result = $client->call('soapMethod', $n_params);
        echo $result;
    }

//    http://blog.paprix.com/codeiniter/soap-server-client-in-codeigniter-tutorial/
    
//    http://www.php-guru.in/2013/soap-server-in-codeigniter-using-nusoap-library/  
}
