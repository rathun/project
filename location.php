<?php
//Getting location
$location=$_POST['location'];

//Map view
?>
<center>
	<h3>Your Location</h3>
	<br/>
	<!-- Display Map view using iframe -->
	<iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo $location; ?>&amp;output=embed" style="border:1px solid"></iframe>
</center>



<?php

?>