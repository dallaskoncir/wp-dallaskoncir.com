<?php
require_once('Mandrill.php');
$apiKey = 'JdNOuKT4pC_I6xi8GwYcMQ';
$mandrill = new Mandrill($apiKey);


$request = $mandrill->messages->send($_POST['data']['message'], false, 'Main Pool', '');

print_r(json_encode($request));