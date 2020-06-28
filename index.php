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
	<div class="container bg-primary">
	<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/4.jpg" width="1000px" height="400px"alt="houses">
    </div>
    <div class="carousel-item">
      <img src="image/5.jpg" width="1000px" height="400px" alt="houses">
    </div>
    <div class="carousel-item">
      <img src="image/6.jpg" width="1000px" height="400px" alt="houses">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

	</div>
  </div>
  <div class="container  search-container mt-2 ">
	<div class="row ">
	<div class="col-sm-3 bg-info">
	</div>
	<div class="col-sm-6 bg-success p-3">
	<center>
	<script type="text/javascript" language="javascript">
		function func()
		{
			var frm=document.App;
			var roll=frm.search.value;
			myObj={ "address":roll };
			/*for(var x in myObj)
			document.writeln(myObj[x]);*/
			var msg=JSON.stringify(myObj);
			//alert(msg);
			var con=new XMLHttpRequest();
			con.onreadystatechange=function()
			{
				if(this.status==200&&this.readyState==4)
				{
					document.getElementById("demo").innerHTML=con.responseText;
				}
			};
			con.open("POST","search.php?",true);
			con.setRequestHeader("content-type","application/x-www-form-urlencoded");
			con.send("msg="+msg);
			return false;
		}
	</script>
	
	
	
	
    <form name="App" method="POST">
	  
      <input type="text" placeholder="Search.." name="search" oninput="func()"  height="70">
	
	  
      
	  
    </form>
	
	</center>
	</div>
	<div class="col-sm-3 bg-info w-4">
	
	</div>
	</div>
  </div>
 
</div>
 
   <span id="demo"class="bg-light"></span>

</body>
</html>