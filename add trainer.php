<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<title>
Add Trainer
</title>
<style>
body{
	background-color:silver;
}
label{
width:140px;
display:inline-block;
}
</style>
</head>
<body>
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

<h1><center>ADD TRAINER</center></h1>
<form action="" method="post" onsubmit="return myfun()">
<label for="tid">Id :</label>
<input type="number" name="tid" value=""><br><br>
<label for="name">Name :</label>
<input type="text" name="name" value=""><br><br>
<label for="D.O.B">D.O.B :</label>
<input type="date" name="age" value=""><br><br>

<label for="mobile_no">Mobile no :</label>
<input type="phone" id="mobilenumber" value="" name="mobile_no" value="">
<span id="message"style="color:red;"></span><br><br>
<label for="email_id">E-mail id :</label>
<input type="text" name="email_id" value=""><br><br>
<label for="date_of_joining">Date of joining :</label>
<input type="date" name="date_of_joining" value=""><br><br>
<input type="submit" name="submit" value="submit"><br><br>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$tid=$_POST['tid'];	
$name=$_POST['name'];
$age=$_POST['age'];

$mobile_no=$_POST['mobile_no'];
$email_id=$_POST['email_id'];
$date_of_joining=$_POST['date_of_joining'];
$query="INSERT INTO `add trainer`(`tid`,`name`, `age`, `mobile_no`, `email_id`, `date_of_joining`) VALUES ('$tid','$name','$age','$mobile_no','$email_id','$date_of_joining')";
$data=mysqli_query($conn,$query);
if($data==TRUE)
	echo"successful";
else
	echo"ERROR";
}
?>
