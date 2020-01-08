<?php
	require 'db_conn.php';
	$email_id = $_POST['email_id'];
	$name = $_POST['name'];
	$mob = $_POST['mob'];
	$password = $_POST['password'];
	if (isset($_POST['signup']))
	{
		
		$sql="INSERT INTO user_det VALUES('".$email_id."','".$name."','".$mob."','".$password."')";
		$result=mysqli_query($conn,$sql);
		if(!$result)
		{
			echo '<script type="text/javascript">alert("'.mysqli_error($conn).'");history.go(-1);</script>';
        }
        else
        {
			echo '<script type="text/javascript">alert("You have successfully Signed Up");(window.location = "login.php");</script>';	
		}
		
		
		
	}
?>