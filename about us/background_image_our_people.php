<?php include "./about us/headline_people.php"?>

<?php
    $qrecord = "SELECT * FROM `t_about_us` WHERE id = 2";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
	<div class="bg-img-technology" style="background-image:url('<?php echo( './img/our people/'.$rwrecord['header_photo'].''); ?>');">		
		<div class="overlay-technology"></div>
	</div>

<?php }	?>