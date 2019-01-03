<?php
require_once('class.ipBlacklistTool.php');

$ip_check = new ipBlacklistTool();
$ip_check->set_ip(array('35.227.168.55', '125.99.57.194'));
$result = $ip_check->get_result();

echo "<pre>";
print_r($result);
die();

