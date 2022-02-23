<?php
include "header.php";
include 'stardbconn.php'; // establishes database connection 
$a = $_GET['first_name'];
$sql = "SELECT * from subscription_table WHERE first_name= '$a'" ;
$result = $conn->query($sql);
?>

<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
First Name: <br>
<input type="text" name="first_name"  value="<?php echo $row['first_name']; ?>">
<br>

Email:<br>
<input type="text" name="email_id" value="<?php echo $row['email_id']; ?>">
<br>
<br>

<input type="submit" name="submit" value="Unsubscribe " >
</form>
<?php 

if(isset($_POST['submit'])){
    $query = mysqli_query($conn,"DELETE FROM subscription_table WHERE first_name= '$a'" );
    if($query){
        echo "We are sorry to see you leave. <br>";
        echo "<a href='/Team9-Web/docs/index.html'> Go back to Home </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Your request was not successful.";}
    }
$conn->close();

include "footer.php"
?>