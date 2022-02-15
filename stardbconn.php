<?php

$servername="db"; // name of database server. it is db because we're running a docker container.
$username="teacher"; // username as created in phpMyAdmin
$password="team9";
$dbname = "starlearners"; // dbname

// creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn ->connect_error)
    die("Could not Connect MySql Server: " .$conn->connect_error);

?>