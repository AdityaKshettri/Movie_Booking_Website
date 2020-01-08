<?php
require 'db_conn.php';
session_start();
$selected = $_POST['selected_movie'];
if (isset($_POST['book'])){
    $sql1="SELECT * FROM latest WHERE id='".$selected."'";
    $result1=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_assoc($result1);
    $sql="INSERT INTO booking VALUES('DEFAULT','".$_SESSION["email"]."','".$row["id"]."','".$row["name"]."','".$row["showdate"]."','".$row["showtime"]."','".$row["price"]."')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo '<script type="text/javascript">alert("'.mysqli_error($conn).'");history.go(-1);</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("Movie Booked Successfully");(window.location = "current_movies.php");</script>';	
    }
}
?>
