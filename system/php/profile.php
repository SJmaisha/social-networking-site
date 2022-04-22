<?php 
if(!isset($_SESSION)){
    session_start();
}
	
?>
<?php

$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('Could not connect:'.mysql_error());
}

mysql_select_db("amidstus",$con);
mysql_query("UPDATE user_profile SET workplace ='$_POST[workplace]',educational_institution='$_POST[educational_background]'
,dob='$_POST[date_of_birth]',motto='$_POST[motto]' 
WHERE user_id ='$_SESSION[user_id]'");
	header('location: amidstus.php');
mysql_close($con);

?>