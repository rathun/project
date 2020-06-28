<html>
<head>
<title>Exam Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap Files and Jquery Files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container bg-primary p-4">
	
		<h3 class="text-white"><center><b>House Rental Management System</b></center></h3>
	
	</div>
	<div class="container bg-info mt-2">
		<nav class="navbar navbar-expand-lg ">
			
			
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			<li class="nav-item active">
		 <button data_toggle="collapse"class="bg-warning ml-2"><a class="nav-link text-light" href="index.php"><b>Home </b></a></button>
		</li>
			<li class="nav-item">
			<button data_toggle="collapse"class="bg-warning ml-2"><a class="nav-link text-light" href="aboutus.html"><b>About us </b></a></button>
		</li>
		<li class="nav-item">
			<button data_toggle="collapse"class="bg-warning ml-2"><a class="nav-link text-light" href="select1.php"><b>All properties</b></a></button>
		</li>
		<li class="nav-item">
			<button data_toggle="collapse"class="bg-warning ml-2"><a class="nav-link text-light" href="login.php"><b>login </b></a></button>
		</li>
		<li class="nav-item">
			<button data_toggle="collapse"class="bg-warning ml-2"><a class="nav-link text-light" href="contact.php"><b>contact us </b></a></button>
		</li>
		</ul>
		</div>
		</nav>
	</div>
</body>


<?php
include("dbcon.php");
$select = "SELECT name,status,rent,room,address FROM details";
$query=mysqli_query($con,$select);
$count=mysqli_num_rows($query)>0;
if($count)
{
	
	while($row=mysqli_fetch_array($query))
	{
		
		?>
		<div class="container mt-3 ">
		<div class="col-sm-4 mx-auto "style="float:left">
			<div class="card">
				<div class="card-body">
				<table class="table table-stripped">
				
				<img src="image/3.jpg"class="card-img-top"height="200px"width="100px">
				<iframe src="https://www.google.com/maps/d/embed?mid=1mgM12z7th8A2S2omANAftFKLIbHQ_kaE" width="300" height="250"></iframe>
				<tbody>
					<tr>
						<th>Name</th>
						<td><p class="card-title"><?php echo $row['name'];?></p></td>
					</tr>
					<tr>
						<th>status</th>
						<td><p class="card-title"><?php echo $row['status'];?></p></td>
					</tr>
					<tr>
						<th>rent</th>
						<td><p class="card-title"><?php echo $row['rent'];?></p></td>
					</tr>
					<tr>
						<th>room</th>
						<td><p class="card-title"><?php echo $row['room'];?></p></td><tr>
					</tr>
					<tr>
						<th>address</th>
						<td><p class="card-title"><?php echo $row['address'];?></p></td>
					</tr>
				</tbody>
				
				</table
			</div>
			</div>
			</div>
			</div>
		<?php
		
	}
	
}
else
{
	echo"no datas found";
}
	
?>