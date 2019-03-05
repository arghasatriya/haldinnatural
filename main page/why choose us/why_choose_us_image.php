<?php
    $qrecord = "SELECT * FROM `t_why_choose_us`";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

<!-- why choose us slider -->
	<div class="why_choose_us col-md-6">
		<div id="about-slider" class="owl-carousel owl-theme">
			<img class="img-responsive" <?php echo 'src="./img/why choose us/'.$rwrecord['file_name'].'"';?>" alt="">
			<img class="img-responsive" <?php echo 'src="./img/why choose us/'.$rwrecord['file_name2'].'"';?>" alt="">
			<img class="img-responsive" <?php echo 'src="./img/why choose us/'.$rwrecord['file_name3'].'"';?>" alt="">
		</div>
	</div>
	<!-- /why choose us slider -->

<?php
}
?>