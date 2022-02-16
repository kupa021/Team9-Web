<?php
echo "<h1>Creating a File</h1>";
$myfile = fopen("new.txt", "a") or die("Unable to open file!");
$txt = "This is a group assignment\n";
fwrite($myfile, $txt);
echo $txt;
fclose($myfile);
?>
<hr>
<!-- checking if file exits. -->
<?php
    echo "<h2> Checking if File exists</h2>";
    if(file_exists("Assignment/new.txt")){
        echo "File Exists";
    }
    else 
        echo "File is not in existence";
        
?>
<hr>
<?php
echo "<h1>Open the file using appropriate mode</h1>";
$myfile = fopen("new.txt", "r+") or die("Unable to open file!");
$txt = "This is a group assignment\n";
fwrite($myfile, $txt);
echo $txt;
fclose($myfile);
?>
<hr>

<?php
echo "<h1>Team Members using fread</h1>";

$tfile = fopen('Team_9.txt','a') or die ("failed to create a file");
$txt = "Team 9 - Francis Boafo, Sonny Holman, Mukupa Schimebe.";
fwrite($tfile, $txt);
fclose($tfile);

$teamname = "Team_9.txt";
$new = fopen($teamname, "r+");
$read = fread($new, filesize($teamname));
echo $read;
fclose($new);

?>



