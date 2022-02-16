<?php 

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$size= $_FILES['file']['size'];

$path= "photos/";

if(isset($_POST['Submit1']))
{ 
$filepath = "photos/" . basename($_FILES["file"]["name"]);

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "The file ". basename( $_FILES["file"]["name"]). " uploaded..";
} 
else 
{
echo "Error !!";
}
} 


if (isset($name)) {

if (empty($name))
{
echo "Please choose a file";
}
else if ((!empty($name)) && ($size < 20971520))
{
move_uploaded_file($tmp_name, $path . $name);
echo 'Uploaded!';
}
else
{
echo "The size of the file must be less than 20MB in order to be uploaded.";	
}
}

?>


<?php

if  (!empty($tmp_name)){
echo "The file you uploaded is shown below.<br><br>";
echo "<a href='$path" ."$name'>$name</a>";
}
?>


