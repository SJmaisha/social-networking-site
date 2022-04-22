<?php

include 'header.php';
?>

<h1>User page</h1>


<div class="users-container">
<?php

   $title=mysqli_real_escape_string($conn,$_GET['title']);
    
   $sql="SELECT * FROM sign_up WHERE username='$title'";
   $result=mysqli_query($conn,$sql);
   $queryResults=mysqli_num_rows($result);
   
   
   if($queryResults > 0){
	   
	   while($row=mysqli_fetch_assoc($result)){
		   echo "<div class='user-box'>
		   <h3>".$row['username']."</h3>
		     <p>".$row['firstname']."</p>
			   <p>".$row['lastname']."</p>
		   <h4>".$row['profile_pic']."</h4>
		 
		   
		   </div>";
	   }
   }
?>
</div>

</body>
</html>