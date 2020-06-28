<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
<div class="container-fluid bg-primary p-4">
	
		<h3 class="text-white"><center><b>House Rental Management System</b></center></h3>
	
	</div>
</div>



<div class="container-fluid bg-warning">

<center><h3 class="bg-primary">AVAILABLE DATAS AS OF NOW</h3></center>
<div class="table-responsive">
<table class="table table-bordered text-center bg-light table-stripped">

<thead>
	<th>ID</th>
	<th>NAME</th>
	<th>STATUS</th>
	<th>RENT</th>
	<th>EMAIL</th>
	<th>CONTACT</th>
	<th>ROOM</th>
	<th>BALCONY</th>
	<th>DESCRIPTION</th>
	<th>ADDRESS</th>
	<th>OPERATION</th>
</thead>
<tbody>
<?php

	include 'dbcon.php';
	$select="select id,name,status,rent,email,contact,room,balcony,description,address from details";
	$query=mysqli_query($con,$select);
	while($result=mysqli_fetch_assoc($query))
	{
	?>	
	<tr>
		<td><?php echo $result['id'];?> </td>
		<td><?php echo $result['name'];?> </td>
		<td><?php echo $result['status'];?> </td>
		<td><?php echo $result['rent'];?> </td>
		<td><?php echo $result['email'];?> </td>
		<td><?php echo $result['contact'];?> </td>
		<td><?php echo $result['room'];?> </td>
		<td><?php echo $result['balcony'];?> </td>
		<td><?php echo $result['description'];?> </td>
		<td><?php echo $result['address'];?> </td>
		
		<td><a href="delete.php?ids=<?php echo $result['id'];?>" class="btn btn-info bg-success">
          DELETE
        </a> </td>
			
			</tr>
		<?php
	}
	?>
</tbody>
</table>
</div>
</body>


</html>