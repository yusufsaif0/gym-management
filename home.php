<?php
error_reporting(0);
session_start();
if($_SESSION['uid'])
{
	echo $_SESSION['uid'];
}

?>
<html>
	<head>
<title>
	Gym management system</title>
</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="design3.css">
<style>
body{
	background-image:url("image9.jpg");
}
</style>
</head>
<body>

<div class="nav">
<ul class="menu">
<li><a>Members</a>
<ul>
<li><a href="Add new member.php">Add new member</a></li>
<li><a href="Update member.php">Update Member</a></li>
<li><a href="Deletemember.php">Delete Member</a></li>

</ul></li>
<li><a>Equipment</a>
<ul>
<li><a href="Add equipment.php">Add Equipment</a></li>
<li><a href="Update equipment.php">Update Equipment</a></li>
<li><a href="Deleteequipment.php">Delete Equipment</a></li>
</ul></li>
<li><a>Trainer</a>
<ul>
<li><a href="add trainer.php">Add Trainer</a></li>
<li><a href="update trainer.php">Update Trainer</a></li>
<li><a href="deletetrainer.php">Delete Trainer</a></li>
</ul></li>
<li><a>Account</a>
<ul>
<li><a href="addaccount.php">Add User</a></li>
<li><a href="deleteuser.php">Delete User</a></li>

<li><a href="addfacility.php">Add new facility</a></li>
</ul></li>
<li><a>one view</a>
<ul>
<li><a href="registationrequest.php">Registation request</a></li>
<li><a href="viewallmember.php">view all member</a></li>
<li><a href="viewequipment.php">view equipment</a></li>
<li><a href="viewalltrainer.php">view trainer</a></li>
</ul></li>
</ul>
</nav>
</div><br><br><br><br><br>

<div class="container">
<div class="card">
<div class="card-header text-center">BMI Calculator</div>
<div class="card-body">
<form class="w-50 m-auto" onsubmit="return false">
<div class="form-group">
<label> Weight:</label>
<input type="text" name="" placeholder="weight in kg" required id="weight" class="form-control">
 </div>
 <div class="form-group">
<label> Height:</label>
<input type="text" name="" placeholder="height in ft" required id="height" class="form-control">
</div>
<div class="form-group">
<label> BMI Value:</label>
<input type="number" name="" id="bmivalue" class="form-control">
 </div>
 <div>
 <button type="submit" class="btn-success" onclick="getbmivalue()">
 check BMI</button>
 </div>
 </form>
 </div>
<div class="card-footer text-center"> A healthy BMI ranges between 19 and 25.</div>
</div>
</div>

<script>
function getbmivalue(){
	var weight = document.getElementById('weight').value;
	var height = document.getElementById('height').value;
	height = height * 12;
	height = height * 0.025;//now height in meter
	var newbmivalue = weight / (height * height);
	newbmivalue = Math.round(newbmivalue);
	document.getElementById('bmivalue').value = newbmivalue;
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>


