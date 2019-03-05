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
		<header id="home2">
			<?php include "./main menu/main_menu_responsibility.php"?>
			<?php include "./our responsibility/empowering/header_empowering.php"?>
			<?php include "./our responsibility/empowering/title_empowering.php"?>
		</header>

		<?php include "./our responsibility/empowering/empowering.php"?>
		<?php include "./main page/footer.php"?>
		<?php include "./main page/features.php"?>
		<?php include "./vendors/java_script.php"?>
	</body>
	
	
</html>
