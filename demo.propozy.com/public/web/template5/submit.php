<?php
$path = $_SERVER['DOCUMENT_ROOT'];
chdir($path);
define('DRUPAL_ROOT', getcwd());
$base_url = 'http://demo.propozy.com';
require_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
global $user;
if(isset($user->uid)) {
 if(isset($_REQUEST)) { 
     //print_r($_REQUEST);
	 $data = '{
		"Template5": {
			"youtubechannel": "'.$_REQUEST['youtubechannel'].'",
			"image": [ "'.$_REQUEST['image'][0].'",
			"'.$_REQUEST['image'][1].'",
			"'.$_REQUEST['image'][2].'",
			"'.$_REQUEST['image'][3].'"]		
		}
	 }';
	$location = DRUPAL_ROOT.'/web/template5/userdata'; 
	print DRUPAL_ROOT;
	$fp = fopen($location . "/data_".$user->uid.".txt","wb");
	print_r($fp); 
	fwrite($fp,$data);
	header('Location: index.php');
 }

}


?>