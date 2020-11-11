<?php
$servername = "amokhalaf.net.mysql";
$username = "amokhalaf_netnorddb";
$password = "khalaf2700";
$dbname = "amokhalaf_netnorddb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);
}

?>




