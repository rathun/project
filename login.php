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
<div class="container-fluid">
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
	<div class="container">
	<div class="row">
		<div class="col-sm-6 bg-secondary pl-5 pt-5">
		<center><h3 class="text-warning" >Login Page</h3></center>
		<form action=""method="post">
  <div class="form-group">
    <label for="user">User Name</label>
    <input type="text" class="form-control" name="user_name" style="width:250px" id="user">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control"name="password"  style="width:250px"id="pwd">
  </div>
  
  <button type="submit" name="submit"value="submit"class="btn btn-default bg-primary text-white">Submit</button>
</form>
</div>
<div class="col-sm-6 bg-warning">
<center><h3 class="text-success" >Advertisement</h3></center>
		<div class="container p-2">
			<div class="row">
			<div class="col-sm-6">
				<img src="image/1.jpg" width="270px"height="200px">
			</div>
			<div class="col-sm-6">
			<img src="image/2.jpg" width="270px"height="200px">
			</div>
			
			</div>
			</div>
		<div class="container p-2">
			<div class="row">
			<div class="col-sm-6">
			<img src="image/3.jpg" width="270px"height="150px">
			</div>
			<div class="col-sm-6">
			<img src="image/4.jpg" width="270px"height="150px">
			</div>
			
			</div>
		</div>
</div>
</div>
	</div>

</div>
</body>
</html>
<?php
session_start();
$message="";
if(count($_POST)>0) {
 include 'dbcon.php';
$result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:add.php");
}
?>