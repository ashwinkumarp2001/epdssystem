<!DOCTYPE html>
<html>
<head>
	<title>Issue Items</title>
	<link rel="stylesheet" href="issueBoo_style.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form action="issueitems.php"  method="POST">
   <div class="icon-bar">
	    <a href="homepage.php"><i class="fa fa-home" title="Home"></i></a> 
       <a  href="loginpage1.php"><i class="fa fa-user-o" title="Citizen Login"></i></a> 
       <a   href="loginpage2.php"><i class="fa fa-user-circle-o" title="Admin Login"></i></a> 
	    <a class="active"  href="issueitems.php"><i class="fa fa-sign-out" title="Issue Items"></i></a>
   
      
  
  </div>


<div class="detailsDiv" align="center">
<h1 align="center" id="heading">Issue Items</h1>
<label id="b">Ration ID No</label>	
<form action="" method="POST">		
	<input class="un " type="integer" name="ratio" align="center" placeholder="Enter 10 digit number"> <br> <br>
	<label id="b">Item </label> <input class="pass" type="text" name="ic" align="center" placeholder="Item ">
      
      
      <input class="submit" type="submit" align="center" value="Issue">
	 
	  
<!-- <input type="integer" id="r" name="Enter 12 digit number" required="required" maxlength="10"> <br> -->
<!--<label id="b">Item Code</label>		<input type="number" id="d" name="isbn" required="required" maxlength="13"><br> -->
<!-- <label id="b">Issue Date</label><input type="text" id="a" name="issueDate" required="required"><br> -->
<!-- <button type="submit" name="issueBtn" class="submit" ><span>ISSUE</span></button> -->
<!--<input type="submit"  class="submit" name="issueBtn">-->
</div>

     <!-- <input class="un " type="text" name="adminuser" align="center" placeholder="Enter 10 digit number">
      <input class="pass" type="password" name="adminpass" align="center" placeholder="Item Code">
      <input class="submit" type="submit" align="center" value="submit"> -->

</form>
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
      
      $myusername = mysqli_real_escape_string($con,$_POST['ratio']);
      $mypassword = mysqli_real_escape_string($con,$_POST['ic']); 
      
      $sql = mysqli_query($con,"insert into item (itemcode,ration) values ('".$mypassword."','".$myusername."')");

	  //$query = mysqli_query($con,"select * from student where ration = '$myusername' ");
	  $sql1 = "SELECT * FROM student WHERE ration = '$myusername' ";
      $result = mysqli_query($con,$sql1);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($sql) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
         header("Location: issued.php");
      
      }else {
		$alert = "Your Login Name or Password is invalid";
		 echo "ERROR";
	  }
	}
	else{
		$alert = "Your Login Name or Password is invalid";
		 echo "<p align=center>(Invalid Ration ID &#10060) </p> ";;
	}
   }
   



?>