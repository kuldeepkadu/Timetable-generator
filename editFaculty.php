<?php

require("../new/DBConnection.php");

 /*if (!$conn)
    {
	 die('Could not connect: ' . mysqli_error());
	}
*/
	if(isset($_POST['submit1']))
	{
		$sem =$_POST['sem'];
		$dept =$_POST['dept'];
		$year = $_POST['year'];
		$faculty_id = $_POST['teacherid'];
		$name = $_POST['teachername'];
		$subname =$_POST['sem_sub1'];
		$practname = $_POST['sem_pract1'];

		$subcode="SELECT sub_code from course where status=0 and sub_name='$subname'";
		$res1 = mysqli_query($conn,$subcode);
		$data1 = mysqli_fetch_row($res1);
		$practcode="SELECT sub_code from course where status=1 and sub_name='$practname'";
		$res2 = mysqli_query($conn,$practcode);
		$data2 = mysqli_fetch_row($res2);



		
 	 	$sql = "UPDATE faculty  SET year='$year' , dept='$dept' , faculty_id='$faculty_id' , name='$name'  , sem='$sem', sub_code='$data1[0]' , sub_name='$subname' , pract_code='$data2[0]' , pract_name='$practname' Where id='$_GET[idd]'";

		$data=mysqli_query($conn,$sql);

		header('location: facultyRecord.php');

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
			word-spacing: 17px;

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

		input[type=checkbox] {
			zoom: 1.7;
		}
		select[name=sem] {
			
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
					//alert("Successfully Added Faculty");
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
				<p class="blink">Fill Faculty Detail</p>
				
				</div>
					<form class="course" method="POST"  onsubmit="return validate()">
						
						
						Department
						<select name="dept"  id="dept" style="height: 27px; width: 170px" required ">

						 <?php 

							$result = mysqli_query($conn,"SELECT dept_name FROM dept ORDER BY dept_id ");			  	
								while ($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['dept_name']."'>".$row['dept_name']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                     
                     <input type="hidden" id="hidden_dept_id" name="hidden_dept_id"  value="<?PHP echo trim($_POST['dept_name']); ?>" />

                    
                     <!--input type="hidden" id="hidden_dept" name="hidden_dept" value="<?PHP echo trim($_POST['hidden_dept']); ?>"/>-->


						Year
						<select name="year"  id="year"  style="height: 25px; padding: 2px; " required ">

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
							<h4>.......Personal_InFo......</h4>
							<br>
							Teacher_Id
							<input type="text" size="15px" style="height: 22px; padding: 2px; font-size: 17px; font-weight: : bold;" value="<?php echo $_GET['id'] ?>" required name="teacherid" id="teacherid"  >
							
							<br><br>
							Teacher_Name
							<input type="text" size="50px" style="height: 20px; padding: 2px; font-size: 17px; font-weight: : bold; max-width: 330px;" value="<?php echo $_GET['name'] ?>" required name="teachername" id="teachername">
							<br>
							<br>
							<h4>.......Lecture_Practicle_InFo......</h4>
							<br>
							




							SEM
							<select name="sem"  id="sem_select"   style="height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;" required ">

								 <?php 
								 
								 	
									$result = mysqli_query($conn,"SELECT sem_id FROM sem ORDER BY sem_id ");			  	
										while ($row = mysqli_fetch_array($result)) {  


		                				      echo "<option value='".$row['sem_id']."'>".$row['sem_id']."</option>";
		               		     			   

		               		     			}  ?>
		               		  </select>
		               		  <input type="hidden" id="hidden_sem_id" name="hidden_sem_id"  value="<?PHP echo trim($_POST['sem']); ?>" />
							<br>
							<br>

							
					Subject : 

					<select name="sem_sub1"  id="sem_sub1" style="height: 27px; width: 230px;" >

								 <?php 
								 
								 echo "<option>-none-</option>";
								 		$dept_i=$_POST['dept_name'];

									$result = mysqli_query($conn,"SELECT sub_name FROM course WHERE status=0 and sem='$_GET[sem]'");			  	
										while ($row = mysqli_fetch_array($result)) {  


		                				       echo "<option value='".$row['sub_name']."'>".$row['sub_name']."</option>";
		               		     			   

               		     			}  ?>
                   </select>
                   <input type="hidden" id="hidden_sub_name1" name="hidden_sub_name1"  value="<?PHP echo trim($_POST['sub_name1']); ?>" />
                   <span id="msg1" style="color: red">   </span>
                   <br>
                   <br>
						
                   

							Practical : 
					<select name="sem_pract1"  id="sem_pract1" style="height: 27px; width: 230px;" required>

			   		     <?php 
							
								 echo "<option>-none-</option>";
								 		$dept_i=$_POST['dept_name'];

									$result = mysqli_query($conn,"SELECT sub_name FROM course WHERE status=1 ");			  	
										while ($row = mysqli_fetch_array($result)) {  


		                				       echo "<option value='".$row['sub_name']."'>".$row['sub_name']."</option>";
		               		     			   

               		     			}  ?>
                   </select>
                   <input type="hidden" id="hidden_pract_name" name="hidden_pract_name"  value="<?PHP echo trim($_POST['pract_name']); ?>" />
                   <span id="msg4" style="color: red">   </span>
                   <br>

							

							

							<br><br>
							
								<button class="sub" id="submit1" name="submit1" >SUBMIT
								</button>
						</div>
					</form>
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
