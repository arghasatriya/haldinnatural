<?php
    $qrecord = "SELECT * FROM `t_about_us`";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 
<!--================River Video Area =================-->
<section class="river_video_area img-responsive">

    <div class="container">
        <div class="river_video_inner ">
            <a class="popup-youtube" <?php echo 'href="'.$rwrecord['aboutus_video'].'"';?>" data-lity>
            	<img class="img-responsive" src="./img/icon/play-btn.png">
            </a>
        </div>
    </div>
</section>
<!--================End River Video Area =================-->
<?php } ?>