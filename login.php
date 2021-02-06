<?php

session_start();
if(isset($_SESSION['uid']))
{
	header('location:home.php');
}
?>
<html>
<head>
<title>
login
</title>
<style>
body{
	background-color:silver;
}
</style>
</head>
<body>
<form action="home.php" method="post">
<table align="center">
<tr>
<td><label for="Username">username</label></td>
<td><input type="text" name="uname" required></td>
</tr>
<tr>
<td><label for="password">password</label></td>
<td><input type="password" name="pass" required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="login" value="login"></td>
</tr>
</tabel>
</form>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['login']))
{
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	
	$query="SELECT * FROM `login` WHERE 'username'='$username' AND 'password'='$password'";
	$run=mysqli_query($conn,$query);
	$row =mysqli_num_rows($run);
	if($row <1)
	{
	?>
	<script>
	alert('username and password not match !!');
	window.open('home.php','_self);
	</script>
	<?php
	}
	else
	{
	$data=mysqli_fetch_assoc($run);
	$id=$data['id'];
	
	$_SESSION['uid']=$id;
	header('location:home.php');
	
}
}
?>

