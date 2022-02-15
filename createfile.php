<?php
$myfile = fopen("new.txt", "a") or die("Unable to open file!");
$txt = "This is a group assignment\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<?php
$myfile = fopen("new.txt", "a") or die("Unable to open file!");
$txt = "This is a group assignment\n";
fwrite($myfile, $txt);
fclose($myfile);
?>

<?php
$mfile = fopen("Team9.txt", "a") or die("Unable to open file!");
$txt = "Team 9 - Francis Boafo, Sonny Holman, Mukupa Sichembe \n";
fwrite($mfile, $txt);
fclose($mfile);
?>
