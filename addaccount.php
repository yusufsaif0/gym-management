<?php
include("connection.php");

?>
<html>
<head>
<title>
Add Account
</title>
</head>
<style>
label{
width:140px;
display:inline-block;
}

</style>
<body bgcolor="silver">
<h1>ADD ACCOUNT</h1>
<form action="addaccount.php" method="POST">
<tablewidth="100px" >
</tr>
<tr>
<td>
 <label for="id"><b>id:</b></label>
</td>
</tr>
<tr>
<td>
 <input type="number" name="id" maxlenght="50" size="30"><br><br>
</td>
</tr>
<tr>
<td>
 <label for="username"><b>username:</b></label>
</td>
<td>
 <input type="text" name="username" maxlenght="50" size="30"><br><br>
</td>
</tr>
<tr>
<td>
 <label for="password"><b>password:</b></label>
</td>
<td>
 <input type="text" name="password" maxlenght="50" size="30"><br><br>
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
	
$id= $_POST['id'];	
$username= $_POST['username'];
$password= $_POST['password'];

$query="INSERT INTO `login`(`id`, `username`,`password`) VALUES ('$id','$username','$password')";
$data=mysqli_query($conn,$query);
if($data==TRUE)
	echo"successful";
else
	echo"ERROR";
}
?>


 
