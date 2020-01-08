<?php
	require 'db_conn.php';
	$movie = $_POST['movie'];
	if (isset($_POST['search']))
?>
<html>
<head>
<style>
div{
	box-shadow:0 4px 8px 0 rgb(0,0,255);
	transition:0.3s;
	width:45%;
	color:black;
}
body{
	background-image:url(a5.jpg);
	background-size:cover;
}

</style>
<title>Search Results</title>
</head>
<body>
	<?php
	$sql="SELECT * FROM movie_det where movie_name='".$movie."'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	if($count>=1)
	{
		$row=mysqli_fetch_assoc($result);
		echo '<br><br><br><br><br><br><br><font color="white"size="25"><div>Movie name: '.$row['movie_name'].'<br>Category: '.$row['category'].'<br>Actor: '.$row['actor'].'<br>Actress: '.$row['actress'].'<br>Director: '.$row['director'].'<br>Producer: '.$row['producer'].'<br>Rating: '.$row['rating'].'</div></font>';
		echo '<p style="position:fixed;bottom:10%;width:100%;text-align:center;"><a href="home.php"><input type="button" value="HomePage"></a></p>';

		
    }
   else
    {   
		echo '<script type="text/javascript">alert("There are 0 movie with this name");history.go(-1);</script>';
	}
	
	?>
</body>
</html>