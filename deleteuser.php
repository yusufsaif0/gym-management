<?php
include("connection.php");
?>
<html>
<head>
<title>
Delete user
</title>
<style>
body{
	background-color:silver;
}
</style>
</head>
<body>

<table align="center">
<form action="deleteuser.php" method="post">
<tr>
<th>id:</th>
<td><input type="number" name="id" placeholder="id"></td>

<th>name:</th>
<td><input type="text" name="username" placeholder="name"></td>

<td><input type="submit" name="submit" value="submit"></td>
</form>
</table>
</html>
</body>
<table align="center" width="80%" border="1" style="margin-top:10px;">
<tr>
<th>id</th>
<th>name</th>
<th>password</th>
<th>Edit</th>
</tr>
<?php
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$username = $_POST['username'];
	
$sql="SELECT * FROM `login` WHERE `id`='$id' AND `username`='$username'";
$run=mysqli_query($conn,$sql);
if(mysqli_num_rows($run)<1)
{
	echo "<tr><td colspan=''>no records found</td></tr>";
}
else
{
	$count=0;
	
	while($data=mysqli_fetch_assoc($run))
	{
	$count++;
	?>
<tr align="center">
	<td><?php echo $count; ?></td>
	<td><?php echo $data['username']; ?></td>
	<td><?php echo $data['password']; ?></td>
	
	<td><a href="deleteaccountdata.php?eid=<?php echo $data['id']; ?>">delete</a</td>
</tr>
	<?php
}		
}
}
?>
</table>
