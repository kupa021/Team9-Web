<!-- checking if file exits. -->
<?php
    echo "<h2> Checking if File exists</h2>";
    if(file_exists("Assignment/createfile.php")){
        echo "File Exists";
    }
    else 
        echo "File does not exist";

        
?>