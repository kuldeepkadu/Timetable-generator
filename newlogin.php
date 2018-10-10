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


?>

<!DOCTYPE html>
<html>
<head>
	<title>New_Login Form</title>
	<style type="text/css">
		
		form {
			height: 550px;
			width: 700px;
			position: fixed;
			bottom: 15%;
			right: 30%;
			border:1.5px solid;
			background-color: lightyellow;
			border-radius: 9px;
		}

		form p {
			font-style: bold;
			font-size: 25px;

		}
		form div {
			margin-left: 60px;
			font-size: 20px;
		}

		form div .btn  {
			background-color: #4CAF50;
			border:none;
			margin: 2.5em auto;
			margin-right: 90px;
			font-size: 20px;
			color: white;
			padding: 12px 22px;
			text-decoration: none;
			border-radius: 4px;
			display: inline-block;
			cursor: pointer;
			float: right;
		}

		form div .btn a {
			text-decoration: none;
			color: white;
		}

		#close {
			background-color: red;
			border: 2px;
			border-radius: 3px;
			border: none;
			height: 20px;
			width: 30px;
			margin-right: 3px;
			margin-top: 2px;
			float: right;
		}

		form h4 {
			float: right;
			margin-right: 2px;
			margin-top: 7px;
		} 

	</style>

</head>
<body>

		

	<script>
		function myfun() {
				var user = document.getElementById("username").value;
				var post = document.getElementById("post").value;
				var a = document.getElementById("pass1").value;
				var b = document.getElementById("pass2").value;

				if (user=="") {
					document.getElementById("msg1").innerHTML="*";
					
					return false;
				}
				if (post=="--select--") {
					document.getElementById("msg2").innerHTML="SelectPost";
					
					return false;
				}
				if (a=="") {
					document.getElementById("messages").innerHTML="*";

					return false;
				}
				if (b=="") {
					document.getElementById("messagess").innerHTML="*";

					return false;
				}
				
				if(a.length<4)
				{
					document.getElementById("messages").innerHTML="*Atleast 4char";
					return false;
				}
				if(b.length<4)
				{
					document.getElementById("messagess").innerHTML="*Atleast 4char";
					return false;
				}

				if(a!=b)
				{
					document.getElementById("messagess").innerHTML="*password not matched";
					return false;
				}

				if (true) {
					alert("Successfully Register");
					return true;
				}

				return true;

		}

		
	</script>


	<form  method="POST" onsubmit="return myfun();" action="login.php" >
		
		<button id = "close" ><a href="login.php">x</a></button>
		
		<h4>Close</h4><br>
		<p align="center"><us>NewUser Regestration form</u></p>
		<br>
				<div>
					Username  <br>
					<input type="text" size="60" name="username" id="username" >
						<span id="msg1" style="color: red">   </span>
					<br><br>
					Post  <br>
					<select name="post"  id="post" style="width: 267px" onchange="javascript: return optionList_SelectedIndex()">

						 <?php 

						 echo "<option>--select--</option>";
							$result = mysqli_query($conn,"SELECT post FROM post ORDER BY post ");			  	
								while ($row = mysqli_fetch_array($result)){  


                				       echo "<option value='".$row['post']."'>".$row['post']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                     
                     <input type="hidden" id="hidden_dept_id" name="hidden_dept_id"  value="<?PHP echo trim($_POST['post']); ?>" />
                    <!-- <input type="hidden" id="hidden_dept" name="hidden_dept" value="<?PHP echo trim($_POST['hidden_dept']); ?>"/>-->
						<span id="msg2" style="color: red">   </span>
					<br><br>
					Password  <br>
					<input type="Password"  maxlength="10" size="50" id="pass1" name="pass1">
						<span id="messages" style="color: red">   </span>
					<br><br>
					ReEnter Password  <br>
					<input type="Password"  maxlength="10" size="50" id="pass2" >
						<span id="messagess" style="color: red">   </span>
					<br><br>

					<input type="submit" id="register" class="btn" name="register"></input>

				</div>
			</form>



</body>
</html>

<script language="javascript" >

		function optionList_SelectedIndex()
		{
			

			var selObj = document.getElementById('pteacher');
			//var txtIndexObj = document.getElementById('txtIndex');
			var hidden_psubcatid_ValueObj = document.getElementById('hidden_ptid');
			var hidden_psubcat_TextObj = document.getElementById('hidden_pt');
			
			var selIndex = selObj.selectedIndex;
			//txtIndexObj.value = selIndex;
			hidden_psubcatid_ValueObj.value = selObj.options[selIndex].value;
			hidden_psubcat_TextObj.value = selObj.options[selIndex].text;
		}
			
		
</script>	

<script language="javascript" >
	var form = document.forms[0];
	//purpose?: to retrieve what users last input on the field..
	form.pteacher.value = ("<?PHP echo $_POST['hidden_pt']; ?>");
	form.psy.value = ("<?PHP echo $_POST['hidden_psem']; ?>");
	form.pcourse.value = ("<?PHP echo $_POST['hidden_pcourse']; ?>");
	form.pdept.value = ("<?PHP echo $_POST['hidden_dept']; ?>");
	
	//alert (form.pCityM.value);				
</script>


