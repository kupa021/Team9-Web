<?php

include "stardbconn.php";
$a = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM subscription_table WHERE id='$a'");
$row= mysqli_fetch_array($result);
?>

<h1> Modify or Change your data </h1>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
First Name: <br>
<input type="text" name="first_name"  value="<?php echo $row['first_name']; ?>">
<br>
Last Name :<br>
<input type="text" name="last_name" value="<?php echo $row['last_name']; ?>">
<br>
Email ID:<br>
<input type="text" name="email_id" value="<?php echo $row['email_id']; ?>">
<br>
<br>

<input type="submit" name="submit" value="Modify" >
</form>
<?php 
if(isset($_POST['submit'])){
    # it now updates only fname, your task is to update all other fields in your team
    $first_name = $_POST['first_name'];   $last_name = $_POST['last_name']; $email_id = $_POST['email_id']; 
    $query = mysqli_query($conn,"UPDATE subscription_table set first_name='$first_name' where id='$a'");
    $query = mysqli_query($conn,"UPDATE subscription_table set last_name='$last_name' where id='$a'");
    $query = mysqli_query($conn,"UPDATE subscription_table set email_id='$email_id' where id='$a'");
    
    
    if($query){
        echo "Record Updated Successfully <br>";
        echo "<a href='/Team9-Web/subscriptionpage.php'> Go back to Subscription Page </a>";
    
    }
    else { echo "Record Not modified";}
    }
$conn->close();

?>
