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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
<div class="container bg-primary p-4">
	
		<h3 class="text-white"><center><b>House Rental Management System</b></center></h3>
	
	</div>
	<div class="container-fluid">
	
	<div class="row">
	
	<div class="col-sm-6">
	<center><h3 class="text-warning" >Add property</h3></center>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST"enctype="multipart/form-data">
									<div class="row p-2">
						<div class="col-sm-6">
						<div class="form-group">
						<label for="user"><b>property name</b></label>
							<input type="text" class="form-control" placeholder="Enter your property name" name="name" value="" required/>
						
						</div>
						</div>
						<div class="col-sm-6">
						<div class="form-group">
						<label for="user"><b>status</b></label>
							<input type="text" class="form-control" placeholder="status" name="status" value="" required/>
						
						</div>
						</div>
						</div>
												<div class="row p-2">
						<div class="col-sm-6">
						<div class="form-group">
						<label for="user"><b>rent</b></label>
							<input type="text" class="form-control" placeholder="rent" name="rent" value="" required/>
						
						</div>
						</div>
						<div class="col-sm-6">
						<div class="form-group">
						<label for="user"><b>email</b></label>
							<input type="text" class="form-control" placeholder="Enter your email" name="email" value="" required/>
						
						</div>
						</div>
						</div>
												<div class="row p-2">
						<div class="col-sm-6">
						<div class="form-group">
						<label for="user"><b>property contact</b></label>
							<input type="number" class="form-control" placeholder="Enter your contact" name="contact" value="" required/>
						
						</div>
						</div>
						<div class="col-sm-6">
						<div class="form-group">
						<label for="user"><b>Room</b></label>
							<input type="number" class="form-control" placeholder="no of rooms" name="room" value="" required/>
						
						</div>
						</div>
						</div>
												<div class="row p-2">
						<div class="col-sm-6">
						<div class="form-group">
						<label for="user"><b>Balcony</b></label>
							<input type="number" class="form-control" placeholder="no of balcony" name="balc" value="" required/>
						
						</div>
						</div>
						<div class="col-sm-6">
						<div class="form-group">
						<label for="user"><b>description</b></label>
							<input type="text" class="form-control" placeholder="description" name="bath" value="" required/>
						
						</div>
						</div>
						</div>
												<div class="row p-2">
						<div class="col-sm-6">
						<div class="form-group">
						<label for="user"><b>Address</b></label>
							<input type="text" class="form-control" placeholder="Enter your address" name="address" value="" required/>
						
						</div>
						</div>
						<div class="col-sm-6">
						<div class="form-group">
						<label for="user"><b>image</b></label>
							<input type="file" id="img" name="img" accept="image/*">
						</div>
						</div>
						</div>
						<div class="row">
								<div class="col-sm-9">
								</div>
								<div class="col-sm-3 p-2 ">
									<input type="submit" class="form-control bg-success text-light" name="submit" value="register"/>
								</div>
								
							</div>
												
						
		</form>
	
	
	</div>
	<div class="col-sm-6">
		<div class="container">
		<center><h3 class="text-warning" >Advertisement</h3></center>
			<div class="row">
			
			<div class="col-sm-6">
				<img src="image/1.jpg" width="260px"height="200px">
			</div>
			<div class="col-sm-6">
			<img src="image/2.jpg" width="260px"height="200px">
			</div>
			
			</div>
		
		
		</div>
		<div class="container">
		
				<div class="row">
			<div class="col-sm-6">
			<img src="image/3.jpg" width="270px"height="150px">
			</div>
			<div class="col-sm-6">
			<img src="image/4.jpg" width="270px"height="150px">
			</div>
			
			</div>
			
		
		</div>
		<div class="container pt-5">
			<h4 class="text-danger"><b>A house is made of brick and mortar but home is made by the people who live there</b></h4>
		</div>
	
	
	</div>
	
    
	
	
	</div>
	</div>

</div>

</body>
</html>
<?php

include 'dbcon.php';
if(isset($_POST['submit']))
{
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$status=mysqli_real_escape_string($con,$_POST['status']);
	$rent=mysqli_real_escape_string($con,$_POST['rent']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$contact=mysqli_real_escape_string($con,$_POST['contact']);
	$room=mysqli_real_escape_string($con,$_POST['room']);
	$balc=mysqli_real_escape_string($con,$_POST['balc']);
	$bath=mysqli_real_escape_string($con,$_POST['bath']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
    $imgname=mysqli_real_escape_string($_FILES["img"]["name"]);
	$imgdata=mysqli_real_escape_string(file_get_contents($_FILES["img"]["tmp_name"]));
	$imgtype=mysqli_real_escape_string($_FILES["img"]["type"]);
	if(substr($imgtype,0,5)=="img")
	{
		mysql_query("INSERT INTO detail(name,status,rent,email,contact,room,balcony,description,address,idi,idname,image) VALUES('$name','$status','$rent','$email','$contact','$room','$balc','$bath','$address','','$imgname','$imgdata')") ; 
		echo"inserted";
	}
	else{
		echo"only image are allowed";
	}
	
	
	
	
}

?>	









