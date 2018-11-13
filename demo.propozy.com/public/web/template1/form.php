<?php

global $user;
if($user->uid) {
		 $json_data = file_get_contents('web/template1/userdata/data_'.$user->uid.'.txt');
		 if(!$json_data) {
		   $json_data = file_get_contents('/data.txt');
		 }	
?>
<!DOCTYPE html>
<html>
<head>
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
    width: 1097px;
    height: 385px;
    margin: 0px;
    border: 1px solid;
    z-index: 20000000;
    zoom: 1;
    font-size: 10px;
    background: #ddd;
}

</style>
</head>
<body>
<form action="submit.php" method="post">
<b> Menu:</b><br>
    <input type="text" name="Menu[0]" value="<?php print $data['Template1']['Menu'][0]; ?>">
    <input type="text" name="Menu[1]" value="<?php print $data['Template1']['Menu'][1]; ?>">
    <input type="text" name="Menu[2]" value="<?php print $data['Template1']['Menu'][2]; ?>">
    <input type="text" name="Menu[3]" value="<?php print $data['Template1']['Menu'][3]; ?>">
  <br>
  <table>
  <tr>
    <th>Home</th>
    <th>About</th>
    <th>Practice Areas</th>
	<th>OURTEAM</th>
	<th>Contact Us</th>
  </tr>
  <tr>
  <td>
  <input type="text" name="Home[Title]" value="<?php print $data['Template1']['Home'][0]['Title']; ?>"> <br/>
  <textarea name="Home[Description]" rows="10" cols="30"><?php print $data['Template1']['Home'][1]['Description']; ?></textarea>
  </td>
  <td>
  <input type="text" name="About[Title]" value="<?php print $data['Template1']['About'][0]['Title']; ?>"> <br/>
  <textarea name="About[Description]" rows="10" cols="30"><?php print $data['Template1']['About'][1]['Description']; ?></textarea>
  </td>
  <td>
  <input type="text" name="PracticeAreas[Title]" value="<?php print $data['Template1']['PracticeAreas'][0]['Title']; ?>">
  <br>
  <textarea name="PracticeAreas[Description]" rows="10" cols="30"><?php print $data['Template1']['PracticeAreas'][1]['Description']; ?></textarea>
  </td>
  <td>
  <input type="text" name="OURTEAM[Title]" value="<?php print $data['Template1']['OURTEAM'][0]['Title']; ?>">
  <br>
  <textarea name="OURTEAM[Description]" rows="10" cols="30"><?php print $data['Template1']['OURTEAM'][1]['Description']; ?></textarea>
  </td>
  <td>
  <input type="text" name="ContactUs[Title]" value="<?php print $data['Template1']['ContactUs'][0]['Title']; ?>">
  <br>
  <textarea name="ContactUs[Description]" rows="10" cols="30"><?php print $data['Template1']['ContactUs'][1]['Description']; ?></textarea>
  </td>
  </tr>
  </table>
  <br>
  <b> Video </b>
  <input type="text" size="100" name="Video" value="<?php print $data['Template1']['Video']; ?>">
  <br>
  <input type="submit" value="Submit">
</form> 

<?php } ?>
</body>
</html>