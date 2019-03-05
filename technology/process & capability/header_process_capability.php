<?php
    $qrecord = "SELECT * FROM `t_process_capabilities` WHERE id = '1'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
	<div class="bg-img-technology" style="background-image:url('<?php echo( './img/technology/process capabilites/'.$rwrecord['banner_photo'].''); ?>');">		
		<div class="overlay-technology"></div>
	</div>

<?php } ?>
