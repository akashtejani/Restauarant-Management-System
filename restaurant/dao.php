<?php
  $server = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "Restaurant";

  $conn = new mysqli($server,$dbuser,$dbpass,$dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
?>