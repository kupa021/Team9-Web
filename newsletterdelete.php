<?php

include "stardbconn.php";
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM subscription_table WHERE id= '$a'");
$row= mysqli_fetch_array($result);
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
<input type="submit" name="submit" value="Unsubscribe" >
</form>
<?php 

if(isset($_POST['submit'])){
    $query = mysqli_query($conn,"DELETE FROM subscription_table WHERE id= '$a'");
    if($query){
        echo "We are sorry to see you leave. <br>";
        echo "<a href='/Team9-Web/subscriptionpage.php'> Go back to Subscription Page </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Your unsubscription not successful.";}
    }
$conn->close();

?>