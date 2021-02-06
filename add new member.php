<?php
include("connection.php");

?>
<html>
<head>
<title>
Add new member
</title>
</head>
<style>
label{
width:140px;
display:inline-block;
}

</style>
<body bgcolor="silver">
<script>
function myfun(){
	var a= document.getElementById("mobilenumber").value;
	if(a==""){
	document.getElementById("message").innerHTML="** please enter mobile number";
	return false;
}
if(isNaN(a)){
	document.getElementById("message").innerHTML="** enter only numeric value";
	return false;
}
if(a.length<10){
	document.getElementById("message").innerHTML="** mobile number must be 10 digit";
	return false;
}
if(a.length>10){
	document.getElementById("message").innerHTML="** mobile number must be 10 digit";
	return false;
}
if((a.charAt(0)!=9) && (a.charAt(0)!=8) && (a.charAt(0)!=7)){
document.getElementById("message").innerHTML="** mobile number must start with 9,8 and 7";
	return false;
}	

}
	</script>
<h1>ADD NEW MEMBER</h1>
<form action="add new member.php" method="POST" onsubmit="return myfun()">
<tablewidth="100px" >
</tr>
<tr>
<td>
 <label for="member_id"><b>Member id:</b></label>
</td>
</tr>
<tr>
<td>
 <input type="number" placeholder="Member Id" required name="member_id" maxlenght="50" size="30"><br><br>
</td>
</tr>
<tr>
<td>
 <label for="first_name"><b>First Name:</b></label>
</td>
<td>
 <input type="text" placeholder="First Name" required name="first_name" maxlenght="50" size="30"><br><br>
</td>
</tr>
<tr>
<td>
 <label for="last_name"><b>Last Name:</b></label>
</td>
</tr>
<tr>
<td>
 <input type="text" placeholder="Last Name" required name="last_name" maxlenght="50" size="30"><br><br>
</td>
</tr>
<tr>
<td>
 <label for="Date_of_Birth"><b>Date_of_Birth:</b></label>
</td>
</tr>
<tr>
<td>
 <input type="date" placeholder="Date of birth" required name="Date_of_Birth" maxlenght="50" size="30"><br><br>
</td>
</tr>

<tr>
<td>
 <label for="mobile_no"><b>Mobile_no:</b> </label>
</td>
</tr>
<tr>
<td>
 <input type="phone" id="mobilenumber" value="" placeholder="Mobile_no" required name="mobile_no" maxlenght="50" size="30">
 <span id="message"style="color:red;"></span><br><br>
</td>
</tr>
<tr>
<td>
 <label for="e-mail_id"><b>E-mail_id: </label>
</td>
</tr>
<tr>
<td>
 <input type="text" placeholder="E-mail" required name="email_id" maxlenght="50" size="30"><br><br>
</td>
</tr>
<tr>
<td>
 <label for="occupation"><b>Occupation:</b> </label>
</td>
</tr>

<tr>
<td>
 <input type="text" placeholder="Occupation" required name="occupation" maxlenght="50" size="30"><br><br>
</td>
</tr>
<tr>
<td>
 <label for="Address">Address: </label>
</td>
</tr>
<tr>
<td>
 <input type="text" placeholder="Address" required name="address" maxlenght="50" size="30"><br><br>
</td>
</tr>

<tr>
<td>
<input type="submit" value="submit" name="submit">
</td>
</tr>
</tabel>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	
$member_id= $_POST['member_id'];	
$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$Date_of_Birth= $_POST['Date_of_Birth'];
$mobile_no= $_POST['mobile_no'];
$email_id= $_POST['email_id'];
$occupation= $_POST['occupation'];
$address= $_POST['address'];
$query="INSERT INTO `add new member`(`mid`, `first_name`, `last_name`, `Date_of_Birth`, `mobile_no`, `email_id`, `occupation`, `address`) VALUES ('$member_id','$first_name','$last_name','$Date_of_Birth','$mobile_no','$email_id','$occupation','$address')";
$data=mysqli_query($conn,$query);
if($data==TRUE)
	echo"successful";
else
	echo"ERROR";
}
?>


 