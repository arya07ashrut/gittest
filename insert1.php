<?php

$title=$_POST['title'];
$author=$_POST['author'];
$price=$_POST['price'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
$q="insert into book(title,author,price)values('$title','$author','$price')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<html>
<head>
<title>record inserted</title>
</head>
<body>
<?php 
if($status==1)
	echo "record successfully entered";
else
	echo "insertion failed";
?>
<h4>want to insert more record</h4><a href="insert1.html">click here</a>
<br/>
<h4>return to homepage</h4><a href="bookmanagement.php">return</a>
</body>
</html>