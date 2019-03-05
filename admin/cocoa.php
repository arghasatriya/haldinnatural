<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");

    $statusMsg = '';

    // File upload path
    $targetDir = "../img/product/Banner/";
    $targetDir2 = "../img/product/menu product/";
    $targetDir3 = "../img/product/menu product/";
    $targetDir4 = "../img/product/menu product/";

    $fileName = basename($_FILES["banner_photo"]["name"]);
    $fileName2 = basename($_FILES["slider1"]["name"]);
    $fileName3 = basename($_FILES["slider2"]["name"]);
    $fileName4 = basename($_FILES["slider3"]["name"]);

    $ukuran = $_FILES['banner_photo']['size'];
    $ukuran2 = $_FILES['slider1']['size'];
    $ukuran3 = $_FILES['slider2']['size'];
    $ukuran4 = $_FILES['slider3']['size'];

    $targetFilePath = $targetDir . $fileName;
    $targetFilePath2 = $targetDir2 . $fileName2;
    $targetFilePath3 = $targetDir3 . $fileName3;
    $targetFilePath4 = $targetDir4 . $fileName4;

    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
    $fileType3 = pathinfo($targetFilePath3,PATHINFO_EXTENSION);
    $fileType4 = pathinfo($targetFilePath4,PATHINFO_EXTENSION);

    if ($_POST[Update])
    {
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $qupdate = "    UPDATE `t_product` SET 
                        product = '".$_POST['title']."', 
                        story = '".$_POST['story']."', 
                        content1 = '".$_POST['content1']."', 
                        jenis_product1 = '".$_POST['point1']."', content_product1 = '".$_POST['point1_content']."',
                        jenis_product2 = '".$_POST['point2']."', content_product2 = '".$_POST['point2_content']."',
                        jenis_product3 = '".$_POST['point3']."', content_product3 = '".$_POST['point3_content']."',
                        jenis_product4 = '".$_POST['point4']."', content_product4 = '".$_POST['point4_content']."'
                        WHERE `t_product`.`id` = 5";
        $rupdate = mysqli_query ($konek, $qupdate);

        $_POST['Update'] = '';   
        $Done = '';

        echo "<script type='text/javascript'>
             alert('Success!')
             window.location='cocoa.php';
             </script>";
    }

