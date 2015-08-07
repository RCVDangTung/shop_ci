<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo '<p>==============================footer_view1</p><br />';
var_dump($user);
$user['name'] = 'Hai';
$data['user'] = $user;
$this->load->view('footer',isset($data)?$data:NULL);

?>
