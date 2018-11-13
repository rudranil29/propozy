<!DOCTYPE html>
<html lang="en-US">
<head>
<title>HTML select tag</title>
 <?php
/**
 * Root directory of Drupal installation.
 */

$path = $_SERVER['DOCUMENT_ROOT'];
chdir($path."/propoxy");
define('DRUPAL_ROOT', getcwd()); 
$base_url = 'http://localhost/propoxy';
require_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
global $base_url;
global $user;
 $json_data = file_get_contents('web/template1/data.txt');
	if($user->uid) {
	 $json_data = file_get_contents('web/template1/userdata/data_'.$user->uid.'.txt');
	 if(!$json_data) {
	   $json_data = file_get_contents('web/template1/data.txt');
	 }
	}
 $data = json_decode($json_data, true);
 $Hometitle = $data['Template1']['Home'][0]['Title'];
 $HomeDescription = $data['Template1']['Home'][1]['Description'];
 $Hometitle = $user->name;

?>
</head>
<body>

<?php //print youtubechannel_user_getview('UCeTVoczn9NOZA9blls3YgUg');
print 'UCA09ogM92UefGEHtSZy5zkw';
print youtubechannel_user_getview('UCeTVoczn9NOZA9blls3YgUg'); ?>
</body>
</html>