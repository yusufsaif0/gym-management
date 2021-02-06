<?php

include("connection.php");
$id= $_REQUEST['eid'];	
$query="DELETE FROM `login` WHERE `id`='$id';";
$data=mysqli_query($conn,$query);
if($data== true)
{
?>
<script>	
alert('Delete Successfully');
window.open('deleteuser.php','_self');
	</script>
	<?php
}
?>