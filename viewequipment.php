<?php
include("connection.php");
?>
<html>
<head>
<title>view all equipment</title>
</head>
<body bgcolor="pink">
<table align="center" width="80%" border="2" style="margin-top:15px;">
<tr>
<th>Id</th>
<th>name</th>
<th>quantity</th>
<th>per_unit_cost</th>
<th>total_cost</th>
</tr>
<?php
$sql="SELECT `id`, `name`, `quantity`, `per_unit_cost`, `total_cost` FROM `add equipment`  ";
$run=mysqli_query($conn,$sql);
if(mysqli_num_rows($run)<1)
{
	echo "<tr><td colspan='5'>no records found</td></tr>";
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

</tr>
	<?php
}		
}

?>
</table>