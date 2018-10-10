<?php  include("..\almost\DBConnection.php"); 
if (isset($_POST['sem'])) {
	 $sem=$_POST['sem'];
 

session_start();

$_SESSION["sem"]=$_POST['sem'];


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
		border: 2px solid #f3f3f3;
		background-color: lightyellow;
		text-decoration: none;
		margin-top: 2%;
		font-size: 20px;
		padding: 0px;
		width: 100%;	
		text-align: left;
	}
	th {
		border-bottom: 8px solid #588c7e;
		color: gray;
	}
	td {
		border-bottom: 6px solid #f2f2f2;
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

	<form action="generate.php" method="post">
    <div align="center" style="margin-top: 30px">
        <select name="sem" class="list-group-item" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">
            <option selected disabled>Select Sem</option>
            <?php
            $result = mysqli_query($conn,"SELECT * FROM sem");		
            while($row = mysqli_fetch_array($result)) {  
						  echo "<option value='".$row['sem_id']."'>".$row['sem_id']."</option>";
              			}  
            ?>

        </select><br><br>
        <button type="submit" id="viewteacher" class="btn" style="margin-top: 5px">MAKE TIMETABLE
        </button>
</form>
<form action="generatephp.php" method="POST">
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
            <tr><td style="text-align:center; padding: 12px;">MONDAY</td>
            	<td>
            <select name="t11"  id="t1" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

						 <?php 
             

							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");			  
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
							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");			  
							echo "<option>- -</option>";		
								while($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['name']."'>".$row['name']."</option>";
               		     			   

               		     			}  ?>
                   </select>

                   </td>

                   <td>
						 <?php             		     			   
		           		     echo "Recess";  ?>

                   </td>

                   <td>
            <select name="t13"  id="t3" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

						 <?php 

						 include("..\almost\DBConnection.php");
							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");			  
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
							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");			  
							echo "<option>- -</option>";		
								while($row = mysqli_fetch_array($result)) {  


                				       echo "<option value='".$row['name']."'>".$row['name']."</option>";
               		     			   

               		     			}  ?>
                   </select>

                   </td>

                   <td>
            <?php             		     			   
		           		     echo "Short-Recess";  ?>

                   </td>

                   <td>
            <select name="t15"  id="t5" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

						 <?php 

						 include("..\almost\DBConnection.php");
							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");			  	
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
							$result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");			  	
							echo "<option>- -</option>";	
								while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }   ?>
                   </select>

                   </td>



                   <tr><td style="text-align:center; padding: 12px;">TUESDAY</td>
            	<td>
            <select name="t21"  id="t1" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <select name="t22"  id="t2" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
             <?php                             
                       echo "Recess";  ?>

                   </td>

                   <td>
            <select name="t23"  id="t3" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                  </select>

                   </td>

                   <td>
            <select name="t24"  id="t4" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <?php                              
                       echo "Short-Recess";  ?>

                   </td>

                   <td>
            <select name="t25"  id="t5" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");         
              echo "<option>- -</option>";  
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <select name="t26"  id="t6" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 
             
             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");         
              echo "<option>- -</option>"; 
               while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }   ?>
                   </select>

                   </td>



<tr><td style="text-align:center; padding: 12px;">WEDNESDAY</td>
            	<td>
            <select name="t31"  id="t1" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <select name="t32"  id="t2" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
             <?php                             
                       echo "Recess";  ?>

                   </td>

                   <td>
            <select name="t33"  id="t3" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                  </select>

                   </td>

                   <td>
            <select name="t34"  id="t4" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <?php                              
                       echo "Short-Recess";  ?>

                   </td>

                   <td>
            <select name="t35"  id="t5" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");         
              echo "<option>- -</option>";  
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <select name="t36"  id="t6" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 
             
             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");         
              echo "<option>--</option>"; 
               while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }   ?>
                   </select>

                   </td>

<tr><td style="text-align:center; padding: 12px;">THURSDAY</td>
            	<td>
            <select name="t41"  id="t1" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <select name="t42"  id="t2" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
             <?php                             
                       echo "Recess";  ?>

                   </td>

                   <td>
            <select name="t43"  id="t3" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                  </select>

                   </td>

                   <td>
            <select name="t44"  id="t4" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <?php                              
                       echo "Short-Recess";  ?>

                   </td>

                   <td>
            <select name="t45"  id="t5" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");         
              echo "<option>- -</option>";  
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <select name="t46"  id="t6" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 
             
             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");         
              echo "<option>- -</option>"; 
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }   ?>
                   </select>

                   </td>



<tr><td style="text-align:center; padding: 12px;">FRIDAY</td>
            	<td>
            <select name="t51"  id="t1" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <select name="t52"  id="t2" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
             <?php                             
                       echo "Recess";  ?>

                   </td>

                   <td>
            <select name="t53"  id="t3" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                  </select>

                   </td>

                   <td>
            <select name="t54"  id="t4" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <?php                              
                       echo "Short-Recess";  ?>

                   </td>

                   <td>
            <select name="t55"  id="t5" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");         
              echo "<option>- -</option>";  
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <select name="t56"  id="t6" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 
             
             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");         
              echo "<option>- -</option>"; 
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }   ?>
                   </select>

                   </td>


<tr><td style="text-align:center; padding: 12px;">SATURDAY</td>
            	<td>
            <select name="t61"  id="t1" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <select name="t62"  id="t2" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
             <?php                             
                       echo "Recess";  ?>

                   </td>

                   <td>
            <select name="t63"  id="t3" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                  </select>

                   </td>

                   <td>
            <select name="t64"  id="t4" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");       
              echo "<option>- -</option>";    
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <?php                              
                       echo "Short-Recess";  ?>

                   </td>

                   <td>
            <select name="t65"  id="t5" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 

             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");         
              echo "<option>- -</option>";  
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }  ?>
                   </select>

                   </td>

                   <td>
            <select name="t66"  id="t6" style="width: 130px; height: 25px; padding: 2px; font-size: 17px; font-weight: : bold;">

             <?php 
             
             include("..\almost\DBConnection.php");
              $result = mysqli_query($conn,"SELECT name FROM faculty  Where sem='$sem'");         
              echo "<option>- -</option>"; 
                while($row = mysqli_fetch_array($result)) {  


                               echo "<option value='".$row['name']."'>".$row['name']."</option>";
                               

                            }   ?>
                   </select>

                   </td>


               </tr>
	</table>


	<button class="print" id="make" name="make">SAVE</button>
  <button class="print" style="margin-left: 10px;">PRINT</button></form>

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
