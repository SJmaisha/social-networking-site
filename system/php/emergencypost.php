<html>
<head>
<style>
h6 {color:	#FF6347;}
</style>
</head>
		                <?php
$con = mysql_connect("localhost","","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("amidstus", $con);
$result1 = mysql_query("SELECT *
FROM emergency
ORDER BY post_time DESC
                       
						");
											while($row1 = mysql_fetch_array($result1))
  {    
    include('username.html');
	
   echo $row1['username']."<br/>";
   
   echo $row1['post_time']."<br/></br><br/>";
   echo "<h6 >EMERGENCY!!!</h6>";
  include('userpostbefore.html');

     echo $row1['user_post']."<br/></br><br/>";
  
	  include('userpost.html');
	echo "<a href='likeindex.php' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' title='Like'><i class='fa fa-globe'></i>Like</a>";	  
echo "<a href='http://localhost/Amidstus/index.php' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' title='Comment'><i class='fa fa-globe'></i>Comment</a>";
	  
	  
	  
  }
	
    
  mysql_close($con);
?>  
 </html> 