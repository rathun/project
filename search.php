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



</body> 
</html>



 <?php
  $x=json_decode($_POST['msg'],false);
  include('dbcon.php');
  $address=$x->address;
  $sql="SELECT id,name,status,rent,email,contact,room,balcony,description,address FROM details WHERE address LIKE '%$address%'";
  if ($result=mysqli_query($con, $sql))
	{		echo"<div class='table-responsive table-stripped bg-light '>";
			echo "<table class='table table-stripped  table-responsive table-bordered'>";
			echo"<thead>";
			echo "<tr class='bg-'><th height='30'>".'ID'."</th><th> ".'NAME'."</th><th> ".'STATUS'."</th><th>".'RENT'."</th><th>".'EMAIL'."</th><th>".'CONTACT'."</th><th>".'ROOM'."</th><th>".'BALCONY'."</th><th>".'DESCRIPTION'."</th><th>".'ADDRESS'."</th></tr>";
			echo"</thead>";
			echo"<tbody>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr><td height='30'>".$row['id']."</td><td> ".$row['name']."</td><td> ".$row['status']."</td><td> ".$row['rent']."</td><td> ".$row['email']."</td><td> ".$row['contact']."</td><td> ".$row['room']."</td><td> ".$row['balcony']."</td><td> ".$row['description']."</td><td> ".$row['address']."</td>    </tr> ";
			echo"<br>";   
		}
		echo"</tbody>";
		echo "</table>";
		echo"</div>";
   echo " record selected successfully";
    }
	
else
    {
    echo mysqli_error($con) ;
    }
	
	?>
  
  
  
  
  
  
  
  
  
  
  