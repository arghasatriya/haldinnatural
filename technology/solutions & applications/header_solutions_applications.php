<?php
    $qrecord = "SELECT * FROM `t_solutions_applications` WHERE id = '1'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
	<div class="bg-img-technology" style="background-image:url('<?php echo( './img/technology/solutions applications/'.$rwrecord['banner_photo'].''); ?>');">		
		<div class="overlay-technology"></div>
	</div>

<?php } ?>
