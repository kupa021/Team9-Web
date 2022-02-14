<?php
phpinfo();

if (file_exists("exampletext.php"))
{
    echo "file exisits" . "<br>";
}
else
{
    echo "file not found";
}

$modeswap = "file.txt";
$c1 = fopen($modeswap, "w");

$teamfile = fopen('Team9.txt','a') or die ("failed to create a file");
$txt = "Francis Boafo, Sonny Holman, Mukupa Schimebe Team 9";
fwrite($teamfile, $txt);
fclose($teamfile);

$fname = "Team9.txt";
$handle = fopen($fname, "r");
$cont = fread($handle, filesize($fname));
echo $cont;
fclose($handle);

?>

<hr><h1>Simple File Upload System </h1>

<form enctype="multipart/form-data" action="upload.php" method="POST">
    Select file to upload: <input name="userfile" type="file" required><br>
    <input type="submit" value="Upload File" />
</form>

<?php




?>