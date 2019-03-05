<?php
    $qrecord = "SELECT * FROM `t_product` WHERE id = '9'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?>

<!---------------------------------------- H O N E Y  A R E A ------------------------------------------------------->

    <section  class="service-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="text-center wow fadeIn">
                        <h2 class="title"><?php echo $rwrecord['product'];?></h2>
                        <p>
                            <?php echo $rwrecord['story'];?>
                        </p>

                        <p class="text-justify">
                            <?php echo $rwrecord['content1'];?> 
                        </p>
                    </div>
                </div>
            </div></br></br>

            <!-- Product Visual -->
            <div class="row flex-v-center">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <?php
                            if (($rwrecord['jenis_product1'])!='') 
                            {
                                echo "  <div class='single-service right wow fadeIn'>
                                                <div class='service-icon'>
                                                    <div class='i'>🥥</div>
                                                </div>
                                                <h4>".
                                                    $rwrecord['jenis_product1']."
                                                </h4>
                                                <p class='justify_text'>".
                                                   $rwrecord['content_product1']."
                                                </p>
                                            </div> ";
                            }

                            else
                            {
                                echo "   <div class='single-service right wow fadeIn'></div>";
                            }
                        ?>

                        <?php
                            if (($rwrecord['jenis_product2'])!='') 
                            {
                                echo "  <div class='single-service right wow fadeIn'>
                                            <div class='service-icon'>
                                                <div class='i'>🥥</div>
                                            </div>
                                            <h4>".
                                               $rwrecord['jenis_product2']."
                                            </h4>
                                            <p class='justify_text'>".
                                                $rwrecord['content_product2']."
                                            </p>
                                        </div>";
                            }

                            else
                            {
                                echo "  <div class='single-service right wow fadeIn'></div>"
                                    ;
                            }
                        ?>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 hidden-sm">
                    <div id="about-slider2" class="owl-carousel owl-theme">
                        <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider1'].'"';?>" alt="">
                        <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider2'].'"';?>" alt="">
                        <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider3'].'"';?>" alt="">
                    </div></br>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <?php
                            if (($rwrecord['jenis_product3'])!='') 
                            {
                                echo "  <div class='single-service left wow fadeIn'>
                                                <div class='service-icon'>
                                                    <div class='i'>🥥</div>
                                                </div>
                                                <h4>".
                                                    $rwrecord['jenis_product3']."
                                                </h4>
                                                <p class='justify_text'>".
                                                   $rwrecord['content_product3']."
                                                </p>
                                            </div> ";
                            }

                            else
                            {
                                echo "   <div class='single-service left wow fadeIn'></div>";
                            }
                        ?>

                        <?php
                            if (($rwrecord['jenis_product4'])!='') 
                            {
                                echo "  <div class='single-service left wow fadeIn'>
                                            <div class='service-icon'>
                                                <div class='i'>🥥</div>
                                            </div>
                                            <h4>".
                                               $rwrecord['jenis_product4']."
                                            </h4>
                                            <p class='justify_text'>".
                                                $rwrecord['content_product4']."
                                            </p>
                                        </div>";
                            }

                            else
                            {
                                echo "  <div class='single-service left wow fadeIn'></div>"
                                    ;
                            }
                        ?>
                </div>

                 <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                        <div class="text-center wow fadeIn">
                            </br>

                            <p class="text-justify">
                                 <?php echo $rwrecord['content2'];?>
                            </p>
                            </br></br>
                        </div>
                    </div>
            </div>
            <!-- End Product Visual -->
        </div></br>
    </section>

<?php
}
?>

<!------------------------------------- H O N E Y  P R O D U C T ---------------------------------------------------->
<?php
    $qrecord = "SELECT * FROM `t_product` WHERE id = '10'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?>

<section  class="choose_us_area service-area">
     <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="text-center wow fadeIn">
                         <?php
                                if (($rwrecord['product'])!='') 
                                {
                                    echo "  <h2 class='title'>".
                                                $rwrecord['product']."
                                            </h2>
                                        ";
                                }

                                else
                                {
                                    echo "";
                                }
                            ?>
                        <p>
                            <?php echo $rwrecord['story'];?>
                        </p>

                        <p class="text-justify">
                            <?php echo $rwrecord['content1'];?> 
                        </p>
                    </div>
                </div>
            </div></br></br>

            <!-- Product Visual -->
            <div class="row flex-v-center">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <?php
                            if (($rwrecord['jenis_product1'])!='') 
                            {
                                echo "  <div class='single-service right wow fadeIn'>
                                                <div class='service-icon'>
                                                    <div class='i'>🍯</div>
                                                </div>
                                                <h4>".
                                                    $rwrecord['jenis_product1']."
                                                </h4>
                                                <p class='justify_text'>".
                                                   $rwrecord['content_product1']."
                                                </p>
                                            </div> ";
                            }

                            else
                            {
                                echo "   <div class='single-service right wow fadeIn'></div>";
                            }
                        ?>

                        <?php
                            if (($rwrecord['jenis_product3'])!='') 
                            {
                                echo "  <div class='single-service right wow fadeIn'>
                                            <div class='service-icon'>
                                                <div class='i'>🍯</div>
                                            </div>
                                            <h4>".
                                               $rwrecord['jenis_product3']."
                                            </h4>
                                            <p class='justify_text'>".
                                                $rwrecord['content_product3']."
                                            </p>
                                        </div>";
                            }

                            else
                            {
                                echo "  <div class='single-service right wow fadeIn'></div>"
                                    ;
                            }
                        ?>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 hidden-sm">
                <div id="about-slider3" class="owl-carousel owl-theme">
                    <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider1'].'"';?>" alt="">
                    <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider2'].'"';?>" alt="">
                    <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider3'].'"';?>" alt="">
                </div></br>
            </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <?php
                            if (($rwrecord['jenis_product2'])!='') 
                            {
                                echo "  <div class='single-service left wow fadeIn'>
                                                <div class='service-icon'>
                                                    <div class='i'>🍯</div>
                                                </div>
                                                <h4>".
                                                    $rwrecord['jenis_product2']."
                                                </h4>
                                                <p class='justify_text'>".
                                                   $rwrecord['content_product2']."
                                                </p>
                                            </div> ";
                            }

                            else
                            {
                                echo "   <div class='single-service left wow fadeIn'></div>";
                            }
                        ?>

                        <?php
                            if (($rwrecord['jenis_product4'])!='') 
                            {
                                echo "  <div class='single-service left wow fadeIn'>
                                            <div class='service-icon'>
                                                <div class='i'>🍯</div>
                                            </div>
                                            <h4>".
                                               $rwrecord['jenis_product4']."
                                            </h4>
                                            <p class='justify_text'>".
                                                $rwrecord['content_product4']."
                                            </p>
                                        </div>";
                            }

                            else
                            {
                                echo "  <div class='single-service left wow fadeIn'></div>"
                                    ;
                            }
                        ?>
                </div>

                 <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                        <div class="text-center wow fadeIn">
                            </br>

                            <p class="text-justify">
                                 <?php echo $rwrecord['content2'];?>
                            </p>
                            </br></br>
                        </div>
                    </div>
            </div>
            <!-- End Product Visual -->
        </div></br>
</section>

<?php
}
?>