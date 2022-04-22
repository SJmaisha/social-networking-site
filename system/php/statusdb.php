
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
date_default_timezone_set('Bangladesh/Chittagong'); 
$date = date('Y-m-d H:i:s');
if ($_POST['emergencypost'] == 'Emergency')
{
	mysql_query("INSERT INTO emergency(user_id,username,user_post,post_time)
VALUES ( '$_SESSION[user_id]','$_SESSION[username]','$_POST[user_post]','$date')");

	
} 
if ($_POST['emergencypost'] == 'General')
{
	
	mysql_query("INSERT INTO post (user_id,username,user_post,post_time)
VALUES (  '$_SESSION[user_id]','$_SESSION[username]','$_POST[user_post]','$date')");

}




header("Location: amidstus.php");

mysql_close($con);
?>