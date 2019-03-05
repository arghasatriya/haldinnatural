<?php
    $qrecord = "SELECT * FROM `t_product` WHERE id = '7'";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
<!----------------------------------------------------- T E A  A R E A ---------------------------------------------------------------->
  
    <section  class="service-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="text-center wow fadeIn">
                        <h2 class="title"><?php echo $rwrecord['product'];?></h2>

                        <p class="text-center">
                           <?php echo $rwrecord['story'];?>
                        </p></br>

                        <p class="text-justify">
                            <?php echo $rwrecord['content1'];?>
                        </p></br>

                        <div class="why_choose_us col-md-12">
                            <div id="about-slider3" class="owl-carousel owl-theme">
                                <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider1'].'"';?>" alt="">
                                <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider2'].'"';?>" alt="">
                                <img class="img-responsive" <?php echo 'src="./img/product/menu product/'.$rwrecord['slider3'].'"';?>" alt="">
                            </div></br>
                        </div>

                        <p class="text-justify">
                           <?php echo $rwrecord['content2'];?>
                        </p></br>

                    </div>
                </div>   
            </div>
        </div>
    </section>

<?php } ?>



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