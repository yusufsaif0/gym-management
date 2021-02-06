<?php

include("connection.php");
$member_id= $_POST['member_id'];	
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$age= $_POST['Date_of_birth`'];
$mobile_no= $_POST['mobile_no'];
$email_id= $_POST['email_id'];
$occupation= $_POST['occupation'];
$address= $_POST['address'];
$id=$_POST['sid'];
$query="UPDATE `add new member` SET `mid` = '$member_id', `first_name` = '$first_name', `last_name` = '$last_name', `Date_of_birth` = '$Date_of_birth', `mobile_no` = '$mobile_no', `email_id` = '$email_id', `occupation` = '$occupation', `address` = '$address' WHERE `add new member`.`mid` = $member_id;";
$data=mysqli_query($conn,$query);
if($data== true)
{
?>
<script>	
alert('update Successfully');
window.open('updatenewmember.php?sid=<?php echo $id;?>','_self');
	</script>
	<?php
}
?>