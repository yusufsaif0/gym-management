<?php

include("connection.php");
$id=$_REQUEST['sid'];
$qry="DELETE FROM `add new member` WHERE `mid`='$id';";
$data=mysqli_query($conn,$qry);
if($data== true)
{
?>
<script>	
alert('Delete Successfully');
window.open('deletemember.php','_self');
	</script>
	<?php
}
?>