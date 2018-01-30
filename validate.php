<?php


$u_name=$_POST['user'];
$password=$_POST['password'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
$q="select * from member where u_name='$u_name'&& password='$password'";
$result=mysqli_query($con,$q);
mysqli_close($con);
$num=mysqli_num_rows($result);
if($num==1)
{
	
	header('location:http://localhost/practice/bookmanagement.php');
	
}
else
{
	?>
	<html>
	<head><title>validation</title></head>
	<body>
	<br/>
	<h3 style="background-color:yellow;color:green;border-radius:5px;">OOPS!!!Invalid password or username</h3>
	<br/>
	<button style="border:3px solid khaki;border-radius:3px;background-color:white;font-size:15px;position:relative;left:600px;">
	<a style="color:orange;" href="login.php">Try again</a>
	</button>
	</html>
	<?php
}
?>