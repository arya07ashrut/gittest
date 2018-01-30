<html>
<head>
<title>
login
</title>
<link rel="stylesheet" type="text/css" href="heading.css"/>
<style type="text/css">
#t1
{
	border:2px solid orange;
	background-color:khaki;
	width:250px;
}
.c1
{
	
	text-decoration:underline;
	background-color:lightgreen;
	border-radius:15px;
}
a:hover
{
	color:red;
}
#d1
{
	position:relative;
	left:650px;
	bottom:270px;
	
}
</style>
<script>
function effect()
{
	var x=document.getElementsByClassName("c1");
	x[0].style.color="green";
	x[1].style.color="green";
}
</script>
</head>
<body>
<h1 id="h1">
welcome to arya libraries</h1><hr/>
<h2 style="background-color:khaki;border-radius:5px;font-family:kristen itc;">LOGIN WINDOW</h2>
<h3 class="c1" onmouseover="effect()">if already a user</h3>
<br/>
<br/>
<form action="validate.php" method="post" >
<table id="t1" style="border-radius:10px;cell-padding:10px;">
<tr>
<th>username</th><th><input type="text" name="user" required/></th>
</tr>
<tr>
<th>password</th><th><input type="password" name="password" required/></th>
</tr>
<tr>
<th><input type="submit" value="login" /></th>
</tr>
</table>
</form>

<a href="pass.php">forget password?</a>
<br/>

<h3 class="c1" onmouseover="effect()">if new user</h3>
<form action="newuser.html" method="post" onsubmit id="f2">
<table>
<tr><th>
<input type="submit" value="create account" style="color:blue;border:2px solid purple;border-radius:5px;" />
</th>
</tr>
</table>
</form>
<div id="d1">
<img src="lib1.jpg" width="600px"/>
</div>
</body>
</html>
