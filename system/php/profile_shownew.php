<?php 
if(!isset($_SESSION)){
    session_start();
}
		
?>
<?php include('login.php') ?>


<!DOCTYPE HTML>
<html>
<title>Am!dstus</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style2.css">
<link rel='stylesheet' href="style3.css">
<link rel="stylesheet" href="style4.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}


</style>
<body class="w3-theme-15">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d3 w3-left-align w3-large">
 <?php
 $username;
 $user_id;
 $email=$_SESSION['email'];
$con = mysql_connect("localhost","","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }  
mysql_select_db("amidstus", $con);

$result = mysql_query("SELECT * FROM sign_up
                        WHERE email ='$email'
						");
						

while($row = mysql_fetch_array($result))
  {   
 $_SESSION['username']=$row['username'];
 $_SESSION['email']=$row['email'];
  $_SESSION['user_id']=$row['user_id'];
 
	echo "<center>Welcome To AMIDSTUS! " .$row['username'] ."</center>";
    
  } 
  


mysql_close($con);
?>
 
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
<a href="http://localhost/Amidstus/amidstus.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>
    <div class="w3-dropdown-hover w3-hide-small">
   
           
  </div>

 
  <div class="w3-dropdown-hover w3-hide-small">
      
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:220px">

    </div>
  </div>
  <a href="http://localhost/Amidstus/index_search.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Search"><i class="fa fa-globe"></i>Search to find friends!</a>
    <a href="http://localhost/Amidstus/friend_request.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="FRIEND REQUEST"><i class="fa fa-globe"></i>FRIEND REQUEST</a>
   <a href="friendlistdb.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Friend List"><i class="fa fa-globe"></i>FRIEND List</a>
   <a href="emergency.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="URGENT POST"><i class="fa fa-globe"></i>Emergency POST!!!</a>
   <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Log out"><i class="fa fa-globe"></i>Log Out</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account"><img src="p1.png" class="w3-circle" style="height:20px;width:25px" alt="Avatar"></a>
 </div>
</div>


<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card-2 w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
		 
         <p class="w3-center"><img src="p1.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
          <p> <center>
		  <a href="http://localhost/Amidstus/profileupdate.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4">Edit your own Profile!</a>


		 
            </center> </p>
         <hr>
		 
		 
<?php
if(!isset($_SESSION)){
    session_start();
}
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('Could not connect:'.mysql_error());
}
echo  $_SESSION['username']."</br>";
echo  $_SESSION['email']."</br>";
mysql_select_db("amidstus",$con);
$result = mysql_query("SELECT * FROM user_profile
WHERE user_id= '$_SESSION[user_id]'");
while($row = mysql_fetch_array($result))
{
echo $row['workplace'];echo "<br />";
echo $row['educational_institution'];echo "<br />";
echo $row['dob'];echo "<br />";
echo $row['motto'];echo "<br />";

}

mysql_close($con);

?> 
		 
		 
        </div>
      </div>
      <br>
      
      
	  
	  
	  
	  
	   <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">  
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-round w3-white">
            <div class="w3-container w3-padding">
      




	  

    	
	
	
		    
            </div>
          </div>
        </div>
      </div>
	  
	  
	  
	  
	  
	  
	  
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
$result1 = mysql_query("SELECT * FROM sign_up
WHERE user_id= $_SESSION[friend1] ");
echo "<center>";
echo "PROFILE INFORMATIOM</br></br>";
while($row1 = mysql_fetch_array($result1))
{ 

echo $row1['username']."</br></br>";
echo $row1['email']."</br></br>";
}


$result = mysql_query("SELECT * FROM user_profile
WHERE user_id= $_SESSION[friend1]");
while($row = mysql_fetch_array($result))
{
echo $row['workplace'];echo "<br /><br />";
echo $row['educational_institution'];echo "<br /><br />";
echo $row['dob'];echo "<br /><br />";
echo $row['motto'];echo "<br /><br />";

}
mysql_close($con);
echo "</center>";
?> 
	  
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
<!--statusprint-->
<?php
  include('statusprinttime.php');
  ?>
  
    <!-- End Middle Column -->
    </div>
            <!-- Right Column -->
    <div class="w3-col m2"> 
            
      
      <br>

    <!-- End Right Column -->
    </div>
	
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5>A sincere try of team "IIUC BLESSING"</h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <p> Made by Brishti,Maisha and Nafisa</p>
</footer>
 
<script>


// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
} 



</script>

</body>
</html> 
