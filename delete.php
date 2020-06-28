<?php

include'dbcon.php';
$id=$_GET['ids'];

$q="DELETE FROM details WHERE id='$id'";
$query = mysqli_query($con,$q);
if($query)
	{
		echo"deleted";

	}
			header('location:selecttt.php');
	
	
	


?>	




