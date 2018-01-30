<?php
$a=5;
?>
<html>
<head>
<script>
function fact(x)
{
	if(x==0)
		return(1);
	else if(x==1)
		return(1);
	else
		return(x*fact(x-1));
}
$f=fact($a);
</script>
</head>
<body>
<script>
var x=5;
var f=fact(x);
document.write("factorial of"+" "+x+" "+"is "+f);
</script>

</body>
</html>