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
	
	<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
		<header id="home2">
			<?php include "./product/main product/background_image_product.php"?>
			<?php include ".//main menu/main_menu_product.php"?>
		</header>
		
		<?php include "./product/main product/main_product.php"?>
		<?php include "./main page/footer.php"?>
		<?php include "./main page/features.php"?>
		<?php include "./vendors/java_script.php"?>
	</body>
</html>