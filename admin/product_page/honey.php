<?php
    session_start();
    error_reporting(0);
    include "../../include/koneksi.php";
    include "../../include/current.php";

    date_default_timezone_set("Asia/Bangkok");
    if ($_POST[Update])
    {
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $qupdate = "    UPDATE `t_product` SET 
                        product = '".$_POST['title']."', 
                        story = '".$_POST['story']."', 
                        content1 = '".$_POST['content1']."', 
                        content2 = '".$_POST['content2']."', 
                        jenis_product1 = '".$_POST['point1']."', content_product1 = '".$_POST['point1_content']."',
                        jenis_product2 = '".$_POST['point2']."', content_product2 = '".$_POST['point2_content']."',
                        jenis_product3 = '".$_POST['point3']."', content_product3 = '".$_POST['point3_content']."',
                        jenis_product4 = '".$_POST['point4']."', content_product4 = '".$_POST['point4_content']."'
                        WHERE `t_product`.`id` = 10";
        $rupdate = mysqli_query ($konek, $qupdate);

        $_POST['Update'] = '';   
        $Done = '';

        echo "<script type='text/javascript'>
             alert('Success!')
             window.location='our_product/honey.php';
             </script>";
    }

    // Apabila user belum login
    if (empty($_SESSION['id']) AND empty($_SESSION['password']))
    {
        header('location:../../cpanel/index.php');  
    }
    // Apabila user sudah login dengan benar, maka terbentuklah session
    else
    {
?>

    <!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js" lang="en">
    <!--<![endif]-->

        <head>
            <?php include "title_and_css.php"?>
        </head>

        <body>

            <?php include "../left_menu.php"?>

            <div id="right-panel" class="right-panel">
                
                <?php include "top_menu.php"?>

                 <?php
                    $qrecord = "SELECT * FROM `t_product` WHERE id = '10'";
                    $rrecord = mysqli_query($konek, $qrecord);
                    $rwrecord = mysqli_fetch_array($rrecord);
                    {
                ?> 

                <div class="content mt-3">
                     <div class="animated fadeIn">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Update Product Page</strong>
                                    </div>

                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center"><?php echo $rwrecord['product'];?></h3>
                                        </div>

                                        <form name="action" method="post" action="">
                                            <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Name</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input name="title" type="text" class="form-control" value="<?php echo $rwrecord['product'];?>">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Story</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="story" id="textarea-input" rows="5" class="form-control"><?php echo $rwrecord['story'];?></textarea>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Top Content</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="content1" id="textarea-input" rows="5" class="form-control"><?php echo $rwrecord['content1'];?></textarea>
                                                    </div>
                                                </div>

                                                 <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bottom Content</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="content2" id="textarea-input" rows="5" class="form-control"><?php echo $rwrecord['content2'];?></textarea>
                                                    </div>
                                                </div>
                                            </div>

             <!--------------------------------------- LIST PRODUCT COFFEE ---------------------------------->

                                            <div class="custom-tab">

                                                <nav>
                                                    <div class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                            
                                                        <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#point1" role="tab" aria-controls="point1" aria-selected="true">
                                                            <?php
                                                                if (($rwrecord['jenis_product1'])!='') {
                                                                    echo $rwrecord['jenis_product1'];
                                                                } else {
                                                                    echo "No Data";
                                                                }
                                                                
                                                            ?>
                                                        </a>

                                                        <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#point2" role="tab" aria-controls="point2" aria-selected="false">
                                                             <?php
                                                                if (($rwrecord['jenis_product2'])!='') {
                                                                    echo $rwrecord['jenis_product2'];
                                                                } else {
                                                                    echo "No Data";
                                                                }
                                                                
                                                            ?>
                                                        </a>

                                                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#point3" role="tab" aria-controls="point3" aria-selected="false">
                                                             <?php
                                                                if (($rwrecord['jenis_product3'])!='') {
                                                                    echo $rwrecord['jenis_product3'];
                                                                } else {
                                                                    echo "No Data";
                                                                }
                                                                
                                                            ?>
                                                        </a>

                                                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#point4" role="tab" aria-controls="point4" aria-selected="false">
                                                             <?php
                                                                if (($rwrecord['jenis_product4'])!='') {
                                                                    echo $rwrecord['jenis_product4'];
                                                                } else {
                                                                    echo "No Data";
                                                                }
                                                                
                                                            ?>
                                                        </a>
                                                    </div>
                                                </nav>

                                                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="point1" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                                       <div class="form-group">
                                                            <label class="control-label mb-1">Jenis Product 1</label>
                                                            <input name="point1" type="text" class="form-control" value="<?php echo $rwrecord['jenis_product1'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label mb-1">Jenis Product 1 Content</label>
                                                            <textarea name="point1_content" id="content_area" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['content_product1'];?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="point2" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                                        <div class="form-group">
                                                            <label class="control-label mb-1">Jenis Product 2</label>
                                                            <input name="point2" type="text" class="form-control" value="<?php echo $rwrecord['jenis_product2'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label mb-1">Jenis Product 2 Content</label>
                                                            <textarea name="point2_content"id="content_area" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['content_product2'];?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="point3" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                       <div class="form-group">
                                                            <label class="control-label mb-1">Jenis Product 3</label>
                                                            <input name="point3" type="text" class="form-control" value="<?php echo $rwrecord['jenis_product3'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label mb-1">Jenis Product 3 Content</label>
                                                            <textarea name="point3_content" id="content_area" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['content_product3'];?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="point4" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                       <div class="form-group">
                                                            <label class="control-label mb-1">Jenis Products 4</label>
                                                            <input name="point4" type="text" class="form-control" value="<?php echo $rwrecord['jenis_product4'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label mb-1">Jenis Product 4 Content</label>
                                                            <textarea name="point4_content" type="text" rows="4" id="content_area" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['content_product4'];?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input name='Update' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div> <!-- .content -->

                <?php } ?>

            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            <?php include "java_script.php"?>

        </body>

    </html>

<?php
}
?>
