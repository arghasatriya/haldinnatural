<?php
    $qrecord = "SELECT * FROM `t_product` WHERE id = '5'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

<!----------------------------------------------------- C O C O A  A R E A ---------------------------------------------------------------->
  
    <section  class="service-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="text-center wow fadeIn">
                        <h2 class="title"><?php echo $rwrecord['product'];?></h2>
                        <p>
                            <i>
                                <?php echo $rwrecord['story'];?>
                            </i>
                        </p>

                        <p class="text-justify">
                            <?php echo $rwrecord['content1'];?>
                        </p>

                        <p class="text-justify">
                            <?php echo $rwrecord['content2'];?>
                        </p>

                    </div>
                </div>
            </div></br></br></br>
            <div class="row flex-v-center">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                     <?php
                        if (($rwrecord['jenis_product1'])!='') 
                        {
                            echo "  <div class='single-service right wow fadeIn'>
                                            <div class='service-icon'>
                                                <div class='i'>🍫</div>
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
                                            <div class='i'>🍫</div>
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
                    <div id="about-slider3" class="owl-carousel owl-theme">
                        <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider1'].'"';?>" alt="">
                        <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider2'].'"';?>" alt="">
                        <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider3'].'"';?>" alt="">
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <?php
                        if (($rwrecord['jenis_product3'])!='') 
                        {
                            echo "  <div class='single-service left wow fadeIn'>
                                            <div class='service-icon'>
                                                <div class='i'>🍫</div>
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
                                            <div class='i'>🍫</div>
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
            </div>
        </div>
    </section>

<?php
}
?>

<!------------------------------------ V A N I L L A  A R E A ------------------------------------------------->
<?php
    $qrecord = "SELECT * FROM `t_product` WHERE id = '6'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

    <section class="choose_us_area service-area bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="text-center wow fadeIn">
                        <h2 class="title"><?php echo $rwrecord['product'];?></h2>
                        <p>
                            <i>
                                <?php echo $rwrecord['story'];?>
                            </i>
                        </p>

                        <p class="text-justify">
                            <?php echo $rwrecord['content1'];?>
                        </p>
                    </div>
                </div>
            </div></br></br></br>
            <div class="row flex-v-center">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                     <?php
                        if (($rwrecord['jenis_product1'])!='') 
                        {
                            echo "  <div class='single-service right wow fadeIn'>
                                            <div class='service-icon'>
                                                <div class='i'>💮</div>
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
                                            <div class='i'>💮</div>
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
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <?php
                        if (($rwrecord['jenis_product3'])!='') 
                        {
                            echo "  <div class='single-service left wow fadeIn'>
                                            <div class='service-icon'>
                                                <div class='i'>💮</div>
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
                                            <div class='i'>💮</div>
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
        </div>
    </section>

<?php
}
?>

                        <!--
                        <div class="blog-content">
                            
                            <h3> Tea</h3>
                            <p>
                                Made to perfection using the best raw materials, the right process, and the best technology, 
                                Haldin’s Tea Extracts provides the essential top note and most inÂ­tense tea flavor, resembling 
                                that to a freshly brewed tea. From green tea to black tea, from liquid extracts to spray dried extracts, 
                                our products are natural, yet conÂ­sistent in quality, and naturally safe. Available in form of Essence, 
                                Concentrate, Extract, and Spray Dried.
                            </p></br>
                            
                            <h3> Tea Essence</h3>
                            <p>
                                The tea essence, which provides the essential top note and most intense natural flavor of tea, is made to meet 
                                market needs for a strong aroma, which enriches, improves, and differentiates customers products. 
                                The tea essence provides the top note characteristics for many industries including; liquid RTD products, 
                                bevÂ­erage dispensing products, food flavoring, and even for fragrances
                            </p>
                            
                            <h3> Tea Concentrate & Extract</h3>
                            <p>
                                Haldin’s natural tea concentrate and extract contain both the top note essence of the natural product 
                                and the body notes of the tea itself; some of which could be bitterness, sweetness, or acidity. 
                                Essentially, these natural concentrates provide the entire flavor profile of tea.
                            </p></br>
                            
                            <h3> Tea Spray Dried</h3>
                            <p>
                                Tea Spray dried extract offers a number of advantages to the user. It is easy and cost effective to transport, 
                                and inherently stable which means it can be stored with no loss of quality or efficacy. It can also be used in dry mixes.
                            </p>
                            <p>
                                Haldin spray dries its tea extracts to produce tea powder extracts for use mainly in tea beverage related products. From single 
                                to flavored tea drinks, Haldin is caÂ­pable of fulfilling demand for many types of tea ingredient products.
                            </p></br>
                            
                            <h3> Coffee</h3>
                            <p>
                                Produced from Indonesian origin Coffee Robusta & Arabica beans, Haldin’s Coffee Extract is made for one soul purpose; 
                                resembling the sensory characterisÂ­tics of a freshly brewed coffee. Our technology allows the process to capture the 
                                entire aroma profile of roasted coffee beans, whilst extracting the body to its optiÂ­mal yield, making it a distinctive 
                                coffee extract compared to others. Available in Coffee Essence, Coffee Concentrate, and Coffee Extract.
                            </p></br>
                            
                            <h3> Coffee Essence</h3>
                            <p>
                                Coffee Essence offers a distinctive coffee aroma, used extensively to enhance the coffee related products distinctive 
                                aromas and tastes. It is natural, simple, and cost effective for the use in coffee beverage formulations which requires 
                                a more “real” coffee characteristics in the end product.
                            </p></br>
                            
                            <h3> Coffee Concentrate & Coffee Extract</h3>
                            <p>
                                Haldin’s natural coffee concentrate and extract contain both the top note essence of the natural product and the body notes 
                                of the coffee, these natural concenÂ­trates provide the entire flavor profile of coffee. 
                                These products are mainly used as building blocks ingredients for coffee ready to drinks, candies, and bakery fillÂ­ings & toppings. 
                                Additionally, Coffee Concentrates & Extracts serves as the main component for bag-in-box coffee dispensing machine, 
                                where it offers a more rich taste compared to conventional powder instant coffee.
                            </p></br>
                        </div>

                    </div>-->