<?php

global $user;
if($user->uid) {
		 $json_data = file_get_contents('web/template5/userdata/data_'.$user->uid.'.txt');
		 if(!$json_data) {
		   $json_data = file_get_contents('/data.txt');
		 }	
		 //$data = json_decode($json_data, true);
		 //print_r($data); exit;
?>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

.fom-box {
    position: absolute;
    width: 580px;
    height: 614px;
    margin: 0px;
    border: 1px solid;
    z-index: 20000000;
    zoom: 1;
    font-size: 10px;
    background: #ddd;
	margin:5px;
	padding:5px;
}
.form-box input {
	 padding: 5px;
	 margin:5px; 
	 width: 440px;
}
</style>

<form action="submit.php" method="post" class="form-box">
<table>
<b> Images:</b>
<tr>
   <td> Enter your Youtube Channel</td>
   <td><input type="text" name="youtubechannel" value="<?php print $data['Template5']['youtubechannel']; ?>"></td>
</tr>
<tr>
   <td> <img src="<?php print $data['Template5']['image'][0]; ?>" width="100px" height="100px"></td>
   <td><input type="text" name="image[0]" value="<?php print $data['Template5']['image'][0]; ?>"></td>
</tr>
<tr>
   <td><img src="<?php print $data['Template5']['image'][1]; ?>" width="100px" height="100px"></td>
   <td> <input type="text" name="image[1]" value="<?php print $data['Template5']['image'][1]; ?>"> </td>
</tr>
<tr>
   <td><img src="<?php print $data['Template5']['image'][2]; ?>" width="100px" height="100px"></td>
   <td> <input type="text" name="image[2]" value="<?php print $data['Template5']['image'][2]; ?>"> </td>
</tr>
<tr>
   <td><img src="<?php print $data['Template5']['image'][3]; ?>" width="100px" height="100px"></td>
   <td> <input type="text" name="image[3]" value="<?php print $data['Template5']['image'][3]; ?>"> </td>
</tr>
</table>
  <input type="submit" value="Submit">
</form> 


<?php } ?>
