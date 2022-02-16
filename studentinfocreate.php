<?php
include "studentsinfo" ;

$parentEmail_id = $_POST["parentEmail_id"];
$SFname = $_POST["SFname"];
$SLname = $_POST["SLname"];
$age_id = $_POST["age_id"];
$medical_id = $_POST["medical_id"];
$address_id = $_POST["address_id"];

$SFName + $SLName = $student_id;

$student_id = $_POST["student_id"];

if (empty($_POST["parentEmail_id"])) {
    echo "<h1>Please enter your parental email address.</h1>";
} 
    else {
$sql="insert into subscription_table (parentEmail_id, SFname, SLname, age_id, medical_id, address_id, student_id)
values($parentEmail_id, $SFname, $SLname, $age_id, $medical_id, $address_id, $student_id)";

if($conn->query($sql) === TRUE) {
    echo "Thank you for choosing StarLearners Academy!";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>