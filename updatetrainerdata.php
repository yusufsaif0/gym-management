<?php

include("connection.php");
$tid= $_POST['tid'];	
$name= $_POST['name'];

$age= $_POST['age'];
$mobile_no= $_POST['mobile_no'];
$email_id= $_POST['email_id'];
$date_of_joining= $_POST['date_of_joining'];


$query="UPDATE `add trainer` SET `tid` = '$tid', `name` = '$name', `age` = '$age', `mobile_no` = '$mobile_no', `email_id` = '$email_id',`date_of_joining` = '$date_of_joining' WHERE `add trainer`.`tid` = $tid;";
$data=mysqli_query($conn,$query);
if($data== true)
{
?>
<script>	
alert('update Successfully');
window.open('updatetrainerdata.php?rid=<?php echo $tid;?>','_self');
	</script>
	<?php
}
?>