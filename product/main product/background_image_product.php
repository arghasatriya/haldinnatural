<?php
    $qrecord = "SELECT * FROM `t_main_product` WHERE id = '1'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

	<div class="bg-img-product" style="background-image:url('<?php echo( './img/product/Banner/'.$rwrecord['file_name'].''); ?>');">		
		<div class="overlay-product"></div>
	</div>

<?php } ?>