<?php
require 'db_conn.php';
$cancel_selected = $_POST['cancel_selected'];
if (isset($_POST['cancel'])){
    $sql="DELETE FROM booking WHERE b_ref='".$cancel_selected."'";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo '<script type="text/javascript">alert("'.mysqli_error($conn).'");history.go(-1);</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("Movie Canceled Successfully");(window.location = "current_movies.php");</script>';	
    }
}
?>
