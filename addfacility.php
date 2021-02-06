<?php
include("connection.php");
?>
<html>
<head>
<title>
ADD FACILITY
</title>
</head>
<body bgcolor="yellow" style="margin-top:200px;">

<table align="center" >
<form action="addfacility.php" method="post">
<tr>
<th>Id:</th>
<td><input type="number" name="id" placeholder="Id-number"></td>
</tr>
<tr>
<th>Name:</th>
<td><input type="text" name="name" placeholder="name"></td>
</tr>
<tr>
<th>Charge:</th>
<td><input type="text" name="charge" placeholder="charge"></td>
</tr>
<tr>
<th>Trainer:</th>
<td><input type="text" name="trainer" placeholder="trainer"></td>
</tr>
<td>
<input type="submit" name="submit" value="submit"></td></tr>
</table>
</form>
</html>
</head>
<?php
if(isset($_POST['submit']))
{
$id= $_POST['id'];	
$name= $_POST['name'];
$charge= $_POST['charge'];
$trainer= $_POST['trainer'];
$query="INSERT INTO `add facility`(`id`, `name`, `charge`, `trainer`) VALUES ('$id','$name','$charge','$trainer')";
$data=mysqli_query($conn,$query);
if($data==TRUE)
	echo"successful";
else
	echo"ERROR";
}
?>