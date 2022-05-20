<?php
$mysqli = new mysqli("localhost","root","","game");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->onnect_error;
  exit();
}
?>