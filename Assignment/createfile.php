<?php
echo "<h1>Creating a File</h1>";
$myfile = fopen("new.txt", "a") or die("Unable to open file!");
$txt = "This is a group assignment\n";
fwrite($myfile, $txt);
echo $txt;
fclose($myfile);
?>

<!-- checking if file exits. -->
<?php
    echo "<h2> Checking if File exists</h2>";
    if(file_exists("Assignment/new.txt")){
        echo "File Exists";
    }
    else 
        echo "File is not in existence";
        
?>

<?php
echo "<h1>Open the file using appropriate mode</h1>";
$myfile = fopen("new.txt", "r+") or die("Unable to open file!");
$txt = "This is a group assignment\n";
fwrite($myfile, $txt);
echo $txt;
fclose($myfile);
?>


<?php
echo "<h1>Team Members using fread</h1>";
$txt = "Team 9 - Francis Boafo, Sonny Holman, Mukupa Sichembe \n";
$nf = fopen('Team9.txt', 'r') or die ("Failed to open file");
$text = fread($nf, );
fclose($nf);
echo $text;

