<?php
include("connection.php");
?>
<html>
<head>
<title>
Delete trainer
</title>
<style>
body{
	background-color:silver;
}
</style>
</head>
<body>

<table align="center">
<form action="deletetrainer.php" method="post">
<tr>
<th>id:</th>
<td><input type="number" name="tid" placeholder="id"></td>

<th>name:</th>
<td><input type="text" name="name" placeholder="name"></td>

<td><input type="submit" name="submit" value="submit"></td>
</form>
</table>
</html>
</body>
<table align="center" width="80%" border="1" style="margin-top:10px;">
<tr>
<th>tid</th>
<th>name</th>
<th>age</th>
<th>mobile_no</th>
<th>email_id</th>
<th>date_of_joining</th>
<th>Edit</th>
</tr>
<?php
if(isset($_POST['submit']))
{
	$tid = $_POST['tid'];
	$name = $_POST['name'];
	
$sql="SELECT * FROM `add trainer` WHERE `tid`='$tid' AND `name`='$name'";
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
	<td><?php echo $data['name']; ?></td>
	<td><?php echo $data['age']; ?></td>
	<td><?php echo $data['mobile_no']; ?></td>
	<td><?php echo $data['email_id']; ?></td>
	<td><?php echo $data['date_of_joining']; ?></td>
	<td><a href="deletetrainerdata.php?eid=<?php echo $data['tid']; ?>">delete</a></td>
</tr>
	<?php
}		
}
}
?>
</table>
