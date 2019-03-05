<!-- Product 2 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '5'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> <!-- team -->
	<div class="col-sm-3">
		<div class="prod">
			<div class="team-img">
				<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
				<div class="overlay">

				</div>
			</div>
			<div class="team-content">
				<h5>Honey & Coconut</h5>
				<a href="honey&coconut" class="primary-btn text-uppercase">View Details</a>
			</div>
		</div>
	</div>
	<!-- /team -->
<?php
}
?>

<!-- Product 2 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '6'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
	<!-- team -->
	<div class="col-sm-3">
		<div class="prod">
			<div class="team-img">
				<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
				<div class="overlay">
					<div class="team-social">

					</div>
				</div>
			</div>
			<div class="team-content">
				<h5>Fruit & Vegetable</h5>
				<a href="fruit&vegetable" class="primary-btn text-uppercase">View Details</a>
			</div>
		</div>
	</div>
	<!-- /team -->
<?php
}
?>

<!-- Product 2 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '7'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
	<!-- team -->
	<div class="col-sm-3">
		<div class="prod">
			<div class="team-img">
				<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
				<div class="overlay">
					<div class="team-social">

					</div>
				</div>
			</div>
			<div class="team-content">
				<h5>Seasoning Ingredients</h5>
				<a href="seasoning_ingredients" class="primary-btn text-uppercase">View Details</a>
			</div>
		</div>
	</div>
	<!-- /team -->
<?php
}
?>

<!-- Product 2 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '8'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
	<!-- team -->
	<div class="col-sm-3">
		<div class="prod">
			<div class="team-img">
				<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
				<div class="overlay">

				</div>
			</div>
			<div class="team-content">
				<h5>Cosmetic & Care</h5>
				<a href="cosmetic&care" class="primary-btn text-uppercase">View Details</a>
			</div>
		</div>
	</div>
	<!-- /team -->
<?php
}
?>