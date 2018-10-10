<?php  include("..\almost\DBConnection.php"); 
/*if (isset($_POST['sem'])) {
	 $sem=$_POST['sem'];
	}*/


	 if(isset($_POST['make']))
		{
			
			 
			$id=$_GET['timeid'];
			$sem='3';
			$t1=$_POST['t11'];
			$t2=$_POST['t12'];
			$t3=$_POST['t13'];
			$t4=$_POST['t14'];
			$t5=$_POST['t15'];
			$t6=$_POST['t16'];
			

			$sql1 = "UPDATE timetable SET sem='$sem' ,sub1='$t1' ,sub2='$t2' ,sub3='$t3' ,sub4='$t4' ,sub5='$t5' ,sub6='$t6' WHERE timeid= '$id'  ";
			
			
			$data1=mysqli_query($conn,$sql1);


			header('location:update.php');
			}
			
 			

?>

<!DOCTYPE html>
<html>
<head>
	<title>TIMETABLE</title>

	<style type="text/css">
	div button a {
		font-size: 24px;
		text-decoration: none;
		background: cover;
		float:right;
		background-color: red;
		color: darkblue;
	}

		.print {
			background-color: #4CAF50;
			border:none;
			border-radius: 4px;
			color: white;
			margin: 1.4em auto;
			font-size: 20px;
			color: white;
			padding: 12px 52px;
			display: inline-block;
			cursor: pointer;
			float: center;
			text-decoration: none;
		}

		
		table {
		border: 2px solid #588c7e;
		background-color: lightyellow;
		text-decoration: none;
		margin-top: 2%;
		font-size: 20px;
		padding: 0px;
		width: 100%;	
		text-align: center;
	}
	th {
		border-bottom: 8px solid #588c7e;
		border-right: 8px solid #588c7e;
		color: gray;
	}
	td {
		border-bottom: 6px solid #f2f2f2;
		border-right: .7px solid #588c7e;
	}

	.dev {
		font-size: 35px;
		background-color: lightblue;
		padding: 20px;
		
	}
	.dev tag {
		margin-left: 570px;
	}
	</style>
</head>
<body>
	<div class="dev">
		<a href="frontgenerate.php" style="font-family: timesnewroman;" class="btn1"><img src="img/back.png" style="height: 30px; width: 65px; float: left;"></a>		 
		<tag>TIMETABLE</tag>
	</div>

	
<form method="POST">
	<table>
		
			<tr>
                <td style="text-align:center; padding: 12px;">WEEKDAYS</td>
                <td style="text-align:center">9:10--10:10</td>
                <td style="text-align:center">10:10--11:10</td>
                <td style="text-align:center">11:10--11:40</td>
                <td style="text-align:center">11:40--12:40</td>
                <td style="text-align:center">12:40--1:40</td>
                <td style="text-align:center">1:40--1:50</td>
                <td style="text-align:center">1:50--2:50</td>
                <td style="text-align:center">2:50--3:50</td>
            </tr>
            <tr><td style="text-align:center; padding: 12px;"><?php  echo $_GET['dayname']; ?></td>
            	<td>
            <select name="t11"  id="t1" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

						 <?php 

							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='3'");			  
							echo "<option>$_GET[sub1]</option>";	
							echo "<option>- -</option>";	
								while($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['name']."'>".$row['name']."</option>";
               		     			   

               		     			}  ?>
                   </select>


                    <input type="hidden" id="hidden_t1" name="hidden_t1"  value="<?PHP echo trim($_POST['name']); ?>" />
                   </td>

                   <td>
            <select name="t12"  id="t2" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

						 <?php 

						 include("..\almost\DBConnection.php");
							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='3'");
							echo "<option>$_GET[sub2]</option>";	
							echo "<option>- -</option>";		
								while($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['name']."'>".$row['name']."</option>";
               		     			   

               		     			}  ?>
                   </select>

                   </td>

                   <td>
						 <?php             		     			   
		           		     echo "R";  ?>

                   </td>

                   <td>
            <select name="t13"  id="t3" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

						 <?php 

						 include("..\almost\DBConnection.php");
							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='3'");
							echo "<option>$_GET[sub3]</option>";	
							echo "<option>- -</option>";		
								while($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['name']."'>".$row['name']."</option>";
               		     			   

               		     			}  ?>
               		</select>

                   </td>

                   <td>
            <select name="t14"  id="t4" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

						 <?php 

						 include("..\almost\DBConnection.php");
							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='3'");
							echo "<option>$_GET[sub4]</option>";	
							echo "<option>- -</option>";		
								while($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['name']."'>".$row['name']."</option>";
               		     			   

               		     			}  ?>
                   </select>

                   </td>

                   <td>
            <?php             		     			   
		           		     echo "S-R";  ?>

                   </td>

                   <td>
            <select name="t15"  id="t5" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

						 <?php 

						 include("..\almost\DBConnection.php");
							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='3'");	

							echo "<option>$_GET[sub5]</option>";	
							echo "<option>- -</option>";	
								while($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['name']."'>".$row['name']."</option>";
               		     			   

               		     			}  ?>
                   </select>

                   </td>

                   <td>
            <select name="t16"  id="t6" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

						 <?php 
						 
						 include("..\almost\DBConnection.php");
							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='3'");			  	
							echo "<option>$_GET[sub6]</option>";	
							echo "<option>- -</option>";	
								 while($row = mysqli_fetch_array($result)){  


                				       echo "<option value='".$row['name']."'>".$row['name']."</option>";
               		     			   

               		     			}  ?>
                   </select>

                   </td>



                   

               </tr>
	</table>


	<button class="print" id="make" name="make" style="float: right;margin-right: 20px;" onclick="return check();" >SAVE</button>


</body>
</html>

<script type="text/javascript">
			
			function check()
			{
				alert("Successfully Updated!");
			}
</script>


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
