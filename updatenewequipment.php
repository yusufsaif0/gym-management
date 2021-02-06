<?php
error_reporting(0);
include("connection.php");
$tid= $_GET['$tid'];
$sql="SELECT * FROM `add equipment` WHERE `id`='$tid'";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);
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
<h1><center>UPDATE EQUIPMENT</center></h1>
<form action="updateequipmentdata.php" method="post">
<label for="id">Id :</label>
<input type="text" name="id" value=<?php echo $data['id']; ?> ><br><br>
<label for="name">Name :</label>
<input type="text" name="name" value=<?php echo $data['name']; ?> ><br><br>
<label for="quantity">Quantity :</label>
<input type="text" name="quantity" value=<?php echo $data['quantity']; ?> ><br><br>
<label for="per_unit_cost">Per_unit_cost :</label>
<input type="text" name="per_unit_cost" value=<?php echo $data['per_unit_cost']; ?> ><br><br>
<label for="total_cost">Total_cost :</label>
<input type="text" name="total_cost" value=<?php echo $data['total_cost']; ?> ><br><br>
<input type="submit" name="submit" value="submit"><br><br>
</form>
</body>
</html>
