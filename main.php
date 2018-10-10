<?php session_start(); ?>


 <!--?php
  require("../almost/session.php");
  require ("../almost/DBConnection.php");
$error = "";


if (isset($_GET["action"]) && ($_GET["action"] == "login")) {

$username = $_POST['username'];
$pass1 = $_POST['pass1'];

$query = "SELECT username, pass1 FROM register WHERE username='$username' AND pass1='$pass1'";
mysqli_query($conn,$query);
$result =  @mysql_query($conn,$query) or die('Error, insert query failed');
//if (empty($result)) { $error = "User not found!"; }
$row = mysql_fetch_array ($result, MYSQL_NUM);

if (!$row) { $error = "UserID and Password did not match or not found in the database"; }
if ($row) { 

		session_register('is');
		$_SESSION['is']['login']   = TRUE;
		$_SESSION['is']['user_id'] = $_POST['username'];
	$session = "1";	
}
}
?-->
<!--?php

require ("../almost/DBConnection.php");
login();

if(isset($_POST['submit']))
	{
		$username = trim($_POST['username']);
		$pass1 = trim($_POST['pass1']);

		

		$sql = "SELECT username,pass1 FROM register WHERE username = '$username' AND pass1='$pass1' ";

		$result = mysqli_query($conn,$sql) or die(mysqli_error());
		$num_row = mysqli_num_row($result);
		$row = mysqli_fetch_array($result);
		if($num_row==1)
		{
			
			return true;
		}
		else
		{
			echo "Invalid Usename and Password!";
		}
	}

?-->


<!--?php

if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$pass1 = $_POST['pass1'];

		$sql = "SELECT * FROM register WHERE username = '$username' AND pass1='$pass1' ";

		mysqli_query($conn,$sql);

		return true;
	}
	else
	{
		return false;
	}

?-->


<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="alldesign.css">
	<meta charset="utf-8">
	<style type="text/css">
	
	.btn1 {
		margin-top: 120px;
		margin-left: 400px;
		background-color: yellow;
		padding: 6px;
	}

	.buttons {
		margin-left: 260px;
		margin-top: 120px;
		background-color: yellow;
		padding: 6px;
	}

</style>
</head>
<body>
	
	<nav>
		<p>Timetable Generator</p>
		<ul>
			<li><a href="main.php">Home</a></li>
			<li><a href="#">Option</a>
				<ul>
					<li><a href="subjectentry.php">Add Subject</a></li>
					<li><a href="practentry.php">Add Practicle</a></li>
					<li><a href="facultyentry.php">Add Faculty</a></li>
				</ul>
			<li><a href="#">Records</a>
				<ul>
					<li><a href="techerRecord.php">Teacher Records</a></li>
					<li><a href="studentRecord.php">Student Records</a></li>
					<li><a href="subjectRecord.php">Subject records</a></li>
					<li><a href="practicalRecord.php">Practical records</a></li>
					<li><a href="facultyRecord.php">Faculty Details</a></li>
				</ul>
			</li>
			<li><a href="about.html">About us</a></li>
			<li>
				<a href="#">Help</a>
			</li>
		</ul>
		<div>
			<a href="login.php" style="font-family: timesnewroman;">Logout</a>		 
		</div>
	</nav>


		<div class="parts" >
			<div><marquee class="top">Welcome! admin..</marquee>
			</div>

				<div>

						<button class="buttons"><a href="subjectentry.php">
							<p> AddCourse </p> </a>
						</button>
						
						<button class="btn1"><a href="studentRecord.php">
							<p> UpdateInfo </p> </a>
						</button>

						
					<br />	

						<button class="buttons"><a href="facultyentry.php">
							<p> AddFaculty </p> </a>
						</button>

						<button class="btn1"><a href="frontgenerate.php">
							<p> GenerateT </p>  </a>
						</button>
				</div>


</body>
</html>