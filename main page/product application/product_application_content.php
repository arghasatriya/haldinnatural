<?php
	$qrecord = "SELECT * FROM `t_product_application`";
	$rrecord = mysqli_query($konek, $qrecord);
	$rwrecord = mysqli_fetch_array($rrecord);
	{
?> 

	<!-- application 2 -->
	<div class="col-md-4 col-sm-6">
		<div class="service">
			<i class="fa">&#x1F943;</i>
			<h3><?php echo $rwrecord['product1'];?></h3>
			<p><?php echo $rwrecord['product1_content'];?></p>
		</div>
	</div>
	<!-- /application 2 -->

	<!-- application 3 -->
	<div class="col-md-4 col-sm-6">
		<div class="service">
			<i class="fa">&#x1F95b;</i>
			<h3><?php echo $rwrecord['product2'];?></h3>
			<p><?php echo $rwrecord['product2_content'];?></p>
		</div>
	</div>
	<!-- application 3 -->

	<!-- application 6 -->
	<div class="col-md-4 col-sm-6">
		<div class="service">
			<i class="fa">&#x1F36c;</i>
			<h3><?php echo $rwrecord['product3'];?></h3>
			<p><?php echo $rwrecord['product3_content'];?></p>
		</div>
	</div>
	<!-- /application 6 -->

	<!-- application 4 -->
	<div class="col-md-4 col-sm-6">
		<div class="service">
			<i class="fa">&#x1F35e;</i>
			<h3><?php echo $rwrecord['product4'];?></h3>
			<p><?php echo $rwrecord['product4_content'];?></p>
		</div>
	</div>
	<!-- /application 4 -->

	<!-- application 5 -->
	<div class="col-md-4 col-sm-6">
		<div class="service">
			<i class="fa">&#x1F484;</i>
			<h3><?php echo $rwrecord['product5'];?></h3>
			<p><?php echo $rwrecord['product5_content'];?></p>
		</div>
	</div>
	<!-- /application 5 -->

	<!-- /application 1 -->
	<div class="col-md-4 col-sm-6">
		<div class="service">
			<i class="fa">&#x1F373;</i>
			<h3><?php echo $rwrecord['product6'];?></h3>
			<p><?php echo $rwrecord['product6_content'];?></p>
		</div>
	</div>
	<!-- /application 1-->

<?php
}
?>