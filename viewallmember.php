<?php
include("connection.php");
?>
<html>
<head>
<title>view all member</title>
</head>
<body bgcolor="pink">
<table align="center" width="80%" border="2" style="margin-top:15px;">
<tr>
<th>Mid</th>
<th>first_name</th>
<th>last_name</th>
<th>Date_of_birth</th>
<th>mobile_no</th>
<th>Email_id</th>
<th>occupation</th>
<th>Address</th>
</tr>
<?php
$sql="SELECT `mid`, `first_name`, `last_name`, `Date_of_birth`, `mobile_no`, `email_id`, `occupation`, `address` FROM `add new member` ";
$run=mysqli_query($conn,$sql);
if(mysqli_num_rows($run)<1)
{
	echo "<tr><td colspan='8'>no records found</td></tr>";
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
	<td><?php echo $data['first_name']; ?></td>
	<td><?php echo $data['last_name']; ?></td>
	<td><?php echo $data['Date_of_birth']; ?></td>
	<td><?php echo $data['mobile_no']; ?></td>
	<td><?php echo $data['email_id']; ?></td>
	<td><?php echo $data['occupation']; ?></td>
	<td><?php echo $data['address']; ?></td>

</tr>
	<?php
}		
}

?>
</table>