
<!-- Category -->
<div class="widget">
    <h3 class="title">Category</h3>
    <div class="widget-category">
        <?php
            $qrecord = "SELECT COUNT(category_product) as total FROM t_blog_record WHERE category_product = 'Tea & Coffee'";
            $rrecord = mysqli_query($konek, $qrecord);
            $rwrecord = mysqli_fetch_assoc($rrecord);
            {
        ?> 
        <a href="blog.php">Tea & Coffee<span>(<?php echo $rwrecord['total'];?>)</span></a>
        <?php } ?>

        <?php
            $qrecord = "SELECT COUNT(category_product) as total FROM t_blog_record WHERE category_product = 'Functional Ingredients'";
            $rrecord = mysqli_query($konek, $qrecord);
            $rwrecord = mysqli_fetch_assoc($rrecord);
            {
        ?>
        <a href="#">Functional Ingredients<span>(<?php echo $rwrecord['total'];?>)</span></a>
        <?php } ?>

        <?php
            $qrecord = "SELECT COUNT(category_product) as total FROM t_blog_record WHERE category_product = 'Essential Oil'";
            $rrecord = mysqli_query($konek, $qrecord);
            $rwrecord = mysqli_fetch_assoc($rrecord);
            {
        ?>
        <a href="#">Essential Oil<span>(<?php echo $rwrecord['total'];?>)</span></a>
        <?php } ?>

        <?php
            $qrecord = "SELECT COUNT(category_product) as total FROM t_blog_record WHERE category_product = 'Cocoa Vanilla'";
            $rrecord = mysqli_query($konek, $qrecord);
            $rwrecord = mysqli_fetch_assoc($rrecord);
            {
        ?>
        <a href="#">Cocoa & Vanilla<span>(<?php echo $rwrecord['total'];?>)</span></a>
        <?php } ?>

        <?php
            $qrecord = "SELECT COUNT(category_product) as total FROM t_blog_record WHERE category_product = 'Honey & Coconut'";
            $rrecord = mysqli_query($konek, $qrecord);
            $rwrecord = mysqli_fetch_assoc($rrecord);
            {
        ?>
        <a href="blog.php">Honey & Coconut<span>(<?php echo $rwrecord['total'];?>)</span></a>
        <?php } ?>

        <?php
            $qrecord = "SELECT COUNT(category_product) as total FROM t_blog_record WHERE category_product = 'Fruit & Vegetable'";
            $rrecord = mysqli_query($konek, $qrecord);
            $rwrecord = mysqli_fetch_assoc($rrecord);
            {
        ?>
        <a href="blog.php">Fruit & Vegetable<span>(<?php echo $rwrecord['total'];?>)</span></a>
        <?php } ?>

        <?php
            $qrecord = "SELECT COUNT(category_product) as total FROM t_blog_record WHERE category_product = 'Seasoning Ingredients'";
            $rrecord = mysqli_query($konek, $qrecord);
            $rwrecord = mysqli_fetch_assoc($rrecord);
            {
        ?>
        <a href="#">Seasoning Ingredients<span>(<?php echo $rwrecord['total'];?>)</span></a>
        <?php } ?>

        <?php
            $qrecord = "SELECT COUNT(category_product) as total FROM t_blog_record WHERE category_product = 'Cosmetic & Care'";
            $rrecord = mysqli_query($konek, $qrecord);
            $rwrecord = mysqli_fetch_assoc($rrecord);
            {
        ?>
        <a href="#">Cosmetic & Care<span>(<?php echo $rwrecord['total'];?>)</span></a>
        <?php } ?>
        
    </div>
</div>
<!-- /Category -->

