
<html>
<head>
<title>view book data</title>
<style type="text/css">
#heading
{
	background-color:orange;
	font-family:algerian;
	border-width:"2px";
}
#t1
{
	border:2px solid black;
	
	background-color:khaki;
}
h1
{
color:green;
font-style:"italics";	
}
</style>
</head>
<body>
<h1>Book record management</h1><hr/>
<table id="t1">
<tr  id="heading">
<th >book id</th><th>Title</th><th>Author</th><th>price</th>
</tr>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
$q="select * from book" ;
$result=mysqli_query($con,$q);
mysqli_close($con);
$num=mysqli_num_rows($result);
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
?>
<tr>
<th><?php echo $row['book_id'] ?></th>
<th><?php echo $row['title'] ?></th>
<th><?php echo $row['author'] ?></th>
<th><?php echo $row ['price'] ?></th>
</tr>
<?php 
}
?>

</table>
<table>
<tr><td><a href="bookmanagement.html">click here</a></td><td>to return to home page</td></tr>
</table>
</body>
</html>