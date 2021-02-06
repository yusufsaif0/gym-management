<?php
$conn=mysqli_connect("localhost","root","","gym") or die(mysqli_error());
?>

<html>
<head>
<title>
Registation Form
</title>
<script>
function myfun1(){
	var a = document.myform.email_id.value;
	if(a.indexOf('@')<=0){
	document.getElementById("message").innerHTML="** Invalid @ position";
return false;	
	}
if((a.charAt(a.length-4)!='.') && (a.charAt(a.length-3)!='.')){
document.getElementById("message").innerHTML="** Invalid . position";
	return false;
}		
}
</script>
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

<h1>Registation Form</h1>
<form name="myform" action="registation.php" method="POST" onsubmit="return myfun()" onsubmit="return myfun1()" >
<tablewidth="100px" >
<tr>
	<th>UserName<input type="text" name="uname"></th>
</tr><br><br>
<tr>
	<th>password<input type="password" name="pass"></th>
</tr><br><br>
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
	$user=$_POST['uname'];
	$pass=$_POST['pass'];
	$sql="select uname from register where uname=$user";
	$query=mysqli_query($conn,$sql);
	if(mysqli_num_rows($query)>0)
	{
		header('location:login.php');
	}
	else
	{
		$sqli="insert into register (id,uname,pass) values ('','$user','$pass')";
		$que=mysqli_query($conn,$sqli);
	}
}
?>


 