<?php 
include 'stardbconn.php' ; // establish database connection  

$teacher_id= $_POST['teacher_id']; //this stores the user inputs
$user_name= $_POST['user_name'];
$password_id= $_POST['password_id'];
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$created_at= $_POST['created_at'];

if (empty($_POST['first_name'])) {
    echo "<h1>Please input first_name</h1>";
} 
    else {
$sql="insert into teacher (teacher_id,user_name,password_id,first_name, last_name, created_at)
values('$teacher_id','$user_name','$password_id','$first_name', '$last_name', '$created_at')";

if($conn->query($sql) === TRUE) {
    echo "Successfull";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

}

?>




















