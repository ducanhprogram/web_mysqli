<?php
$mysqli = new mysqli("localhost","root","","web_mysqli", 3307);

// Check connection
if ($mysqli -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>