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
    <p class="sign" align="center">Download your e-Ration Card</p>
    <form action="" method="POST">
      <input class="un " type="text" name="cid" align="center" placeholder="Ration Id">
      <input class="pass" type="password" name="pass" align="center" placeholder="Birth Year">
      <input class="submit" type="submit" align="center" value="submit">
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
         $host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "library"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}


    $uname = mysqli_real_escape_string($con,$_POST['cid']);
   // $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);
$query = mysqli_query($con,"SELECT * FROM student where ration='$uname'");
$row = mysqli_fetch_assoc($query);
$name=$row['ration'];
echo "<h2".$name."</h2>";
$test='file:///C:/xampp/htdocs/LiB/doc/'; 
$test.=$name;
$test.='.pdf';
echo "<h2>" .$test. "</h2>";
    
       //$f="vlr.pdf";   

       $file = ("$test");

       $filetype=filetype($file);

       $filename=basename($file);

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);

       readfile($file);
         exit;
   }
         
         
      
      else {
         $alert = "Your Login Name or Password is invalid";
      }
    
}
      


			


	?>


