<?php

$dest = "folder1/" .basename($_FILES["userfile"] ["type"])
    if(move_uploaded_file($_FILES["userfile"] ["tmp_name"], $dest))
    {
        echo "The file has been successfully uploaded. <br>";
        echo "<a href='folder1/'> Click to see list of files </a>";

    }
    else "unable to upload file";
?>