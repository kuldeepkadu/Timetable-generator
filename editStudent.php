<?php 
	
	require("../new/DBConnection.php");

	if(isset($_POST['register']))
	{

		$username = $_POST['username'];
		$post = $_POST['post'];
		$pass1 = $_POST['pass1'];
		$id = $_GET['id'];
	
		
		$sql = "UPDATE register SET username='$username' , post='$post' , pass1='$pass1' WHERE id='$id'";

		$data=mysqli_query($conn,$sql);

		header('location: studentRecord.php');

	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>New_Login Form</title>
	<style type="text/css">
		
		form {
			height: 450px;
			width: 500px;
			position: fixed;
			bottom: 25%;
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
			margin: .8em auto;
			margin-right: 85px;
			font-size: 25px;
			color: white;
			padding: 12px 138px;
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
				
				if(a.length<4)
				{
					document.getElementById("messages").innerHTML="*4char";
					return false;
				}

				if(true)
				{
					alert("Successfully Updated!");
					//window.location.replace("studentRecord.php");
				}

				return true;

		}

		
	</script>


	<form method="POST" onsubmit="return myfun();" >
		
		<button id = "close" ><a href="main.php">x</a></button>
		
		<h4>Close</h4><br>
		<p align="center"><us>Update Registered Data</u></p>
		<br>
				<div>
					Username  <br>
					<input type="text" size="35" style="height: 30px; padding: 2px; font-size: 17px; font-weight: : bold;" name="username" id="username" value="<?php echo $_GET['uername'] ?>"  >
						<span id="msg1" style="color: red">   </span>
					<br><br>
					Post  <br>
					<select name="post"  id="post" style="width: 350px; height: 30px; padding: 2px; font-size: 17px; font-weight: : bold;"" onchange="javascript: return optionList_SelectedIndex()">

						 <?php 

						 
							$result = mysqli_query($conn,"SELECT post FROM post WHERE post='$_GET[post]' ");			  	
								while ($row = mysqli_fetch_array($result)){  


                				       echo "<option value='".$row['post']."'>".$row['post']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                     
                     <input type="hidden" id="hidden_dept_id" name="hidden_dept_id"  value="<?PHP echo trim($_POST['post']); ?>" />
                    <!-- <input type="hidden" id="hidden_dept" name="hidden_dept" value="<?PHP echo trim($_POST['hidden_dept']); ?>"/>-->
						<span id="msg2" style="color: red">   </span>
					<br><br>
					Password  <br>
					<input type="text"  maxlength="10" size="35" style="height: 30px; padding: 2px; font-size: 17px; font-weight: : bold;" id="pass1" name="pass1">
						<span id="messages" style="color: red">   </span>
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


