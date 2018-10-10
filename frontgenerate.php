<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="alldesign.css">
	<meta charset="utf-8">
	<style type="text/css">
		body {
			
			background: linear-gradient(110deg,pink 30%,lightblue 60%);
		}
		.btn2 {
			font-family: TimesNewRoman;
			background-color: yellow;
			padding: 01px;
			margin-top: 180px;
			margin-left: 180px;	
		}
		.btn1 {
			font-family: TimesNewRoman;
			background-color: yellow;
			padding: 01px;
			margin-top: 180px;
			margin-left: 20px;
		}
		.btt1 {
			font-family: TimesNewRoman;
			background-color: yellow;
			padding: 1px;
			margin-top: 180px;
			margin-left: 20px;
		}



		.blink {

				/*animation-duration: 1000ms;
				animation-name: blink1;
				animation-iteration-count: infinite;
				animation-direction: alternate;*/
				font-size: 55px;
				font-family: ;
				color: red;
				font-family: TimesNewRoman;
				padding: 0px;
			}
		.color {
			background-color: lightyellow;
		}

		
/*@keyframes blink
{
	from {
		opacity: 1;
	} to {
		opacity: 0;
	}

}*/


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


		<div class="parts">
			<div class="color">
			<p class="blink" align='center'>Select Option
			</p>
			</div>
							
							<button class="btn2"><a href="generate.php">
								 GENERET TIMETABLE  </a>
							</button>
							
							
							<button class="btn1"><a href="update.php">
								UPDATE  </a>
							</button>


							<button class="btt1" ><a href="view.php">
								VIEW TIMETABLE </a>
							</button>
						
				</div>		
					
		


</body>
</html>
