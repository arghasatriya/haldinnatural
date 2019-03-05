<?php
	session_start();

	include "include/koneksi.php";
	include "include/current.php";

	date_default_timezone_set("Asia/Bangkok");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include "./vendors/mouse_click.php"?>	
		<?php include "./main page/website title/title.php"?>
		<?php include "./vendors/component.php"?>
	</head>

	<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
		<header id="home3">
			<?php include "./blog/title_blog.php"?>
			<?php include "./main menu/main_menu_blog.php"?>
			<?php include "./blog/header_blog.php"?>
		</header>
		
		<?php include "./blog/blog.php"?>
		<?php include "./main page/footer.php"?>
		<?php include "./main page/features.php"?>
		<?php include "./vendors/java_script.php"?>
	</body>
</html>