<?php
	session_start();

	include "include/koneksi.php";
	include "include/current.php";

	 date_default_timezone_set("Asia/Bangkok");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<?php include "./main page/website title/title.php"?>
		<?php include "./vendors/component.php"?>
		
	</head>
	
	<body>
		<header>
			<?php include "./main menu/main_menu_blog.php"?>
			<?php include "./blog/header_product_blog.php"?>
		</header>
		
		<!-- Blog -->
	    <div id="blog" class="section md-padding">

	        <!-- Container -->
	        <div class="container">

	            <!-- Row -->
	            <div class="row">

	                <!-- Main -->
	                <main id="main" class="col-md-9">
	                	<?php
	                		$id=$_GET['id'];
							$qrecord = "SELECT * FROM `t_blog_record` where id='$id'";
							$rrecord = mysqli_query($konek, $qrecord);
							$rwrecord = mysqli_fetch_array($rrecord);
							{
						?> 
	                    <div class="blog">
	                        <div class="blog-img">
	                            <h2><?php echo $rwrecord['judul_blog'];?></h2>

	                            <ul class="blog-meta">
	                                <li><i class="fa fa-user"></i><?php echo $rwrecord['username'];?></li>
	                                <li><i class="fa fa-clock-o"></i><?php echo $rwrecord['uploaded_on'];?></li>
	                            </ul>
	                            <div id="captioned-gallery">
	                                <figure class="slider">
	                                    <figure>
	                                    	<img class="img-responsive" <?php echo 'src="./img/blog/'.$rwrecord['file_name'].'"';?>" alt="">
	                                        <figcaption><?php echo $rwrecord['headline'];?></figcaption>
	                                    </figure>
	                                </figure>
	                            </div>
	                           
	                        </div>

	                        <div class="blog-content">
	                            <p>
	                            	<?php echo $rwrecord['content'];?>
	                            </p>

	                            <!-- blog tags -->
	                            <div class="blog-tags">
	                                <h5>Tags :</h5>
	                                <a href="#"><i class="fa fa-tag"></i>Coffe</a>
	                                <a href="#"><i class="fa fa-tag"></i>Liquid</a>
	                                <a href="#"><i class="fa fa-tag"></i>Extract</a>
	                                <a href="#"><i class="fa fa-tag"></i>Marketing</a>
	                                <a href="#"><i class="fa fa-tag"></i>Technology</a>
	                                <a href="#"><i class="fa fa-tag"></i>Product</a>
	                            </div>
	                            <!-- blog tags -->

	                        </div>
	                    </div>

	                    <?php
	                	}
	                	?>
	                </main>
	                <!-- /Main -->


	                <!-- Aside -->
	                <aside id="aside" class="col-md-3">

	                   <?php include "./blog/blog_category.php"?>

	                   <?php include "./blog/sidebar_blog.php"?>

	                  
	                </aside>
	                <!-- /Aside -->

	            </div>
	            <!-- /Row -->

	        </div>
	        <!-- /Container -->

	    </div>
	    <!-- /Blog -->
		<?php include "./main page/footer.php"?>
		<?php include "./main page/features.php"?>
		<?php include "./vendors/java_script.php"?>
	</body>
</html>

<?php

?>