<?php
	session_start();

	include "include/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include "./vendors/mouse_click.php"?>	
		<?php include "./main page/website title/title.php"?>
		<?php include "./vendors/component.php"?>	
	</head>
	<body>
		<?php
			$qrecord = "SELECT * FROM `t_main_page`";
			$rrecord = mysqli_query($konek, $qrecord);
			$rwrecord = mysqli_fetch_array($rrecord);
			{
		?> 
		<header id="home">
			<?php include "./vendors/background_image.php"?>
			<?php include "./main menu/main_menu.php"?>
		</header>
		
		<?php include "./main page/our product/our_product.php"?>
		<?php include "./main page/product application/product_application.php"?>
		<?php include "./main page/our values/main_content.php"?>
		<?php include "./main page/why choose us/why_choose_us.php"?>
		
		
		
		<?php include "./main page/blog/blog.php"?>
		<?php include "./main page/get in touch/get_in_touch.php"?>
		<?php include "./main page/our_partner.php"?>
		<?php include "./main page/footer.php"?>

		<!-- Pre Loader : ./main/page/features.php -->
		
		<?php include "./vendors/java_script.php"?>
	</body>
</html>

<?php
}
?>