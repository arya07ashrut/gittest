
<?php


$size=sizeof($_POST);
$record=$size/4;
for($i=1;$i<=$record;$i++)
{
	$index1=$i;
	$book[$i]=$_POST[$index1];
	$index2="title".$i;
	$title[$i]=$_POST[$index2];
	$index3="author".$i;
	$author[$i]=$_POST[$index3];
	$index4="price".$i;
	$price[$i]=$_POST[$index4];
	
}


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
for($i=1;$i<=$record;$i++)
{
$q="update book set title='$title[$i]',author='$author[$i]',price='$price[$i]' where book_id=$book[$i]";
mysqli_query($con,$q);
}
?>
<html>
<head>
<title>updation</title>
</head>
<body>
<?php echo "data successfully updated"; ?><br/>
<h3><a href="bookmanagement.php">click here</a>to return to home page</h3>

</body>
</html>