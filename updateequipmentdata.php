<?php

include("connection.php");
$id= $_POST['id'];	
$name= $_POST['name'];

$quantity= $_POST['quantity'];
$per_unit_cost= $_POST['per_unit_cost'];
$total_cost= $_POST['total'];



$query="UPDATE `add equipment` SET `id` = '$id', `name` = '$name', `quantity` = '$quantity', `per_unit_cost` = '$per_unit_cost', `total_cost` = '$total_cost' WHERE `add equipment`.`id` = $id;";
$data=mysqli_query($conn,$query);
if($data== true)
{
?>
<script>	
alert('update Successfully');
window.open('updatenewequipment.php?tid=<?php echo $id;?>','_self');
	</script>
	<?php
}
?>