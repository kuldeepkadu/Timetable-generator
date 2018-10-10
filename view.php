<?php 
	
	if(isset($_POST['create_pdf'])){
		require_once("tcpdf/tcpdf.php");
		$obj_pdf = new TCPDF('P',PDF_UNIT,PDF_PAGE_FORMAT, true,'UTF-8',false);
		$obj_pdf -> SetCreator(PDF_CREATOR);
		$obj_pdf -> SetTitle("Export HTML Data to PDF in PHP");
		$obj_pdf -> SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
		$obj_pdf -> SetHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		//$obj_pdf -> SetfooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		$obj_pdf -> SetDefaultMonospacedFont('helvetica');
		$obj_pdf -> SetFooterMargin(PDF_MARGIN_FOOTER);
		$obj_pdf -> SetMargins(PDF_MARGIN_LEFT,'5',PDF_MARGIN_RIGHT);
		$obj_pdf -> SetPrintHeader(false);
		//$obj_pdf -> SetPrintFooter(false);
		$obj_pdf -> SetAutoPageBreak(TRUE,10);
		$obj_pdf -> SetFont('helvetica', '', 20);

		$content = '';
		$content .= fetch_data();

		$obj_pdf -> writeHTML($content);
		$obj_pdf -> Output("sample.pdf", "I");	
	}

?>


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
	.print {
			background-color: #4CAF50;
			border:none;
			border-radius: 4px;
			color: white;
			margin: 1.4em auto;
			font-size: 20px;
			color: white;
			padding: 12px 22px;
			display: inline-block;
			cursor: pointer;
			float: right;
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
			SEM - <?php session_start(); echo $_SESSION['sem']; ?><!--?php

include("..\almost\DBConnection.php");
			$query = "SELECT sem FROM  Where sem='$sem'";
			$sqldata = mysqli_query($conn,$query) or die('Getting an error');
			$row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC);

				echo "<a href='edittimetable.php?id=$row[id]&sub1=$row[sub1]&sub2=$row[sub2]&sub3=$row[sub3]&sub4=$row[sub4]&sub5=$row[sub5]&sub6=$row[sub6]'>Edit</a>";?-->
			<span class="sp"></span>
		</div>

		<?php

		//function fetch_data(){


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
                
                </tr>';

			$i=1;
			
			while($day= mysqli_fetch_array($days,MYSQLI_ASSOC)){
				echo "<tr><td>";
				echo $day['day'];
		
			

			if($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC) ) {
					echo "</td><td>";
					if($row['sub1'])
						{
							$qr1="SELECT sub_name from faculty where name='$row[sub1]' ";
							$qw1 = mysqli_query($conn,$qr1);
							$qd1= mysqli_fetch_row($qw1);

							if($qd1[0]=='-none-'){
								$qr1_1="SELECT pract_name from faculty where name='$row[sub1]' and pract_name!='-none-'";
								$qw1_1 = mysqli_query($conn,$qr1_1);
								$qd1_1= mysqli_fetch_row($qw1_1);
								echo $qd1_1[0];
							}
							if($qd1[0]!='-none-'){
								echo $qd1[0];
							}
							
						}
					echo "</td><td>";
					if($row['sub2'])
						if($row['sub2'])
						{
							$qr1="SELECT sub_name from faculty where name='$row[sub2]' ";
							$qw1 = mysqli_query($conn,$qr1);
							$qd1= mysqli_fetch_row($qw1);

							if($qd1[0]=='-none-'){
								$qr1_1="SELECT pract_name from faculty where name='$row[sub2]' and pract_name!='-none-'";
								$qw1_1 = mysqli_query($conn,$qr1_1);
								$qd1_1= mysqli_fetch_row($qw1_1);
								echo $qd1_1[0];
							}
							if($qd1[0]!='-none-'){
								echo $qd1[0];
							}
							
						}
					echo "</td><td>";
					echo "R";
					echo "</td><td>";
					if($row['sub3'])
						{
							$qr1="SELECT sub_name from faculty where name='$row[sub3]' ";
							$qw1 = mysqli_query($conn,$qr1);
							$qd1= mysqli_fetch_row($qw1);

							if($qd1[0]=='-none-'){
								$qr1_1="SELECT pract_name from faculty where name='$row[sub3]' and pract_name!='-none-'";
								$qw1_1 = mysqli_query($conn,$qr1_1);
								$qd1_1= mysqli_fetch_row($qw1_1);
								echo $qd1_1[0];
							}
							if($qd1[0]!='-none-'){
								echo $qd1[0];
							}
							
						}
					echo "</td><td>";
					if($row['sub4'])
						if($row['sub4'])
						{
							$qr1="SELECT sub_name from faculty where name='$row[sub4]' ";
							$qw1 = mysqli_query($conn,$qr1);
							$qd1= mysqli_fetch_row($qw1);

							if($qd1[0]=='-none-'){
								$qr1_1="SELECT pract_name from faculty where name='$row[sub4]' and pract_name!='-none-'";
								$qw1_1 = mysqli_query($conn,$qr1_1);
								$qd1_1= mysqli_fetch_row($qw1_1);
								echo $qd1_1[0];
							}
							if($qd1[0]!='-none-'){
								echo $qd1[0];
							}
							
						}
					echo "</td><td>";
					echo "S-R";
					echo "</td><td>";
					if($row['sub5'])
						{
							$qr1="SELECT sub_name from faculty where name='$row[sub5]' ";
							$qw1 = mysqli_query($conn,$qr1);
							$qd1= mysqli_fetch_row($qw1);

							if($qd1[0]=='-none-'){
								$qr1_1="SELECT pract_name from faculty where name='$row[sub5]' and pract_name!='-none-'";
								$qw1_1 = mysqli_query($conn,$qr1_1);
								$qd1_1= mysqli_fetch_row($qw1_1);
								echo $qd1_1[0];
							}
							if($qd1[0]!='-none-'){
								echo $qd1[0];
							}
							
						}
					echo "</td><td>";
					if($row['sub6'])
						{
							$qr1="SELECT sub_name from faculty where name='$row[sub6]' ";
							$qw1 = mysqli_query($conn,$qr1);
							$qd1= mysqli_fetch_row($qw1);

							if($qd1[0]=='-none-'){
								$qr1_1="SELECT pract_name from faculty where name='$row[sub6]' and pract_name!='-none-'";
								$qw1_1 = mysqli_query($conn,$qr1_1);
								$qd1_1= mysqli_fetch_row($qw1_1);
								echo $qd1_1[0];
							}
							if($qd1[0]!='-none-'){
								echo $qd1[0];
							}
							
						}
					echo "</td></tr>";
					$i++;
			}
}
			echo "</table>";  // } echo fetch_data();
		?>
	
			<!--form method="POST">
				<input type="submit" name="create_pdf" class="print" value="Create PDF">
			</form-->
			<form method="POST">
				<input type="submit" class="print" value="Create PDF">
			</form>
</body>
</html>