
	<!-- TOATAL COUNT -->
	<div class="container">
		<div class="row">
			<div class="col-sm-3 border border-info text-info" id="confirm"></div>
			<div class="col-sm-3 border border-warning text-warning" id="active"></div>
			<div class="col-sm-3 border border-success text-success" id="recover"></div>
			<div class="col-sm-3 border border-danger text-danger" id="death"></div>
		</div>
	</div>
	<br/>
	<!-- STATE WISE live UPDATE -->
	<div class="text-center text-danger"><h4>COVID-19 STATE WISE UPDATE</h4></div>
	<br/>
	<div class="table table-responsive">
	<table class="table table-responsive table-bordered text-center bg-light">
	
		<!-- TABLE HEADING -->
			<tr >
				<th>LastUpdatedTime</th>
				<th>State </th>
				<th class="text-info">Confirmed </th>
				<th class="text-warning">Active </th>
				<th class="text-success">Recovered </th>
				<th class="text-danger">Death </th>
	        </tr>
			
		
			<?php
			//Initialising varibles
			$confirm=0;
			$active=0;
			$recover=0;
			$death=0;
			//Getting Covid19 details using API
			$data=file_get_contents('https://api.covid19india.org/data.json');
			$corona=json_decode($data,true);
			
			
			$statescount = count($corona['statewise']);
			$i=1;
			while($i < $statescount)
			{
				?>
				<!-- Printing the data -->
		<tr>
			<td><?php  echo $corona['statewise'][$i]['lastupdatedtime']?> </td>
			<td><?php  echo $corona['statewise'][$i]['state']?> </td>
			<td class="bg-info"><?php  echo $corona['statewise'][$i]['confirmed']?> </td>
			<td class="bg-warning"><?php  echo $corona['statewise'][$i]['active'] ?> </td>
			<td class="bg-success"><?php  echo $corona['statewise'][$i]['recovered']?> </td>
			<td class="bg-danger"><?php  echo $corona['statewise'][$i]['deaths']?> </td>
		</tr>
			<?php
			//Calculating total 
			$confirm+=$corona['statewise'][$i]['confirmed'];
			$active+=$corona['statewise'][$i]['active'];
			$recover+=$corona['statewise'][$i]['recovered'];
			$death+=$corona['statewise'][$i]['deaths'];
			$i++;
			}
			?>
		
	
	</table>
	</div>
</div>
<script>
	//Printing values in div
	document.getElementById('confirm').innerHTML="<h1>Confirmed</h1><h3><?php echo $confirm; ?></h3>";
	document.getElementById('active').innerHTML="<h1>Active</h1><h3><?php echo $active; ?></h3>";
	document.getElementById('recover').innerHTML="<h1>Recovered</h1><h3><?php echo $recover; ?></h3>";
	document.getElementById('death').innerHTML="<h1>Death</h1><h3><?php echo $death; ?></h3>";
</script>
	
