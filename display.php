<?php
session_start();
$gdr=$_POST['gdr'];
$dob=$_POST['dob'];
$f=$_FILES['image'];
echo "gender- ".$gdr."<br/>";
echo "date of birth-".$dob."<br/>";
echo " name of file -".$f['name']."<br/>";
echo "type of file -".$f['type']."<br/>";
echo " size of file -".$f['size']."<br/>";
if(file_exists("photos/".$f['name']))
{
	echo $f['name']."-file already exist";
}
else if($f['type']=="image/jpeg")
{
	move_uploaded_file([$f['tmp_name'],"photos/".$f['name']]);
	header('location:http://localhost/practice/bookmanagement.php');
}
else
	echo "file format invalid";
?>
