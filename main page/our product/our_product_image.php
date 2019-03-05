<!-- Product 1 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '1'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

	<div class="col-md-4 col-xs-6 work">
		<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
		<!-- <img class="img-responsive" src="./admin/images/7597a08b0d4bbd5173ba84817e703896.png" alt=""> -->
		<div class="overlay"></div>
		<div class="work-content">
			<h3>Tea & Coffee</h3>
			<div class="work-link">
				<a href="tea&coffee" target="_blank"><i class="fa fa-plus"></i></a>
				<a class="lightbox" <?php echo 'href="./img/product/'.$rwrecord['file_name'].'"';?>><i class="fa fa-search"></i></a>
			</div>
		</div>
	</div>

<?php 
} 
?>

<!-- / End Product 1 -->

<!-- Product 2 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '2'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

	<div class="col-md-4 col-xs-6 work">
		<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
		<div class="overlay"></div>
		<div class="work-content">
			<h3>Functional Ingredients</h3>
			<div class="work-link">
				<a href="functional_ingredients" target="_blank"><i class="fa fa-plus"></i></a>
				<a class="lightbox" <?php echo 'href="./img/product/'.$rwrecord['file_name'].'"';?>><i class="fa fa-search"></i></a>
			</div>
		</div>
	</div>
	
<?php 
} 
?>
<!-- /End Product 2 -->

<!-- Product 3 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '4'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

	<div class="col-md-4 col-xs-6 work">
		<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
		<div class="overlay"></div>
		<div class="work-content">
			<h3>Cocoa & Vanilla</h3>
			<div class="work-link">
				<a href="cocoa&vanilla" target="_blank"><i class="fa fa-plus"></i></a>
				<a class="lightbox" <?php echo 'href="./img/product/'.$rwrecord['file_name'].'"';?>><i class="fa fa-search"></i></a>
			</div>
		</div>
	</div>

<?php
}
?>
<!-- /Product 3 -->

<!-- Product 4 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '3'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

	<div class="col-md-4 col-xs-6 work">
		<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
		<div class="overlay"></div>
		<div class="work-content">
			<h3>Essential Oil</h3>
			<div class="work-link">
				<a href="essential_oil" target="_blank"><i class="fa fa-plus"></i></a>
				<a class="lightbox" <?php echo 'href="./img/product/'.$rwrecord['file_name'].'"';?>><i class="fa fa-search"></i></a>
			</div>
		</div>
	</div>

<?php 
} 
?>
<!-- /End Product 4 -->

<!-- Product 5 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '5'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

	<div class="col-md-4 col-xs-6 work">
		<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
		<div class="overlay"></div>
		<div class="work-content">
			<h3>Honey & Coconut</h3>
			<div class="work-link">
				<a href="honey&coconut" target="_blank"><i class="fa fa-plus"></i></a>
				<a class="lightbox"<?php echo 'href="./img/product/'.$rwrecord['file_name'].'"';?>><i class="fa fa-search"></i></a>
			</div>
		</div>
	</div>

<?php 
} 
?>
<!-- /Product -->

<!-- Product 6 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '6'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

	<div class="col-md-4 col-xs-6 work">
		<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
		<div class="overlay"></div>
		<div class="work-content">
			<h3>Cosmetic & Care Ingredients</h3>
			<div class="work-link">
				<a href="cosmetic&care" target="_blank"><i class="fa fa-plus"></i></a>
				<a class="lightbox" <?php echo 'href="./img/product/'.$rwrecord['file_name'].'"';?>><i class="fa fa-search"></i></a>
			</div>
		</div>
	</div>

<?php 
} 
?>
<!-- /End Product 6 -->

<!-- Product 7-->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '7'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

	<div class="col-md-4 col-xs-6 work">
		<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
		<div class="overlay"></div>
		<div class="work-content">
			<h3>Fruit & Vegetable</h3>
			<div class="work-link">
				<a href="fruit&vegetable" target="_blank"><i class="fa fa-plus"></i></a>
				<a class="lightbox"<?php echo 'href="./img/product/'.$rwrecord['file_name'].'"';?>><i class="fa fa-search"></i></a>
			</div>
		</div>
	</div>
<?php 
} 
?>
<!-- /End Product 7 -->

<!-- Product 8 -->
<?php
    $qrecord = "SELECT * FROM `t_our_product` WHERE id = '8'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

	<div class="col-md-4 col-xs-6 work">
		<img class="img-responsive" <?php echo 'src="./img/product/'.$rwrecord['file_name'].'"';?> alt="">
		<div class="overlay"></div>
		<div class="work-content">
			<h3>Seasoning Ingredients</h3>
			<div class="work-link">
				<a href="seasoning_ingredients" target="_blank"><i class="fa fa-plus"></i></a>
				<a class="lightbox" <?php echo 'href="./img/product/'.$rwrecord['file_name'].'"';?>><i class="fa fa-search"></i></a>
			</div>
		</div>
	</div>
<?php 
} 
?>
<!-- /End Product 8 -->
