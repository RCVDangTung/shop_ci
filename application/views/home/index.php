<?php
echo '<p>==============================home/index</p><br />';    
var_dump($user);
//$user['name'] = 'Hai';
//$data['user'] = $user;
$this->load->view('footer_view1', isset($data)?$data:NULL);

?>
