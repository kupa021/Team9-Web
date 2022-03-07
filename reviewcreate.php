<?php 
include 'stardbconn.php' ; // establish database connection  

    $rating=$_POST['rating'];
    $statement=$_POST['statement'];

if (empty($_POST['rating'])) {
    echo "<h1>Please Choose a rating</h1>";
} 
    else {
$sql="insert into review (rating, statement)
  value('$rating', '$statement')";

if($conn->query($sql) === TRUE) {
    echo "Thank you for reviewing us";
    echo  "<a href='/team9-Web/home.php'> Go back to Home </a>";
    
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

}

?>
