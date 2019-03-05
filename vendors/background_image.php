<?php
    $qrecord = "SELECT * FROM `t_main_page`";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

<?php include "./vendors/headline.php"?>
<!-- style="background-image: url('./img/Background_Home.jpg');" -->
<div class="bg-img" style="background-image: url('./img/background image/<?php echo $rwrecord['file_name'];?>');">
	<div class="overlay"></div>
</div>
<?php } ?>

	<!--
	<div id="bg-slider" class="bg-img owl-carousel owl-theme" >
		<img class="img-responsives" src="./img/slider-1.jpg" alt="">
		<img class="img-responsives" src="./img/slider-2.jpg" alt="">
		<img class="img-responsives" src="./img/slider-3.jpg" alt="">
		<img class="img-responsives" src="./img/slider-4.jpg" alt="">
		
	</div>-->
