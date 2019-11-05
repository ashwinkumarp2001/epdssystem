<!DOCTYPE html>
<html>
<head>
	<title>Add Items</title>
	<link rel="stylesheet" href="additem_s.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
</head>
<body>

<form action="additems.php" method="POST">


	<div class="icon-bar">
	<a href="homepage.php"><i class="fa fa-home" title="Home"></i></a> 
   <a   href="loginpage1.php"><i class="fa fa-user-o" title="Citizen Login"></i></a> 
   <a   href="loginpage2.php"><i class="fa fa-user-circle-o" title="Admin Login"></i></a>  
	    <a href="issueitems.php"><i class="fa fa-sign-out" title="Issue Items"></i></a>
   
      <a class="active" href="additems.php"><i class="fa fa-plus" title="Add Items"></i></a>
  
  </div>



<div class="detailsDiv" align="center">
	<h1 align="center" id="heading">Enter Details Of items</h1>
	<label id="b">Item Code		</label>		<input type="text"	id="code" name="item code" required="required" maxlength="13"><br>
	<label id="b">Item name 	</label>		<input type="text" id="a" name="Item name" required="required"><br>
	<label id="f">Supply Month 	</label>		<input type="number" id="e" name="Month" required="required"><br>
	<button type="submit" name="sbmBtn" class="submit" ><span>SUBMIT</span></button>
	</div>
	

	
	<?php

	$dbhost="localhost";
	$username="root";
	$password="";
	$db="library";


	$con=mysqli_connect("$dbhost","$username","$password");
	
	mysqli_select_db($con,$db);


			function getPosts()
			{
				$posts=array();
				$posts[0]=$_POST['code'];
				$posts[1]=$_POST['department'];
				$posts[2]=$_POST['title'];
				$posts[3]=$_POST['author'];
				$posts[4]=$_POST['edition'];
				$posts[5]=$_POST['section'];
				return $posts;
			}
			
		if(isset($_POST['sbmBtn']))
		{
				$data=getPosts();

				$addBook_query="INSERT INTO `book`(`ISBN`, `Department`,`Title`, `Author`,  `Edition`, `Section`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]');";

				$addBook_result=mysqli_query($con,$addBook_query);

				if($addBook_result){
					if(mysqli_affected_rows($con)>0)
						{
							
							echo '<script language="javascript">';
							echo 'alert("Book Added To The DataBase")';
							echo '</script>';
						}else{
							echo "No data inserted.";	
							}

				}else{
					echo "RESULT ERROR";
				}
		}




	?>
</form>

</body>
</html>