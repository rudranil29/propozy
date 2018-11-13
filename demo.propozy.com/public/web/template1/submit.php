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
		"Template1": {
			"Video" : "'.$_REQUEST['Video'].'",
			"Menu": [ "'.$_REQUEST['Menu'][0].'","'.$_REQUEST['Menu'][1].'","'.$_REQUEST['Menu'][2].'", "'.$_REQUEST['Menu'][3].'"],
			"Home": [
				{"Title":"'.$_REQUEST['Home']['Title'].'"},
				{"Description":"'.$_REQUEST['Home']['Description'].'"}
			],
			"About": [
				{"Title":"'.$_REQUEST['About']['Title'].'"},
				{"Description":"'.$_REQUEST['About']['Description'].'"}
			],
			"PracticeAreas": [
				{"Title":"'.$_REQUEST['PracticeAreas']['Title'].'"},
				{"Description":"'.$_REQUEST['PracticeAreas']['Description'].'"}
			],
			"OURTEAM": [
				{"Title":"'.$_REQUEST['OURTEAM']['Title'].'"},
				{"Description":"'.$_REQUEST['OURTEAM']['Description'].'"}
			],
			"ContactUs": [
				{"Title":"'.$_REQUEST['ContactUs']['Title'].'"},
				{"Description":"'.$_REQUEST['ContactUs']['Description'].'"}
			]
		}
	 }';
	$location = DRUPAL_ROOT.'/web/template1/userdata'; 
	$fp = fopen($location . "/data_".$user->uid.".txt","wb");
	fwrite($fp,$data);
	fclose($fp);
	header('Location: index.php');
 }

}


?>