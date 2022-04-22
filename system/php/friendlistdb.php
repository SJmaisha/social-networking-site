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


h3 {color:#DC143C;}



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
 
	echo "Welcome To AMIDSTUS! " .$row['username'];
    
  } 
  


mysql_close($con);
?>
 
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
<a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Home</a>

  
    
    <div class="w3-dropdown-hover w3-hide-small">
     <button class="w3-button w3-padding-large" title="Messages"><i class="fa fa-user"></i><span class="w3-badge w3-right w3-small w3-green">1</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:250">
      <a href="#" class="w3-bar-item w3-button"> <span class="w3-badge w3-green">1</span>   New Friend Request</button></a>
          
   </div>
 
           
  </div>

 
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large" title="Messages"><i class="fa fa-envelope"></i><span class="w3-badge w3-right w3-small w3-green">1</span></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:220px">
      <a href="#" class="w3-bar-item w3-button"> <span class="w3-badge w3-green">1</span>   New Message</button></a>
    </div>
  </div>
    <a href="http://localhost/Amidstus/search_result.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Search"><i class="fa fa-globe"></i>Search Result</a>
    <a href="http://localhost/Amidstus/friend_request.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="FRIEND REQUEST"><i class="fa fa-globe"></i>FRIEND REQUEST</a>
   <a href="friendlistdb.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Log out"><i class="fa fa-globe"></i>FRIEND List</a>
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
		  <a href="http://localhost/Amidstus/profileupdate.html" class="btn btn-default">Edit</a>

<button onclick="http://localhost/Amidstus/profileupdate.html" type="button"  class="w3-button w3-theme"><i class="fa fa-pencil"></i>Edit your own Profile!</button>
		 
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
      <h3><center>FRIEND LIST</center></h3>	  
            </div>
			
          </div>
		  </br></br>
	<html>
<body>
<form action="profile_shownew.php"  method="get">		  
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

$result = mysql_query("SELECT * FROM relationship
WHERE (user_one_id = $_SESSION[user_id])
AND status = 1
						");

while($row = mysql_fetch_array($result))
  {

    $_SESSION['friend1']=$row['user_two_id'];
   $result2 = mysql_query("SELECT * FROM sign_up
WHERE (user_id=$_SESSION[friend1])

						");
						while($row = mysql_fetch_array($result2))
  {
echo $row['username'] ."</br></br>";

echo "<a href='profile_shownew.php?id=$row[user_id]>id'>View Timeline</a>" ."</br></br>";
echo "</form>
</html>";



  }


  }
 
  
 echo "<html>";
echo "<body>";
echo "<form action='profile_shownew1.php'  method='get'>	";

 
 $result3 = mysql_query("SELECT * FROM relationship
WHERE ( user_two_id = $_SESSION[user_id])
AND status = 1
						");
						

while($row3 = mysql_fetch_array($result3))
  {
$_SESSION['friend2']=$row3['user_one_id'];
$result4= mysql_query("SELECT * FROM sign_up
WHERE (user_id=$_SESSION[friend2])

						");
						while($row4 = mysql_fetch_array($result4))
  {    

echo $row4['username'] ."</br></br>";
echo "<a href='profile_shownew1.php?id=$row4[user_id]>id'>View Timeline</a>" ."</br></br>";
echo "</form>
</html>";
 
  }
  }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
   
  




mysql_close($con);
?> 		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  

		  
		  
		  
		  
        </div>
      </div>

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
    <!-- End Middle Column -->
    </div>
            <!-- Right Column -->
    <div class="w3-col m2"> 
      <!-- Help Request -->
              
      
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