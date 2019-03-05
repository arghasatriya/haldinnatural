<!-- Product 1 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '1'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

<!-- product picture -->
	<div class="col-sm-3">
		<div class="prod">
			<div class="team-img">
				<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
				<div class="overlay">

				</div>
			</div>
			<div class="team-content">
				<h5>Tea & Coffee</h5>
				<a href="tea&coffee" class="primary-btn text-uppercase">View Details</a>
			</div>
		</div>
	</div>
	<!-- product picture -->
<?php 
} 
?>

<!-- Product 2 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '2'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
	<!-- product picture -->
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
				<h5>Functional Ingredients</h5>
				<a href="functional_ingredients" class="primary-btn text-uppercase">View Details</a>
			</div>
		</div>
	</div>
	<!-- product picture -->
<?php
}
?>

<!-- Product 2 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '3'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
	<!-- product picture -->
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
				<h5>Essential Oil</h5>
				<a href="essential_oil" class="primary-btn text-uppercase">View Details</a>
			</div>
		</div>
	</div>
	<!-- product picture -->
<?php
}
?>

<!-- Product 2 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '4'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
	<!-- product picture -->
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
				<h5>Cocoa & Vanilla</h5>
				<a href="cocoa&vanilla" class="primary-btn text-uppercase">View Details</a>
			</div>
		</div>
	</div>
	<!-- product picture -->

<?php } ?>