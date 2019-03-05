<?php
    $qrecord = "SELECT * FROM `t_sustainability` WHERE id = '1'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
	<div class="bg-img-product" style="background-image:url('<?php echo( './img/our responsibility/sustainability/'.$rwrecord['banner_photo'].''); ?>');">		
		<div class="overlay-product"></div>
	</div>

<?php } ?>