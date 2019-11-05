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
    <p class="sign" align="center">Citizen Sign in</p>
    <form action="" method="POST">
      <input class="un " type="text" name="cid" align="center" placeholder="Ration Id">
      <input class="pass" type="password" name="pass" align="center" placeholder="Password">
      <input class="submit" type="submit" align="center" value="submit">
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
      <p class="forgot" align="center"><a href="loginpage2.php">Admin or Manager login</p> 
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
      
      $myusername = mysqli_real_escape_string($con,$_POST['cid']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT name FROM student WHERE ration = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;


         
         header("location: 120013120053.php");
      }else {
+         $error = "Your Login Name or Password is invalid";
      }
   }


			


	?>


