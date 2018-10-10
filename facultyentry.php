<?php

require("../new/DBConnection.php");

 /*if (!$conn)
    {
	 die('Could not connect: ' . mysqli_error());
	}
*/
	if(isset($_POST['submit1']))
	{

		$dept =$_POST['dept'];
		$year = $_POST['year'];
		$faculty_id = $_POST['teacherid'];
		$name = $_POST['teachername'];
		if(isset($_POST['sem_sub1'])){
			$subject_name1 = $_POST['sem_sub1'];
		}
		if(isset($_POST['sem_pract1'])){
			$pract_name1 = $_POST['sem_pract1'];
		}

		if(isset($_POST['sem_sub2'])){
			$subject_name2 = $_POST['sem_sub2'];
		}
		if(isset($_POST['sem_pract2'])){
			$pract_name2 = $_POST['sem_pract2'];
		}

		if(isset($_POST['sem_sub3'])){
			$subject_name3 = $_POST['sem_sub3'];
		}
		if(isset($_POST['sem_pract3'])){
			$pract_name3 = $_POST['sem_pract3'];
		}
		
		$sem = "SELECT sem FROM course WHERE sub_name='$subject_name1' limit 1";
		$result = mysqli_query($conn,$sem);
		$res = mysqli_fetch_row($result);

		$subject_code1 = "SELECT sub_code FROM course WHERE sub_name='$subject_name1' AND status=0 limit 1";
		$result1 = mysqli_query($conn,$subject_code1);
		$res1 = mysqli_fetch_row($result1);
		
		$pract_code1 = "SELECT sub_code FROM course WHERE sub_name='$pract_name1' AND status=1 ";
		$result2 = mysqli_query($conn,$pract_code1);
		$res2 = mysqli_fetch_row($result2);

		$sql = "INSERT INTO faculty (faculty_id,name,dept,year,sem,sub_code,sub_name,pract_code,pract_name) VALUES ('$faculty_id','$name','$dept','$year','".$res[0]."','".$res1[0]."','$subject_name1','".$res2[0]."','$pract_name1')";
		//echo "$sql";

		mysqli_query($conn,$sql);


		$sem_1 = "SELECT sem FROM course WHERE sub_name='$subject_name2'  limit 1";
		$result_1 = mysqli_query($conn,$sem_1);
		$res_1 = mysqli_fetch_row($result_1);

		$subject_code2 = "SELECT sub_code FROM course WHERE sub_name='$subject_name2' AND status=0 limit 1";
		$result1_1 = mysqli_query($conn,$subject_code2);
		$res1_1 = mysqli_fetch_row($result1_1);
		
		$pract_code2 = "SELECT sub_code FROM course WHERE sub_name='$pract_name2' AND status=1 ";
		$result2_1 = mysqli_query($conn,$pract_code2);
		$res2_1 = mysqli_fetch_row($result2_1);

		$sql_1 = "INSERT INTO faculty (faculty_id,name,dept,year,sem,sub_code,sub_name,pract_code,pract_name) VALUES ('$faculty_id','$name','$dept','$year','".$res_1[0]."','".$res1_1[0]."','$subject_name2','".$res2_1[0]."','$pract_name2')";
		//echo "$sql_1";

		mysqli_query($conn,$sql_1);


		



		$sem_11 = "SELECT sem FROM course WHERE sub_name='$subject_name3'  limit 1";
		$result_11 = mysqli_query($conn,$sem_11);
		$res_11 = mysqli_fetch_row($result_11);

		echo $res_11[0];

		$subject_code3 = "SELECT sub_code FROM course WHERE sub_name='$subject_name3' AND status=0 limit 1";
		$result1_2 = mysqli_query($conn,$subject_code3);
		$res1_2 = mysqli_fetch_row($result1_2);
		
		$pract_code3 = "SELECT sub_code FROM course WHERE sub_name='$pract_name3' AND status=1 ";
		$result2_2 = mysqli_query($conn,$pract_code3);
		$res2_2 = mysqli_fetch_row($result2_2);

		$sql_2 = "INSERT INTO faculty (faculty_id,name,dept,year,sem,sub_code,sub_name,pract_code,pract_name) VALUES ('$faculty_id','$name','$dept','$year','".$res_11[0]."','".$res1_2[0]."','$subject_name3','".$res2_2[0]."','$pract_name3')";
		//echo "$sql_2";

		mysqli_query($conn,$sql_2);

		

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
			var s3 = document.getElementById('sem_sub1').value;
			var s4 = document.getElementById('sem_sub2').value;
			var s5 = document.getElementById('sem_sub3').value;
			var s6 = document.getElementById('sem_pract1').value;
			var s7 = document.getElementById('sem_pract2').value;
			var s8 = document.getElementById('sem_pract3').value;

			if (s1=="--select--") {

				alert("please Select Department");
				return false;
			}
			if (s2=="--") {

				alert("please Select Year");
				return false;
			}
			if(s3=="--select--")
			{
				document.getElementById("msg1").innerHTML="*Select";
				return false;
			}
			if(s4=="--select--")
			{
				document.getElementById("msg2").innerHTML="*Select";
				return false;
			}
			if(s5=="--select--")
			{
				document.getElementById("msg3").innerHTML="*Select";
				return false;
			}
			if(s6=="--select--")
			{
				document.getElementById("msg4").innerHTML="*Select";
				return false;
			}
			if(s7=="--select--")
			{
				document.getElementById("msg5").innerHTML="*Select";
				return false;
			}
			if(s8=="--select--")
			{
				document.getElementById("msg6").innerHTML="*Select";
				return false;
			}
			if (true) {
					alert("Successfully Added Faculty");
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
						<select name="dept"  id="dept" style="width: 200px" required ">

						 <?php 
						 echo "<option>--select--</option>";

							$result = mysqli_query($conn,"SELECT dept_name FROM dept ORDER BY dept_id ");			  	
								while ($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['dept_name']."'>".$row['dept_name']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                     
                     <input type="hidden" id="hidden_dept_id" name="hidden_dept_id"  value="<?PHP echo trim($_POST['dept_name']); ?>" />

                    
                     <!--input type="hidden" id="hidden_dept" name="hidden_dept" value="<?PHP echo trim($_POST['hidden_dept']); ?>"/>-->


						Year
						<select name="year"  id="year" style="max-width:80px" required ">

						 <?php 
						 echo "<option>--</option>";

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
							<input type="text" size="15px" required name="teacherid" id="teacherid"  >
							
							<br><br>
							Teacher_Name
							<input type="text" size="50px" required name="teachername" id="teachername">
							<br>
							<br>
							<h4>.......Lecture_Practicle_InFo......</h4>
							<br>
							<br>
							<input type="checkbox" required size="20px" name="checkbox" id="checkbox">
							is this faculty takes a Lecture?
							<br><br>
							For SE : 

							<select name="sem_sub1"  id="sem_sub1" style='width:230px'  required >

						 <?php 
						 echo "<option>--select--</option>";
						 echo "<option>none</option>";
						 		$dept_i=$_POST['dept_name'];
							$result = mysqli_query($conn,"SELECT sub_name FROM course WHERE status=0 and sem=3 or sem=4 ORDER BY id  ");			  	
								while ($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['sub_name']."'>".$row['sub_name']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                   <input type="hidden" id="hidden_sub_name1" name="hidden_sub_name1"  value="<?PHP echo trim($_POST['sub_name1']); ?>" />
                   <span id="msg1" style="color: red">   </span>
                   <br>

							For TE :
							<select name="sem_sub2"  id="sem_sub2" style="width:230px" required >

						 <?php 
						 echo "<option>--select--</option>";
						 echo "<option>none</option>";

							$result = mysqli_query($conn,"SELECT sub_name FROM course WHERE status=0 and sem=5 or sem=6 ORDER BY id  ");			  	
								while ($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['sub_name']."'>".$row['sub_name']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                   <input type="hidden" id="hidden_sub_name2" name="hidden_sub_name2"  value="<?PHP echo trim($_POST['sub_name2']); ?>" />
                   <span id="msg2" style="color: red">   </span>
                   <br>

							For BE :
							<select name="sem_sub3"  id="sem_sub3" style="width:230px" required >

						 <?php 
						 echo "<option>--select--</option>";
						 echo "<option>none</option>";

							$result = mysqli_query($conn,"SELECT sub_name FROM course WHERE status=0 and sem=7 or sem=8 ORDER BY id  ");			  	
								while ($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['sub_name']."'>".$row['sub_name']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                   <input type="hidden" id="hidden_sub_name3" name="hidden_sub_name3"  value="<?PHP echo trim($_POST['sub_name3']); ?>" />
                   <span id="msg3" style="color: red">   </span>
                   <br>


							<br>
							<input type="checkbox" required size="20px" name="checkbox" id="checkbox">
							is this faculty takes a Practicle?
							<br><br>

							For SE : 
								<select name="sem_pract1"  id="sem_pract1" style="width:230px" required>

						 <?php 
						 echo "<option>--select--</option>";
						 echo "<option>none</option>";

							$result = mysqli_query($conn,"SELECT sub_name FROM course WHERE status=1 and sem=3 or sem=4  ORDER BY id  ");			  	
								while ($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['sub_name']."'>".$row['sub_name']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                   <input type="hidden" id="hidden_pract_name" name="hidden_pract_name"  value="<?PHP echo trim($_POST['pract_name']); ?>" />
                   <span id="msg4" style="color: red">   </span>
                   <br>

							

							For TE :
								<select name="sem_pract2"  id="sem_pract2" style="width:230px" required >

						 <?php 
						 echo "<option>--select--</option>";
						 echo "<option>none</option>";

							$result = mysqli_query($conn,"SELECT sub_name FROM course WHERE status=1 and sem=5 or sem=6  ORDER BY id  ");			  	
								while ($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['sub_name']."'>".$row['sub_name']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                   <input type="hidden" id="hidden_pract_name" name="hidden_pract_name"  value="<?PHP echo trim($_POST['pract_name']); ?>" />
                   <span id="msg5" style="color: red">   </span>
                   <br>

							

							For BE : 
								<select name="sem_pract3"  id="sem_pract3" style="width:230px" required >

						 <?php 
						 echo "<option>--select--</option>";
						 echo "<option>none</option>";

							$result = mysqli_query($conn,"SELECT sub_name FROM course WHERE status=1 AND sem=7 OR sem=8  ORDER BY id  ");		  	
								while ($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['sub_name']."'>".$row['sub_name']."</option>";
               		     			   

               		     			}  ?>
                   </select>
                   <input type="hidden" id="hidden_pract_name" name="hidden_pract_name"  value="<?PHP echo trim($_POST['pract_name']); ?>" />
                   <span id="msg6" style="color: red">   </span>
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
