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
	
	<div class="col-sm-7 p-4" id="map_view"><center>Loading.....</center></div>
	<div class="col-sm-5 p-4 bg-warning">
		<h3 class="text-info" >Contact us for uploading your rental house with the most trusted website</h4>
		</br>
		<h4 class="text-danger">MOBILE  :  8098656383</h3></br>
		<h3 class="text-danger">email   :  rathun.17it@kongu.edu</h3>
		<h3 class="text-success">24/7 service </h3>
	</div>
	</div>
	<script>
			 navigator.geolocation.getCurrentPosition(showPosition);
	  function showPosition(position) {
		//Storing latitude and longitude values
        var latitude=position.coords.latitude;
        var longitude=position.coords.longitude;
        var location=latitude+","+longitude;
		
        //Ajax using Jquery to get Map View
        $.ajax({
        	url:"https://hypertexttechies2020.000webhostapp.com/examly/location.php",
        	method:"POST",
        	data:{location:location},
        	success:function(result){
				//Response Result
				
        		$("#map_view").html(result);
        	}
        });


        	
      }
	</script>
	</div>

</div>



</body>
</html>