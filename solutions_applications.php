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
			<?php include "./technology/solutions & applications/title_solutions_applications.php"?>
			<?php include "./main menu/main_menu_technology.php"?>
			<?php include "./technology/solutions & applications/header_solutions_applications.php"?>
		</header>
		
		<?php include "./technology/solutions & applications/solutions_applications.php"?>
		<?php include "./main page/footer.php"?>
		<?php include "./main page/features.php"?>
		<?php include "./vendors/java_script.php"?>
	</body>
</html>