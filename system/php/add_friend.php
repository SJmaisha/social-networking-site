		  <?php 
if(!isset($_SESSION)){
    session_start();
}
?>
	<?php
	
$con = mysql_connect("localhost","","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }  
mysql_select_db("amidstus", $con);

 

$sql="INSERT INTO relationship (user_one_id, user_two_id,status, action_user_id)
VALUES
($_SESSION[request],$_SESSION[requestto],0,$_SESSION[request])";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}


mysql_close($con);
header('location: amidstus.php');
?> 
