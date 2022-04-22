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





$result1 = mysql_query("SELECT *
FROM post
                       
						");
											while($row1 = mysql_fetch_array($result1))
  {    
    $_SESSION['postid']=$row1['postid'];
	
   
	  
  }

	 
		$postid = $_SESSION['postid'];
		$result = mysql_query( "SELECT * FROM post WHERE postid=$postid");
		
		
								while($row = mysql_fetch_array($result))
  { 

$n = $row['likes'];
	
	mysql_query("INSERT INTO post (user_id, postid) VALUES ('$_SESSION[user_id]', $postid)");
		mysql_query("UPDATE post SET likes=$n+1 WHERE postid=$postid");


    	


  }  
  
  header('Location: amidstus.php');

  
  
  
  
  
  
  
  
  
	?>	
		
		
		
		
		
		
		
		
