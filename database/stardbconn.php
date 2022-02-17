<?php

$servername="127.0.0.1"; // name of database server. it is db because we're running a docker container.
$username="teacher"; // username as created in phpMyAdmin
$password="team9";
$dbname = "starlearners"; // dbname
$port = 6034;

// creating connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection

if ($conn ->connect_error)
    die("Could not Connect MySql Server: " .$conn->connect_error);

?>