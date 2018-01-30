<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index="cb".$j;
	if(isset($_POST['$index']))
	{
		$book[$i]=$_POST['$index'];
	}
	else
		$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db');
for($k=1;$k<=$size;$k++)
{
$q="delete from book where book_id=".$book[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
echo $size."records deleted successfully";
?>