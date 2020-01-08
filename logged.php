<?php
	require 'db_conn.php';
	$login = $_POST['login'];
	session_start();
	$pass = $_POST['pass'];
	if (isset($_POST['login']))
?>
<html>
<head>
<style>
div{
	box-shadow:0 4px 8px 0 rgb(0,0,255);
	transition:0.3s;
	width:45%;
	color:white;
}
body{
	background-image:url(ironman.jpg);
	background-size:cover;
}

</style>
<title>User Info</title>
</head>
<body>
	<?php
	$sql="SELECT * FROM user_det where email_id='".$login."' and password='".$pass."'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	/*echo '<script type="text/javascript">alert("'.$count.'");history.go(-1);</script>';*/
	if($count==1)
	{
		echo '<script type="text/javascript">alert("You have successfully Logged in");(window.location = "current_movies.php");</script>';
		/*$row=mysqli_fetch_assoc($result);
		echo '<br><br><br><br><br><br><br><font color="white"size="30"><div>Email-Id: '.$row['email_id'].'<br>Name: '.$row['name'].'<br>Mobile Number: '.$row['mob'].'</div></font>';
		echo '<p style="position:fixed;bottom:10%;width:100%;text-align:center;"><a href="home.php"><input type="button" value="Log Out"></a></p>';*/

		$_SESSION["email"] =$login;
    }
   else
    {   
		echo '<script type="text/javascript">alert("Invalid Email-Id or Password");history.go(-1);</script>';
	}
	
	?>
</body>
</html>