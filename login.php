<?php if (empty($session)) { session_start(); } ?>
<?php 
	
	require("../new/DBConnection.php");

	if(isset($_POST['register']))
	{

		$username = $_POST['username'];
		$pdept = $_POST['post'];
		$pass1 = $_POST['pass1'];
	
		$username = stripcslashes($username);
		$pdept = stripcslashes($pdept);
		$pass1 = stripcslashes($pass1);

		$username = mysql_real_escape_string($username);
		$pdept = mysql_real_escape_string($pdept);
		$pass1 = mysql_real_escape_string($pass1);

		$sql = "INSERT INTO register (username,post,pass1) VALUES ('$username','$pdept','$pass1')";

		mysqli_query($conn,$sql);
	}



	if(isset($_POST['submit']))
	{
		

		$sql = "SELECT * FROM register WHERE username = '$username' AND pass1='$pass1' ";

		mysqli_query($conn,$sql);

	}



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}

		body {
		background: linear-gradient(110deg,#93a5cf,#e4efe9 );
	}

		nav p {
			font-style: italic 
			font-style:  bold;
			color: darkblue;
			font-size: 60px;
			position: relative;
			
		}

		

		#pop {
			height: 280px;
			width: 400px;
			position: fixed;
			background-color: lightyellow;
			bottom: 40%;
			right: 36%;
			border:2px solid;
			padding: 10px;
			border-radius: 9px;
		}

		div form input[type=varchar], input[type=password]
		{
			height: 20px;

		} 

		div form span {
			font-size: 20px;
		}


		#pop p {
			font-size: 30px;
			font-style: 20;
		}

		#pop form {
			font-size: 24px;
			box-shadow: auto;
			padding-top: 15px;
			margin: .5em auto;
			margin-left: 20px;
		}

		#pop form .p {
			
			margin: .01em auto;
			margin-left: 90px;
			border: 2px;
			border-radius: 6px;
			font-size: 20px;
			color: black;
			float: left;
			text-decoration: none;
		}

		#pop form .submit {
			background-color: #4CAF50;
			border:none;
			color: white;
			margin: 0.5em auto;
			margin-left: 15px;
			font-size: 20px;
			color: white;
			padding: 12px 82px;
			display: inline-block;
			cursor: pointer;
			float: left;
			text-decoration: none;
		}

		#pop form button a {
			text-decoration: none;
		}

		#pop form .submit a {
			text-decoration: none;
		}

		

	</style>


	

</head>
<body>


	<script>
		function myfun() {
				var user = document.getElementById("username").value;
				var pass1 = document.getElementById("pass1").value;


				if(user.length<4)
				{
					document.getElementById("msg1").innerHTML="*4char";
					return false;
				}
				if(pass1.length<4)
				{
					document.getElementById("msg2").innerHTML="*4char";
					return false;
				}
				if (user!="admin" || pass1!="root") {
					alert("Invalid Username or Password!");
					return false;
				}

				return true;

			}

	</script>

	<nav align="center">
		<p>
			
			TimeTable Generator
			
		</p>
		<br><br><marquee behavior="alternate" height="40px" width="400px" bottom="35%" right="40%">
		<h2>please login first</h2></marquee>
	</nav>

	<div id="pop">
		
		<br>
		<p align="center">Login Page</p>

		<form method="post" onsubmit="return myfun();" onsubmit="return check()" action="main.php">
		Username <br>
		<input type="varchar" required size="35" id="username">
			<span id="msg1" style="color: red" font-size="5">   </span>
		<br>
	
		Password <br>
		<!--<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required maxlength="10" size="35" name="upass"><br>
		-->
		<input type="password" pattern="[A-Z]).8"  required maxlength="10" size="35" id="pass1">
			<span id="msg2" style="color: red" font-size="4">   </span>
		<br>

		<button class="submit" id="login" name="submit" value="Login">Submit</button>
		<p class="p">new user 	<a href="newlogin.php">Register</a> </p>
		</form>

	</div>
	
</body>
</html>