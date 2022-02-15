<?php
include "header.php";
include 'stardbconn.php'; // establishes database connection 
$sql = "select * from subscription_table";
$result = $conn->query($sql);
if($result ->num_rows > 0) {
//fetch_assoc(): It fetches result as an associative array.
echo "<table class=\"table\"><tr><th>First Name</th><th>Last Name</th>
<th>Email ID</th> </tr>";
    while($row = $result ->fetch_assoc()){
        echo "<tr><td>". "</td><td>". $row["first_name"]."</td> <td>". $row["last_name"] 
        ."</td><td>". $row["email_id"]
        ."</td></tr>";
    }
    echo "</table>";
}
else 
{
    echo "no results";
}


$conn->close();
?>

<?php
include "footer.php";
?>