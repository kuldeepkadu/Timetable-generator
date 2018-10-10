<?php

	include("..\almost\DBConnection.php");
	$id=$_GET['id'];

	$query = "DELETE FROM register WHERE id='$id'";

	$data=mysqli_query($conn,$query);

		if($data)
		{
			header('location: studentRecord.php');

		}else {
			alert("ERROR
					Sorry, Delete process Failed!");
		}
?>