<?php
session_start();

?>
<html>
<head>
<title>
profile page
</title>
<link rel="stylesheet" type="text/css" href="heading.css"/>
<style type="text/css">
#f1
{
background-color:khaki;
border:3px solid green;	
width:700px;
height:70%;
left:150px;
border-radius:10px;
}
label
{
	font-family:kristen itc;
	font-size:25px;
	position:relative;
	left:160px;
	text-align:right;
	line-height:60px;
	
}
button
{
	font-style:italic;
	font-size:25px;
	position:fixed;
	left:420px;
	background-color:offwhite;
	padding:5px;
	border:1px solid orange;
	width:20%;
	border-radius:5px;
}
</style>
</head>
<body>
<h1 id="h1">welcome to arya libraries</h1>
<h3 style="color:green;background-color:yellow;font-family:kristen itc;font-size:30px;border:3px solid black;border-radius:5px;text-align:center;">complete your profile</h3>
<div style="position:relative;left:100px;">
<form  id="f1"action="display.php" method="post" enctype="multipart/form-data" onsubmit>
<table>
<tr>
<label>name</label><button><?php echo " ".$_SESSION['f_name']." ".$_SESSION['l_name']?> </button>
<br/>
<tr></tr>
</tr>
<tr>
<label>username</label><button><?php echo " ".$_SESSION['u_name'] ?> </button>
<br/>
<tr></tr>
</tr>
<tr>
<label>password</label><button><?php echo " ".$_SESSION['password'] ?> </button>
<br/>
<tr></tr>
</tr>
<tr>
<label>gender</label><button style="background-color:white;width:6%;"><select name="gdr" required ><option>male</option><option>female</option><option>others</option></select></button>
<br/>
</tr>
<tr>
<label>d.o.b</label><button style="width:15%"><input type="text" value="DD/MM/YY" required name="dob"/></button>
<br/>
</tr>
<tr>
<label>photo</label><button style="background-color:white;"><input type="file" name="image"/> </button>
<br/>
<tr></tr>
</tr>
<tr>
<th><input style="position:relative;left:320px;" type="submit" value="submit"/>
</th>
</tr>
</table>
</form>
</div>
</body>
</html>