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

$result = mysql_query("UPDATE relationship SET status = 1, action_user_id = $_SESSION[user_id]
WHERE user_one_id='$_GET[id]' AND user_two_id= $_SESSION[user_id] ");


mysql_close($con);
	header('location: amidstus.php');

?> 
