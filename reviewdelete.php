<?php
include 'stardbconn.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from review where id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        // echo "Deleted successfully";\
        header('location:reviewdisplay.php');
    }else{
        die(mysql_error($conn));
    }
}

?>