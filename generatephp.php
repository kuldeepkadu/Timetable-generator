<?php
	
	include("..\almost\DBConnection.php"); 

		if(isset($_POST['make']))
		{
			session_start();
			$sem=$_SESSION['sem1'];
			$t1=$_POST['t11'];
			$t2=$_POST['t12'];
			$t3=$_POST['t13'];
			$t4=$_POST['t14'];
			$t5=$_POST['t15'];
			$t6=$_POST['t16'];
			echo $t1;
			echo $t2;echo $t3;echo $t4;echo $t5;echo $t6;

			$sql1 = "INSERT INTO timetable (sem,sub1,sub2,sub3,sub4,sub5,sub6) VALUES ('$sem','$t1','$t2','$t3','$t4','$t5','$t6')";
			$data1=mysqli_query($conn,$sql1);
			
			$sem='3';
			$t21=$_POST['t21'];
			$t22=$_POST['t22'];
			$t23=$_POST['t23'];
			$t24=$_POST['t24'];
			$t25=$_POST['t25'];
			$t26=$_POST['t26'];
			

			$sql2 = "INSERT INTO timetable (sem,sub1,sub2,sub3,sub4,sub5,sub6) VALUES ('$sem','$t21','$t22','$t23','$t24','$t25','$t26')";
			$data2=mysqli_query($conn,$sql2);

			echo "string";
			$sem='3';
			$t31=$_POST['t31'];
			$t32=$_POST['t32'];
			$t33=$_POST['t33'];
			$t34=$_POST['t34'];
			$t35=$_POST['t35'];
			$t36=$_POST['t36'];
			

			$sql3 = "INSERT INTO timetable (sem,sub1,sub2,sub3,sub4,sub5,sub6) VALUES ('$sem','$t31','$t32','$t33','$t34','$t35','$t36')";
			
			$data3=mysqli_query($conn,$sql3);

			echo "string";
			$sem='3';
			$t41=$_POST['t41'];
			$t42=$_POST['t42'];
			$t43=$_POST['t43'];
			$t44=$_POST['t44'];
			$t45=$_POST['t45'];
			$t46=$_POST['t46'];
			

			$sql4 = "INSERT INTO timetable (sem,sub1,sub2,sub3,sub4,sub5,sub6) VALUES ('$sem','$t41','$t42','$t43','$t44','$t45','$t46')";
			$data4=mysqli_query($conn,$sql4);



			$sem='3';
			$t51=$_POST['t51'];
			$t52=$_POST['t52'];
			$t53=$_POST['t53'];
			$t54=$_POST['t54'];
			$t55=$_POST['t55'];
			$t56=$_POST['t56'];
			

			$sql5 = "INSERT INTO timetable (sem,sub1,sub2,sub3,sub4,sub5,sub6) VALUES ('$sem','$t51','$t52','$t53','$t54','$t55','$t56')";
			$data5=mysqli_query($conn,$sql5);


			$sem='3';
			$t61=$_POST['t61'];
			$t62=$_POST['t62'];
			$t63=$_POST['t63'];
			$t64=$_POST['t64'];
			$t65=$_POST['t65'];
			$t66=$_POST['t66'];

			$sql6 = "INSERT INTO timetable (sem,sub1,sub2,sub3,sub4,sub5,sub6) VALUES ('$sem','$t61','$t62','$t63','$t64','$t65','$t66')";
			$data6=mysqli_query($conn,$sql6);
			
		}else
		{
			header('location: view.php');
		}



?>