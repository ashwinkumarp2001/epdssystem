<html>

<head>
  <link rel="stylesheet" href="stylea.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Admin Sign in</p>
    <form action="" method="POST">
      <input class="un " type="text" name="adminuser" align="center" placeholder="Shop ID">
      <input class="pass" type="password" name="adminpass" align="center" placeholder="Password">
      <input class="submit" type="submit" align="center" value="submit">

      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
      <p class="forgot" align="center"><a href="loginpage1.php">Citizen login</p>
</form>
            
                
    </div>
     
</body>

</html>
<?php

	$dbhost="localhost";
	$username="root";
	$password="";
	$db="library";


	$con=mysqli_connect("$dbhost","$username","$password");
	
	mysqli_select_db($con,$db);

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['adminuser']);
      $mypassword = mysqli_real_escape_string($con,$_POST['adminpass']); 
      
      $sql = "SELECT area FROM admin WHERE shopid = '$myusername' and adminpass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
         
         header("location: issueitems.php");
      }else {
         $alert = "Your Login Name or Password is invalid";
      }
   }


			


	?>

