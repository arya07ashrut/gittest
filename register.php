<?php
session_start();
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$u_name=$_POST['u_name'];
$ps1=$_POST['ps1'];
$ps2=$_POST['ps2'];
$con=mysqli_connect('localhost','root');
if($ps1!=$ps2)
{
	echo "invalid password";
	?>
<html>
<head>
<title>
registration
</title>
<style type="text/css">
a:hover
{
	font-family:bold;
	color:red;
	background-color:khaki;
	border-radius:5px;
}
</style>
</head>
<body>
<br/>
click here to
<a href="newuser.html">Try again</a>
</body>
</html>
	
	<?php
	mysqli_close($con);
}
else
{
mysqli_select_db($con,'db');
$q="select * from member where u_name='$u_name'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
echo "username already exist";	
?>
<html>
<head>
<title>
registration
</title>
<style type="text/css">
a:hover
{
	font-family:bold;
	color:red;
	background-color:khaki;
	border-radius:5px;
}
</style>
</head>
<body>
<br/>
click here to
<a href="newuser.html">Try again</a>
</body>
</html>
<?php

mysqli_close($con);
}
else
{
	$q1="insert into member(f_name,l_name,u_name,password)values('$f_name','$l_name','$u_name','$ps1')";
  mysqli_query($con,$q1);
  $_SESSION['f_name']=$f_name;
   $_SESSION['l_name']=$l_name;
    $_SESSION['u_name']=$u_name;
	 $_SESSION['password']=$ps1;
  
 
  header('location:http://localhost/practice/profile.php');

mysqli_close($con);
}
}
?>
