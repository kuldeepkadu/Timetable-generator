<?php

	include("..\almost\DBConnection.php");
	$id=$_GET['id'];

	$query = "DELETE FROM faculty WHERE id='$id'";

	$data=mysqli_query($conn,$query);

		if($data)
		{
			header('location: facultyRecord.php');

		}else {
			alert("<h1>ERROR</h1>
					Sorry, Delete process Failed!");
		}
?>