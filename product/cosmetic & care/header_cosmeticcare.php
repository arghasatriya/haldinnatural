<?php
    $qrecord = "SELECT * FROM `t_product` WHERE id = '7'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

	<div class="bg-img-product" style="background-image:url('<?php echo( './img/product/Banner/'.$rwrecord['banner_photo'].''); ?>');">		
		<div class="overlay-product"></div>
	</div>

<?php } ?>