<?php

include("connection.php");
$tid= $_REQUEST['eid'];	
$query="DELETE FROM `add trainer` WHERE `tid`='$tid';";
$data=mysqli_query($conn,$query);
if($data== true)
{
?>
<script>	
alert('Delete Successfully');
window.open('deletetrainer.php','_self');
	</script>
	<?php
}
?>
