<?php
$a=$_POST['fno'];

function fact($a)
{
	if($a==0)
		return(1);
	else if($a==1)
		return(1);
	else
		return($a*fact($a-1));
}
$f=fact($a);
echo "factorial of $a is $f";
