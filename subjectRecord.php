<?php
	


?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="alldesign.css">
	<meta charset="utf-8">
	<style type="text/css">
	body{
		background-image: none;
	}
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
	.disp {
		color: blue;
		font-style: TimesNewRoman;
		font-size: 40px;
		background-color: yellow;
		padding-top: 8px;
		padding-bottom: 8px;
	}

	.sp {
		color: darkblue;
		float: right;
		font-size: 20px;
		padding-top: 25px;
	}

	table {
		margin: 10px;
		border: 2px solid #588c7e;
		background-color: lightyellow;
		font-size: 25px;
		
		width: 99%;	
		text-align: left;
	}
	th {
		border-right: .7px solid #588c7e;
		border-bottom: 2px solid #588c7e;
		color: gray;
	}
	td {
		border-bottom: 6px solid #f2f2f2;
		border-right: .7px solid #588c7e;
	}
	td a {
		text-decoration: none;
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

		<div align="Center" class="disp">
			Teacher Record
			<span class="sp">*click on Records to update or delete</span>
		</div>

		<?php
			include("..\almost\DBConnection.php");
			$query = "SELECT * FROM course where status=0";
			$sqldata = mysqli_query($conn,$query) or die('Getting an error');

			echo "<table>";
			echo "<tr><th>&nbsp;ID</th><th>YEAR</th><th>SEM</th><th>DEPARTMENT</th><th>subject-code</th><th>Subject-Name</th><th>Delete</th><th>Update</th></tr>";

			$i=1;
			while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) {
					echo "<tr><td>";
					echo "&nbsp;&nbsp;".$i;
					echo "</td><td>";
					echo $row['year'];
					echo "</td><td>";
					echo $row['sem'];
					echo "</td><td>";
					echo $row['dept'];
					echo "</td><td>";
					echo $row['sub_code'];
					echo "</td><td>";
					echo $row['sub_name'];
					echo "</td><td>";
					echo "<a href='deleteSubject.php?id=$row[id]' onclick='return checkDelete()' style='color: red;'>x</a>";
					echo "</td><td>";
					echo "<a href='editSubject.php?id=$row[id]&branch=$row[dept]&year=$row[year]&sem=$row[sem]&subcode=$row[sub_code]&subname=$row[sub_name]'>Edit</a>";
					echo "</td></tr>";
					$i++;
			}

			echo "</table>";
		?>

		<script type="text/javascript">
			
			function checkDelete()
			{
				return	confirm('Are you sure you want to delete Data?');
			}
		</script>
	</body>
	</html>