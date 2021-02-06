<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<title>
add equipment
</title>
<style>
label{
width:140px;
display:inline-block;
}
</style>
</head>
<body bgcolor="silver">
<h1><center>ADD EQUIPMENT</center></h1>
<form action="" method="post">
<label for="id">Id :</label>
<input type="text" name="id" value=""><br><br>
<label for="name">Name :</label>
<input type="text" name="name" value=""><br><br>
<label for="quantity">Quantity :</label>
<input type="text" name="quantity" value=""><br><br>
<label for="per_unit_cost">Per_unit_cost :</label>
<input type="text" name="per_unit_cost" value=""><br><br>
<label for="total_cost">Total_cost :</label>
<input type="text" name="total_cost" value=""><br><br>
<input type="submit" name="submit" value="submit"><br><br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$quantity=$_POST['quantity'];
$per_unit_cost=$_POST['per_unit_cost'];
$total_cost=$_POST['total_cost'];

$query="INSERT INTO `add equipment`(`id`, `name`, `quantity`, `per_unit_cost`, `total_cost`) VALUES ('$id','$name','$quantity','$per_unit_cost','$total_cost')";
$data=mysqli_query($conn,$query);
if($data==TRUE)
	echo"successful";
else
	echo"ERROR";
}
?>
