<?php 
	
	require("../new/DBConnection.php");

	if(isset($_POST['submit']))
	{

		$dept = $_POST['dept'];
		$year = $_POST['year'];
		$sem = $_POST['sem'];
		$subcode = $_POST['subject_code'];
		$subname = $_POST['subject_name'];
		$id=$_GET['id'];
		
		$sql = "UPDATE course SET year='$year' , dept='$dept' , sub_code='$subcode' ,sub_name='$subname' ,sem='$sem' WHERE id='$id'";

		mysqli_query($conn,$sql);

		header('location: practicalRecord.php');
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="alldesign.css">
	<meta charset="utf-8">
	<style type="text/css">
		body {
			background-image: none;
			background-color: lightblue;
		}
		.blink {

				font-size: 55px;
				font-family: ;
				color: red;
				font-family: TimesNewRoman;
				padding: 0px;

			}

		.parts {
			text-align: center;
		}

		.color {
			background-color: yellow;
		}

		.course {
			background-color: lightblue;
			padding:20px ;
			word-spacing: 20px;

			font-size: 25px;
		}

		.a {
			background-color: blue;
			font-size: 15px;
			border-radius: 2px;
			padding: 10px; 
			display: inline-block;
			text-decoration: none;
			color: white;
			cursor: pointer;
		}

		.sub {
			background-color: green;
			font-size: 35px;
			padding: 10px; 
			display: inline-block;
			text-decoration: none;
			color: white;
			cursor: pointer;
			border: 1px;
			border-radius: 5px;
		}

		div p {
			font-size: 20px;
		}

	</style>


	<script type="text/javascript">
		
		function validate()
		{
			var s1 = document.getElementById('dept').value;
			var s2 = document.getElementById('year').value;

			if (s1=="--select--") {

				alert("please Select Department");
				return false;
			}
			if (s2=="--") {

				alert("please Select Year");
				return false;
			}
			if (true) {
					alert("Successfully Added Subject");
					return true;
				}

			return true;
		}
	</script>


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

			<div class="color">
				<p class="blink">Fill Course Detail</p>
				
				</div>
					<form class="course" method="POST" onsubmit="return validate()">
						
						<?php
						global $dept;
						?>
						Department
						<select name="dept"  id="dept" style="width: 200px" required ">

						 <?php 
						 

							$result = mysqli_query($conn,"SELECT dept_name FROM dept WHERE dept_name='$_GET[branch]' ");			  	
								while ($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['dept_name']."'>".$row['dept_name']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                     
                     <input type="hidden" id="hidden_dept_id" name="hidden_dept_id"  value="<?PHP echo trim($_POST['dept_name']); ?>" />
                     <!--input type="hidden" id="hidden_dept" name="hidden_dept" value="<?PHP echo trim($_POST['hidden_dept']); ?>"/>-->
						<span id="msg2" style="color: red">   </span>

						<!--<select id="mylist">
								<option  selected value="dept" <?= ($dept === '--Select--' ? 'selected="selected"' : '') ?>  >--Select--</option>
								<option value="dept" <?= ($dept ===  'Computer Engineering' ? 'selected="selected"' : '') ?> >Computer Engineering</option>
								<option value="dept" <?= ($dept === 'Civil Engineering'? 'selected="selected"' : '') ?>>Civil Engineering</option>
								<option  value="dept" <?= ($dept === 'Mechanical Engineering' ? 'selected="selected"' : '') ?>>Mechanical Engineering</option>
								<option value="dept" <?= ($dept === 'Electrical Engineering' ? 'selected="selected"' : '') ?>>Electrical Engineering</option>
								<option  value="dept" <? ($dept === 'Electronics Engineering' ? 'selected="selected"' : '') ?>Electronics Engineering</option>
							</select>-->

						Year
						<select name="year"  id="year" style="max-width:80px" required ">

						 <?php 

							$result = mysqli_query($conn,"SELECT year FROM year ORDER BY year_id ");			  	
								while ($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['year']."'>".$row['year']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                   <input type="hidden" id="hidden_year" name="hidden_year"  value="<?PHP echo trim($_POST['year']); ?>" />
						<br>

						<div>
							<br>
							<h4>.......Subject......</h4>
							<br>
							SEM
							<select name="sem"  id="sem_select"  style="max-width:80px" required ">

								 <?php 
								 
								 	echo  "<option>".$_GET[sem]."</option>" ;
									$result = mysqli_query($conn,"SELECT sem_id FROM sem WHERE sem_id!='$_GET[sem]' ");			  	
										while ($row = mysqli_fetch_array($result)) {  


		                				      echo "<option value='".$row['sem_id']."'>".$row['sem_id']."</option>";
		               		     			   

		               		     			}  ?>
		               		  </select>
		               		  <input type="hidden" id="hidden_sem_id" name="hidden_sem_id"  value="<?PHP echo trim($_POST['sem']); ?>" />
							<br>
							<br>
							Subject_Code	<!--pattern="[0-9]{10}" -->
							<input type="subject_code" size="30" maxsize="200px" value="<?php echo $_GET['subcode'] ?>" required oninvalid="setCustomValidity('Invalid Subject Code')" name="subject_code" id="subject_code">
						
							<br>
							<br>
							Subject_Name
							<input type="text" size="49" maxsize="200px" value="<?php echo $_GET['subname'] ?>" required name="subject_name" id="subject_name">
							<!--button class="a">ADD</button-->

							
								<br><br><br>
								<button class="sub" id="submit" name="submit">SUBMIT
								</button>
						</div>
					</form>
					<br><br><br>
								<p>Note: To add Practicle click on Options</a></p>
								
	</div>

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
