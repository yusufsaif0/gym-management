<?php
error_reporting(0);
include("connection.php");
$sid= $_GET['sid'];
$sql="SELECT * FROM `add new member` WHERE `mid`='$sid'";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);
?>
<?php
if(isset($_POST['submit']))
{
	
$member_id= $_POST['member_id'];	
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$Date_of_birth= $_POST['Date_of_birth'];
$Gender= $_POST['gender'];
$mobile_no= $_POST['mobile_no'];
$email_id= $_POST['email_id'];
$occupation= $_POST['occupation'];
$address= $_POST['address'];
$query="INSERT INTO `add new member`(`mid`, `first_name`, `last_name`, `Date_of_birth`, `gender`, `mobile_no`, `email_id`, `occupation`, `address`) VALUES ('$member_id','$first_name','$last_name','$Date_of_birth`','$Gender','$mobile_no','$email_id','$occupation','$address')";
$data=mysqli_query($conn,$query);
if($data==TRUE)
	echo"successful";
else
	echo"ERROR";
}
?>
<html>
<head>
<title>
update new member
</title>
</head>
<style>
label{
width:140px;
display:inline-block;
}

</style>
<body bgcolor="silver">
<h1>Update NEW MEMBER</h1>
<form action="updatememberdata.php" method="POST">
<tablewidth="100px" >
</tr>
<tr>
<td>
 <label for="member_id"><b>Member id:</b></label>
</td>
</tr>
<tr>
<td>
 <input type="number" name="member_id" maxlenght="50" size="30" value=<?php echo $data['mid']; ?> ><br><br>
</td>
</tr>
<tr>
<td>
 <label for="first_name"><b>First Name:</b></label>
</td>
<td>
 <input type="text" name="first_name" maxlenght="50" size="30" value=<?php echo $data['first_name']; ?>><br><br>
</td>
</tr>
<tr>
<td>
 <label for="last_name"><b>Last Name:</b></label>
</td>
</tr>
<tr>
<td>
 <input type="text" name="last_name" maxlenght="50" size="30" value=<?php echo $data['last_name']; ?> ><br><br>
</td>
</tr>
<tr>
<td>
 <label for="Date_of_birth`"><b>Date_of_birth`:</b></label>
</td>
</tr>
<tr>
<td>
 <input type="date" name="Date_of_birth`" maxlenght="50" size="30" value=<?php echo $data['Date_of_birth`']; ?> ><br><br>
</td>
</tr>


<tr>
<td>
 <label for="mobile_no"><b>Mobile_no:</b> </label>
</td>
</tr>
<tr>
<td>
 <input type="phone" name="mobile_no" maxlenght="50" size="30" value=<?php echo $data['mobile_no']; ?> ><br><br>
</td>
</tr>
<tr>
<td>
 <label for="e-mail_id"><b>E-mail_id: </label>
</td>
</tr>
<tr>
<td>
 <input type="text" name="email_id" maxlenght="50" size="30" value=<?php echo $data['email_id']; ?> ><br><br>
</td>
</tr>
<tr>
<td>
 <label for="occupation"><b>Occupation:</b> </label>
</td>
</tr>

<tr>
<td>
 <input type="text" name="occupation" maxlenght="50" size="30" value=<?php echo $data['occupation']; ?> ><br><br>
</td>
</tr>
<tr>
<td>
 <label for="Address">Address: </label>
</td>
</tr>
<tr>
<td>
 <input type="text" name="address" maxlenght="50" size="30" value=<?php echo $data['address']; ?>><br><br>
</td>
</tr>

<tr>
<td>
<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
<input type="submit" value="submit" name="submit">
</td>
</tr>
</tabel>
</form>
</body>
</html>



 