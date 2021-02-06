<?php
include("connection.php");
?>
<html>
<head>
<title>view all trainers</title>
</head>
<body bgcolor="pink">
<table align="center" width="80%" border="2" style="margin-top:15px;">
<tr>
<th>tid</th>
<th>name</th>
<th>date_of_birth</th>

<th>mobile_no</th>
<th>Email_id</th>
<th>date_of_joining</th>
</tr>
<?php
$sql="SELECT `tid`, `name`,`age`, `mobile_no`, `email_id`, `date_of_joining` FROM `add trainer` ";
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
	<td><?php echo $data['age']; ?></td>
	<td><?php echo $data['mobile_no']; ?></td>
	<td><?php echo $data['email_id']; ?></td>
	<td><?php echo $data['date_of_joining']; ?></td>

</tr>
	<?php
}		
}

?>
</table>