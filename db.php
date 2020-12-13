<?php

$servername = "remotemysql.com";
$username = "mUE7sMTWfF";
$password = "Kz0BBzji7z";
$db = "mUE7sMTWfF";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else {echo "connection succeed";}



?>
