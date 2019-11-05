<?php
	$connection1 = mysqli_connect('localhost','root','');
	if(!$connection1){
		die("Connection Failed");
	}
	else{
		//echo '<script>alert("Connection Established!"); </script>';
		mysqli_select_db($connection1,'nodue');
	}
	if(session_id()=="")
	{
		session_start();
	}
?>