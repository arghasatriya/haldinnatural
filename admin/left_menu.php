 <?php
    $query = "SELECT * FROM t_page_admin";  
    $result = mysqli_query($konek, $query);  
    $row = mysqli_fetch_array($result);
?>
<!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="main"><img src="images/logo_haldin.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="main"><img src="images/logo-haldin2x.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <!---------------------------------------- ADMIN MENU 1 ----------------------------------------------->

                    <h3 class="menu-title">Home Page</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-desktop"></i>Main Page</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-heart"></i><a href="welcome.php">Welcome Content</a></li>

                            <h3 class="menu-title" style="font-size: 12px">Our Products</h3>
                            <li><i class="fa fa-star"></i><a href="our_product_teacoffee.php" style="font-style: italic; font-size: 12px">Tea & Coffee</a></li>
                            <li><i class="fa fa-star"></i><a href="our_product_functional_ingredients.php" style="font-style: italic ; font-size: 12px">Functional Ingredients</a></li>
                            <li><i class="fa fa-star"></i><a href="our_product_essential_oil.php" style="font-style: italic; font-size: 12px">Essential Oil</a></li>
                            <li><i class="fa fa-star"></i><a href="our_product_cocoa_vanilla.php" style="font-style: italic; font-size: 12px">Cocoa & Vanilla</a></li>
                            <li><i class="fa fa-star"></i><a href="our_product_honey_coconut.php" style="font-style: italic; font-size: 12px">Honey & Coconut</a></li>
                            <li><i class="fa fa-star"></i><a href="our_product_fruit_vegetable.php" style="font-style: italic; font-size: 12px">Fruit & Vegetable</a></li>
                            <li><i class="fa fa-star"></i><a href="our_product_seasoning_ingredients.php" style="font-style: italic; font-size: 12px">Seasoning Ingredients</a></li>
                            <li><i class="fa fa-star"></i><a href="our_product_cosmetic_care.php" style="font-style: italic; font-size: 12px">Cosmetic & Care</a></li>
                            <h3 class="menu-title"></h3><br/>

                            <li><i class="fa fa-heart"></i><a href="product_application.php">Product Application</a></li>
                            <li><i class="fa fa-heart"></i><a href="why_choose_us.php">Why Choose Us</a></li>
                            <li><i class="fa fa-heart"></i><a href="our_product.php">Our Product</a></li>
                        </ul>
                    </li>
                    
                    <!---------------------------------------- ADMIN MENU 2 ----------------------------------------------->

                    <h3 class="menu-title">Products Page</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-leaf"></i>Haldin Products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-coffee"></i><a href="tea.php" style="font-size: 12.5px">Tea</a></li>
                            <li><i class="menu-icon fa fa-coffee"></i><a href="coffee.php" style="font-size: 12.5px">Coffee</a></li>
                            <li><i class="menu-icon fa fa-coffee"></i><a href="functional_ingredients.php" style="font-size: 12.5px">Functional Ingredients</a></li>
                            <li><i class="menu-icon fa fa-coffee"></i><a href="essential_oil.php" style="font-size: 12.5px">Essential Oil</a></li>
                            <li><i class="menu-icon fa fa-coffee"></i><a href="cocoa.php" style="font-size: 12.5px">Cocoa</a></li>
                            <li><i class="menu-icon fa fa-coffee"></i><a href="vanilla.php" style="font-size: 12.5px">Vanilla</a></li>
                            <li><i class="menu-icon fa fa-coffee"></i><a href="honey.php" style="font-size: 12.5px">Honey</a></li>
                            <li><i class="menu-icon fa fa-coffee"></i><a href="coconut.php" style="font-size: 12.5px">Coconut </a></li>
                            <li><i class="menu-icon fa fa-coffee"></i><a href="fruit_vegetable.php" style="font-size: 12.5px">Fruit & Vegetable </a></li>
                            <li><i class="menu-icon fa fa-coffee"></i><a href="seasoning_ingredients.php" style="font-size: 12.5px">Seasoning Ingredients </a></li>
                            <li><i class="menu-icon fa fa-coffee"></i><a href="cosmetic_care.php"style="font-size: 12.5px">Cosmetic & Care </a></li>
                        </ul>
                    </li>

                    <!---------------------------------------- ADMIN MENU 3 ----------------------------------------------->
                   
                    <h3 class="menu-title">Company </h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-building"></i>About Us & Our People</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-heart-o"></i><a href="about_us.php" style="font-size: 12.5px">About Us</a></li>
                            <li><i class="fa fa-heart-o"></i><a href="our_peoples.php" style="font-size: 12.5px">Our People</a></li>
                        </ul>
                    </li>

                    <!---------------------------------------- ADMIN MENU 4 ----------------------------------------------->

                    <h3 class="menu-title">Technology </h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cloud"></i>Our Technology</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-asterisk"></i><a href="process_capabilities.php" style="font-size: 12.5px">Process & Capabilities</a></li>
                            <li><i class="fa fa-asterisk"></i><a href="solutions_application.php" style="font-size: 12.5px">Solutions & Applications</a></li>
                        </ul>
                    </li>

                    <!---------------------------------------- ADMIN MENU 5 ----------------------------------------------->

                    <h3 class="menu-title">Responsibility </h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-road"></i>Our Responsibility</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-unlock-alt"></i><a href="safety_quality.php" style="font-size: 12px">Safety & Quality</a></li>
                            <li><i class="fa fa-unlock-alt"></i><a href="sustainability.php" style="font-size: 12px">Sustainability</a></li>
                            <li><i class="fa fa-unlock-alt"></i><a href="reduce_carbon_footprint.php" style="font-size: 12px">Reduce Carbon Footprint</a></li>
                        </ul>
                    </li>

                  <!---------------------------------------- ADMIN MENU 6 ----------------------------------------------->

                    <h3 class="menu-title">Blog </h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-newspaper-o"></i>Our Blog</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-paint-brush"></i><a href="add_blog.php" style="font-size: 12.5px">Add New Blog</a></li>
                            <li><i class="fa fa-paint-brush"></i><a href="view_blog.php" style="font-size: 12.5px">Blog Data</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->