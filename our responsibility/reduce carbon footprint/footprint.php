
<section class="hosting_service_area bg-white">
    <div class="container">
        <div class="row hosting_service_inner">

            <?php
                $qrecord = "SELECT * FROM `t_reduce_carbon_footprint` WHERE id = '2'";
                $rrecord = mysqli_query($konek, $qrecord);
                $rwrecord = mysqli_fetch_array($rrecord);
                {
            ?> 

            <div class="col-md-6">
                <div class="h_service_left">
                    <img <?php echo 'src="./img/our responsibility/reduce carboon footprint/'.$rwrecord['photo'].'"';?>" alt="">
                    <img src="img/our responsibility/reduce carbon-2.png" alt="">
                </div>
            </div>
            <?php } ?>


            <?php
                $qrecord = "SELECT * FROM `t_reduce_carbon_footprint` WHERE id = '1'";
                $rrecord = mysqli_query($konek, $qrecord);
                $rwrecord = mysqli_fetch_array($rrecord);
                {
            ?> 

            <div class="col-md-6 mt-25">
                <div class="h_service_right">
                    <div class="server_title">
                        <h2 class="text_responsibility"><?php echo $rwrecord['title'];?></h2>
                        <p>
                            <?php echo $rwrecord['content'];?>
                        </p>
                    </div>
            <?php } ?>

            <?php
                $qrecord = "SELECT * FROM `t_reduce_carbon_footprint` WHERE id = '2'";
                $rrecord = mysqli_query($konek, $qrecord);
                $rwrecord = mysqli_fetch_array($rrecord);
                {
            ?> 

                    <div class="h_service_list">
                        <div class="media">
                            <div class="media-left">
                                <img <?php echo 'src="./img/our responsibility/reduce carboon footprint/'.$rwrecord['point1_icon'].'"';?>" alt="">
                            </div>
                            <div class="media-body">
                                <p class="text-justify">
                                    <?php echo $rwrecord['point1_content'];?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php } ?>

<!----------------------------------------------------- CERTIFICATION AREA ------------------------------------------------------------>
    <!--<section  class="service-area section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="text-center wow fadeIn">
                        <h2 class="title">Our Certificate</h2></br>

                        <div class="row service_s_inner mt-50">
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/fssc22000.png" alt="">
                                    <h4>FSSC 22000 ver 4.1</h4>
                                   
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/bpom.png" alt="">
                                    <h4>Hygiene Sanitation BPOM</h4>
                                  
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/eu_organic.png" alt="">
                                    <h4>Organic Certification (EU)</h4>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/usda_organic.png" alt="">
                                    <h4>Organic Certification (USDA)</h4>
                                    
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/has23000.png" alt="">
                                    <h4>HAS 23000 </h4>
                                    
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/iso9001_2015.png" alt="">
                                    <h4>ISO 9001 : 2015</h4>
                                    
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                    <img src="img/certification logo/iso14001.png" alt="">
                                    <h4>ISO 14001 : 2015</h4>
 
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                     <img src="img/certification logo/sedex.png" alt="">
                                    <h4>Sedex Membership</h4>
                                    
                                </div>
                            </div>
                             <div class="col-md-3 col-sm-4 col-xs-5">
                                <div class="ss_item">
                                     <img src="img/certification logo/fda.png" alt="">
                                    <h4>US-FDA Registration</h4>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>-->
