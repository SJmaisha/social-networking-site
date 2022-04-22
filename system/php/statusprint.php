
		                <?php
$con = mysql_connect("localhost","","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("amidstus", $con);








$result = mysql_query("SELECT *
FROM post
ORDER BY post_time DESC
                       
						");
							  echo '<script language="javascript">';
echo 'alert("EMERGENCY POST! please Check!!!")';
echo '</script>';
						
						while($row = mysql_fetch_array($result))
  {    
    include('username.html');

	
	
	
	
	
	

	
	
	
	
	
	
	
	
	
   echo $row['username']."<br/>";
   	
 
   echo $row['post_time']."<br/></br><br/>";
   
  include('userpostbefore.html');

     echo $row['user_post']."<br/></br><br/>";
  
	  include('userpost.html');
echo "<a href='likeindex.php' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' title='Like'><i class='fa fa-globe'></i>Like</a>";
echo $row['likes'] . " likes</br>"; 
	  
echo "<a href='http://localhost/Amidstus/index.php' class='w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white' title='Comment'><i class='fa fa-globe'></i>Comment</a>";
  }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
    
  mysql_close($con);
?>  
 
   



  
		
		
		
		