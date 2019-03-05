<?php
    $qrecord = "SELECT * FROM `t_reduce_carbon_footprint` WHERE id = '1'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
	<div class="bg-img-product" style="background-image:url('<?php echo( './img/our responsibility/reduce carboon footprint/'.$rwrecord['banner_photo'].''); ?>');">		
		<div class="overlay-product"></div>
	</div>

<?php } ?>