<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">

	body{
		background-image: none;
	}
table {
		margin: 10px;
		border: 2px solid #588c7e;
		background-color: lightyellow;
		font-size: 20px;
		
		width: 99%;	
		text-align: center;
	}
	th {
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

	.dev {
		font-size: 35px;
		background-color: lightblue;
		padding: 20px;
		
	}
	.dev tag {
		margin-left: 570px;
	}
	.disp {
		color: blue;
		font-style: TimesNewRoman;
		font-size: 40px;
		background-color: pink;
		padding-top: 8px;
		padding-bottom: 8px;
	}

	</style>
</head>
<body>


<div class="dev">
		<a href="frontgenerate.php" style="font-family: timesnewroman;" class="btn1"><img src="img/back.png" style="height: 30px; width: 65px; float: left;"></a>		 
		<tag>TIMETABLE</tag>
	</div>


	<div align="Center" class="disp">
			SEM- <?php session_start();   echo $_SESSION["sem"]; ?><!--?php

include("..\almost\DBConnection.php");
			$query = "SELECT sem FROM  Where sem='$sem'";
			$sqldata = mysqli_query($conn,$query) or die('Getting an error');
			$row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC);

				echo "<a href='edittimetable.php?id=$row[id]&sub1=$row[sub1]&sub2=$row[sub2]&sub3=$row[sub3]&sub4=$row[sub4]&sub5=$row[sub5]&sub6=$row[sub6]'>Edit</a>";?-->
			<span class="sp"></span>
		</div>

		<?php
			include("..\almost\DBConnection.php");
			$query = "SELECT * FROM timetable where sem='$_SESSION[sem]'";
			$sqldata = mysqli_query($conn,$query) or die('Getting an error');

			$sql ="SELECT day FROM days ORDER BY id";
			$days = mysqli_query($conn,$sql) or die('Getting an error');

			echo "<table>";
			echo '<tr>
                <td style="text-align:center; padding: 12px;">WEEKDAYS</td>
                <td style="text-align:center">9:10--10:10</td>
                <td style="text-align:center">10:10--11:10</td>
                <td style="text-align:center">11:10--11:40</td>
                <td style="text-align:center">11:40--12:40</td>
                <td style="text-align:center">12:40--1:40</td>
                <td style="text-align:center">1:40--1:50</td>
                <td style="text-align:center">1:50--2:50</td>
                <td style="text-align:center">2:50--3:50</td>
                <td style="text-align:center">Update</td>

                </tr>';

			$i=1;
			
			while($day= mysqli_fetch_array($days,MYSQLI_ASSOC)){
				echo "<tr><td>";
				echo $day['day'];
		
			

			if($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC) ) {
					echo "</td><td>";
					echo $row['sub1'];
					echo "</td><td>";
					echo $row['sub2'];
					echo "</td><td>";
					echo "R";
					echo "</td><td>";
					echo $row['sub3'];
					echo "</td><td>";
					echo $row['sub4'];
					echo "</td><td>";
					echo "S-R";
					echo "</td><td>";
					echo $row['sub5'];
					echo "</td><td>";
					echo $row['sub6'];
					echo "</td><td>";
					echo "<a href='editTimetable.php?dayname=$day[day]&sem=3&timeid=$row[timeid]&sub1=$row[sub1]&sub2=$row[sub2]&sub3=$row[sub3]&sub4=$row[sub4]&sub5=$row[sub5]&sub6=$row[sub6]'>Edit</a>";
					echo "</td></tr>";
					$i++;
			}
}
			echo "</table>";
		?>
	

</body>
</html>