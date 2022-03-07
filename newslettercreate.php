<?php 
include 'stardbconn.php' ; // establish database connection  

$first_name= $_POST['first_name']; //this stores the user inputs
$last_name= $_POST['last_name'];
$email_id= $_POST['email_id'];


if (empty($_POST['first_name'])) {
    echo "<h1>Please input first_name</h1>";
} 
    else {
$sql="insert into subscription_table (first_name, last_name, email_id)
values('$first_name', '$last_name', '$email_id')";

if($conn->query($sql) === TRUE) {
    echo "Thank you for subscribing to our Newsletter <br>";
    echo  "<a href='/team9-Web/home.php'> Go back to Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

}

?>
