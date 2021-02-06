<?php
include("connection.php");

?>
<html>
<head>
<title>
Update member
</title>
<style>
body{
	background-color:silver;
}
</style>
</head>
<body>

<table align="center">
<form action="update member.php" method="post">
<tr>
<th>Member_id:</th>
<td><input type="number" name="mid" placeholder="member_id"></td>

<th>First_name:</th>
<td><input type="text" name="first_name" placeholder="first_name"></td>

<td><input type="submit" name="submit" value="submit"></td>
</form>
</table>
</html>
</body>
<table align="center" width="80%" border="1" style="margin-top:10px;">
<tr>
<th>No</th>
<th>First_name</th>
<th>Last_name</th>
<th>age</th>

<th>Email</th>
<th>Address</th>
<th>Edit</th>
</tr>
<?php
if(isset($_POST['submit']))
{
	$mid = $_POST['mid'];
	$firstname = $_POST['first_name'];
$sql="SELECT * FROM `add new member` WHERE `mid`='$mid' AND `first_name`='$firstname'";
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
	
	<td><?php echo $data['email_id']; ?></td>
	<td><?php echo $data['address']; ?></td>
	<td><a href="updatenewmember.php?sid=<?php echo $data['mid']; ?>">Edit</a></td>
</tr>
	<?php
}		
}
}
?>
</table>