if(isset($_POST["Update2"]) && !empty($_FILES["banner_photo"]["name"]))
    {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes))
        {
            if($ukuran < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["banner_photo"]["tmp_name"], $targetFilePath);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_product SET banner_photo = ('$fileName') WHERE `t_product`.`id` = 5");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='cocoa.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='cocoa.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='cocoa.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='cocoa.php';
                         </script>";
        }

        }

    else
    {

    }

    if(isset($_POST["Update3"]) && !empty($_FILES["slider1"]["name"]))
    {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType2, $allowTypes))
        {
            if($ukuran < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["slider1"]["tmp_name"], $targetFilePath2);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_product SET slider1 = ('$fileName2') WHERE `t_product`.`id` = 5");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='cocoa.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='cocoa.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='cocoa.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='cocoa.php';
                         </script>";
        }

        }

    else
    {

    }

    if(isset($_POST["Update4"]) && !empty($_FILES["slider2"]["name"]))
    {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType3, $allowTypes))
        {
            if($ukuran < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["slider2"]["tmp_name"], $targetFilePath3);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_product SET slider2 = ('$fileName3') WHERE `t_product`.`id` = 5");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='cocoa.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='cocoa.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='cocoa.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='cocoa.php';
                         </script>";
        }

        }

    else
    {

    }

    if(isset($_POST["Update5"]) && !empty($_FILES["slider3"]["name"]))
    {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType4, $allowTypes))
        {
            if($ukuran < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["slider2"]["tmp_name"], $targetFilePath4);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_product SET slider3 = ('$fileName4') WHERE `t_product`.`id` = 5");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='cocoa.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='cocoa.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='cocoa.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='cocoa.php';
                         </script>";
        }

        }

    else
    {

    }

    // Apabila user belum login
    if (empty($_SESSION['id']) AND empty($_SESSION['password']))
    {
        header('location:../cpanel/index.php');  
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

            <?php include "left_menu.php"?>

            <div id="right-panel" class="right-panel">
                
                <?php include "top_menu.php"?>

                 <?php
                    $qrecord = "SELECT * FROM `t_product` WHERE id = '5'";
                    $rrecord = mysqli_query($konek, $qrecord);
                    $rwrecord = mysqli_fetch_array($rrecord);
                    {
                ?> 

                <div class="content mt-3">
                     <div class="animated fadeIn">
                        <div class="row">

                            <div class="col-md-12">
                                <form name="action" method="post" action="" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Update Banner Product Image</strong>
                                        </div>

                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center"><?php echo $rwrecord['product'];?></h3>
                                            </div>

                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                    <p class="text-sm-center mt-2 mb-1" style="font-size:13px;"><i>Image Resolution (1349 x 284)</i></p>
                                                    <img class="mx-auto d-block" <?php echo 'src="../img/product/Banner/'.$rwrecord['banner_photo'].'"';?> height="auto" width="auto" style="text-align: center;" alt="Card image cap">
                                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['banner_photo'];?></h5>
                                                    <div class="location text-sm-center"><input type="file" name="banner_photo" style="margin-left:50px; font-size: 12px;"></div>
                                                </div>
                                                </br>
                                                <div class="card-text text-sm-center">
                                                    <input name='Update2' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Update Product Page</strong>
                                        </div>

                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center"><?php echo $rwrecord['product'];?></h3>
                                            </div>

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
                                                        <textarea name="story" id="editor1" rows="5" class="form-control"><?php echo $rwrecord['story'];?></textarea>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Content</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="content1" id="editor2" rows="5" class="form-control"><?php echo $rwrecord['content1'];?></textarea>
                                                    </div>
                                                </div>
                                            </div>

           <!--------------------------------------- LIST PRODUCT TEA ---------------------------------->

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
                                                            <textarea name="point1_content" type="text" id="editor3" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['content_product1'];?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="point2" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                                        <div class="form-group">
                                                            <label class="control-label mb-1">Jenis Product 2</label>
                                                            <input name="point2" type="text" class="form-control" value="<?php echo $rwrecord['jenis_product2'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label mb-1">Jenis Product 2 Content</label>
                                                            <textarea name="point2_content" type="text" id="editor4" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['content_product2'];?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="point3" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                       <div class="form-group">
                                                            <label class="control-label mb-1">Jenis Product 3</label>
                                                            <input name="point3" type="text" class="form-control" value="<?php echo $rwrecord['jenis_product3'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label mb-1">Jenis Prodct 3 Content</label>
                                                            <textarea name="point3_content" type="text" id="editor5" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['content_product3'];?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="point4" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                       <div class="form-group">
                                                            <label class="control-label mb-1">Jenis Product 4</label>
                                                            <input name="point4" type="text" class="form-control" value="<?php echo $rwrecord['jenis_product4'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label mb-1">Jenis Product 4 Content</label>
                                                            <textarea name="point4_content" type="text" rows="4" id="editor6" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['content_product4'];?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <input name='Update' value='Update' type="submit" class="btn btn-lg btn-info btn-block">

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong class="card-title mb-3">Product Image 1</strong>
                                            </div>
                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                     <p class="text-sm-center mt-2 mb-1" style="font-size: 11px;"><i>Image Resolution 600 x 450</i></p>
                                                     <img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/product/menu product/'.$rwrecord['slider1'].'"';?> height="158" width="167" alt="Card image cap">
                                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['slider1'];?></h5>
                                                    <div class="location text-sm-center"><input type="file" name="slider1" style="margin-left:50px; font-size: 12px;"></div>
                                                </div>
                                                <hr>
                                                <div class="card-text text-sm-center">
                                                    <input name='Update3' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong class="card-title mb-3">Product Image 2</strong>
                                            </div>
                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                    <p class="text-sm-center mt-2 mb-1" style="font-size: 11px;"><i>Image Resolution 600 x 450</i></p>
                                                    <img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/product/menu product/'.$rwrecord['slider2'].'"';?> height="158" width="167" alt="Card image cap">
                                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['slider2'];?></h5>
                                                    <div class="location text-sm-center"><input type="file" name="slider2" style="margin-left:50px; font-size: 12px;"></div>
                                                </div>
                                                <hr>
                                                <div class="card-text text-sm-center">
                                                    <input name='Update4' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong class="card-title mb-3">Product Image 3</strong>
                                            </div>
                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                    <p class="text-sm-center mt-2 mb-1" style="font-size: 11px;"><i>Image Resolution 600 x 450</i></p>
                                                    <img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/product/menu product/'.$rwrecord['slider3'].'"';?> height="158" width="167" alt="Card image cap">
                                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['slider3'];?></h5>
                                                    <div class="location text-sm-center"><input type="file" name="slider3" style="margin-left:50px; font-size: 12px;"></div>
                                                </div>
                                                <hr>
                                                <div class="card-text text-sm-center">
                                                    <input name='Update5' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
