<?php
require 'db_conn.php';
session_start();
?>

<html>

<head>
    <title>Booking Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-orange.min.css" />
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>


<body background="s1.jpg">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">### PVR Cinemas ###</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="home.php">Home</a>
                    <a class="mdl-navigation__link" href="logout.php">Log Out</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Book your movie for PVR Cinema Hall</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="home.php">Home</a>
        </div>
        <br><br>
                   <div class="page-content"><center>
                
                <center>
        <div class="mdl-card mdl-shadow--16dp" style="width:1280px">
        <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Movies Booked</div>
                        <br>
                        </div>
        <br><br>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--8dp">
  <thead>
    <tr>
      <th>Booking Reference</th>
      <th>Movie name</th>
      <th>Show time</th>
      <th>Show date</th>
      <th>Price Paid</th>
      <th>Select movie</th>
    </tr>
  </thead>
  <tbody>
        <form action='canceled.php' method="POST">
            <?php
                $sql = "SELECT * from booking WHERE email='".$_SESSION["email"]."'";
                $result = mysqli_query($conn,$sql);
	            while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td><b>" . $row['b_ref'] . "</b></td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['showtime'] . "</td>";
                    echo "<td>" . $row['showdate'] . "</td>"; 
                    echo "<td>" . $row['price'] . "</td>";                               
                    echo "<td><label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"".$row['b_ref']."\">
                    <input type=\"radio\" id=\"".$row['b_ref']."\" class=\"mdl-radio__button\" name=\"cancel_selected\" value=\"".$row['b_ref']."\">
                    </label></td>";
                    echo "</tr>";
                }
	        ?>
            </tbody>
</table>
<br><br>
<div class="mdl-shadow--16dp" style="background-color:#212121"><br>
<input type="Submit" name="cancel" value="Cancel the selected movie" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                
                    
                    <br><br>
                    </div>
                    </form>
                    </div>
                    <br>
                    </div>

                    </center>
                    <center>
                    <div class="mdl-card mdl-shadow--16dp" style="width:1280px">
        <div class="mdl-shadow--16dp" style="background-color:#000000">
                        <br>
                        <div class="mdl-typography--title" style="color:#ffffff">Movies Available</div>
                        <br>
                        </div>
        <br><br>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--8dp">
  <thead>
    <tr>
      <th>Movie Id</th>
      <th>Movie name</th>
      <th>Ticket Price</th>
      <th>Category</th>
      <th>Actor</th>
      <th>Actress</th>
      <th>Director</th>
      <th>Rating</th>
      <th>Show time</th>
      <th>Show date</th>
      <th>Select movie</th>
    </tr>
  </thead>
  <tbody>
        <form action='booked.php' method="POST">
            <?php
                $sql = "SELECT * from latest";
                $result = mysqli_query($conn,$sql);
                echo "Email Id :  ".$_SESSION["email"]."";
	            while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td><b>" . $row['id'] . "</b></td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['category'] . "</td>";
                    echo "<td>" . $row['actor'] . "</td>";
                    echo "<td>" . $row['actress'] . "</td>";
                    echo "<td>" . $row['director'] . "</td>";
                    echo "<td>" . $row['rating'] . "</td>";
                    echo "<td>" . $row['showtime'] . "</td>";
                    echo "<td>" . $row['showdate'] . "</td>";                                
                    echo "<td><label class=\"mdl-radio mdl-js-radio mdl-js-ripple-effect\" for=\"".$row['id']."\">
                    <input type=\"radio\" id=\"".$row['id']."\" class=\"mdl-radio__button\" name=\"selected_movie\" value=\"".$row['id']."\">
                    </label></td>";
                    echo "</tr>";
                }
	        ?>
            </tbody>
</table>
<br><br>
<div class="mdl-shadow--16dp" style="background-color:#212121"><br>
<input type="Submit" name="book" value="Book the selected movie" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                
                    
                    <br><br>
                    </div>
                    </form>
                    </div>
                    <br><br><br>
                    </div>
        


        </div>
        </center>

            </div>
        </main>
    </body>
</html>
