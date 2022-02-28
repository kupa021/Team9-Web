<?php
include 'stardbconn.php'; //establish db connection
$sql = "select * from subscription_table";
$result = $conn->query($sql);
?>

<table class="table">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email ID</th>
        <th>Unsubscribe</th>
        <th></th>
        <th></th>
        <th>Modify</th>
        
    </tr>

<?php

if($result ->num_rows >0){
    while($row = $result ->fetch_assoc()){
        ?>

    <tr>
    <td><?php echo $row["ID"]; ?></td>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["email_id"]; ?></td>
    <td><a href="newsletterdelete.php?id=<?php echo $row['ID']; ?>">Unsubscribe</a></td>
    <td></td>
    <td></td>
    <td><a href="newslettermodify.php?id=<?php echo $row['ID']; ?>">Modify Your Data</a></td>
</tr>

    <?php
    }
    }
    else
    {
        echo "no results";
    }
    $conn->close();
    ?>
</table>
