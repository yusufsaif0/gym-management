<?php
include("connection.php");
?>
<html>
<head>
<title>
Update equipment
</title>
<style>
body{
	background-color:silver;
}
</style>
</head>
<body>

<table align="center">
<form action="update equipment.php" method="post">
<tr>
<th>id:</th>
<td><input type="number" name="id" placeholder="id"></td>

<th>name:</th>
<td><input type="text" name="name" placeholder="name"></td>

<td><input type="submit" name="submit" value="submit"></td>
</form>
</table>
</html>
</body>
<table align="center" width="80%" border="1" style="margin-top:10px;">
<tr>
<th>id</th>
<th>name</th>
<th>quantity</th>
<th>per_unit_cost</th>
<th>total_cost</th>
<th>Edit</th>
</tr>
<?php
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	
$sql="SELECT * FROM `add equipment` WHERE `id`='$id' AND `name`='$name'";
$run=mysqli_query($conn,$sql);
if(mysqli_num_rows($run)<1)
{
	echo "<tr><td colspan='6'>no records found</td></tr>";
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
	<td><?php echo $data['quantity']; ?></td>
	<td><?php echo $data['per_unit_cost']; ?></td>
	<td><?php echo $data['total_cost']; ?></td>
	<td><a href="updatenewequipment.php?$tid=<?php echo $data['id']; ?>">Edit</a</td>
</tr>
	<?php
}		
}
}
?>
</table>
