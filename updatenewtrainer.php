<html>
<?php
include("connection.php");
$rid= $_GET['rid'];
$sql="SELECT * FROM `add trainer` WHERE `tid`='$rid'";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);
?>
<head>
<title>
add equipment
</title>
<style>
label{
width:140px;
display:inline-block;
}
</style>
</head>
<body>

<h1><center>ADD TRAINER</center></h1>
<form action="updatetrainerdata.php" method="post">
<label for="name">Name :</label>
<input type="text" name="name" value=<?php echo $data['name']; ?> ><br><br>
<label for="age">Age :</label>
<input type="date" name="age" value=<?php echo $data['age']; ?> ><br><br>

<label for="mobile_no">Mobile no :</label>
<input type="phone" name="mobile_no" value=<?php echo $data['mobile_no']; ?>><br><br>
<label for="email_id">E-mail id :</label>
<input type="text" name="email_id" value=<?php echo $data['email_id']; ?>><br><br>
<label for="date_of_joining">Date of joining :</label>
<input type="date" name="date_of_joining" value=<?php echo $data['date_of_joining']; ?>><br><br>
<input type="submit" name="submit" value="submit"><br><br>
</form>
</body>
</html>