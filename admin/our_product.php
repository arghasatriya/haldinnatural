<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");

    $statusMsg = '';

    // File upload path
    $targetDir = "../img/product/Banner/";

    $fileName = basename($_FILES["banner_photo"]["name"]);

    $ukuran = $_FILES['banner_photo']['size'];

    $targetFilePath = $targetDir . $fileName;

    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

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
                $insert = $konek->query("UPDATE t_main_product SET file_name = ('$fileName') WHERE `t_main_product`.`id` = 1");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='our_product.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='our_product.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='our_product.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='our_product.php';
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
                    $qrecord = "SELECT * FROM `t_main_product` WHERE id = '1'";
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
                                            <strong class="card-title">Update Banner Our Product</strong>
                                        </div>

                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center">Our Product</h3>
                                            </div>

                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                    <p class="text-sm-center mt-2 mb-1" style="font-size:13px;"><i>Image Resolution (1920 x 900)</i></p>
                                                    <img class="mx-auto d-block" <?php echo 'src="../img/product/Banner/'.$rwrecord['file_name'].'"';?> height="auto" width="auto" style="text-align: center;" alt="Card image cap">
                                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['file_name'];?></h5>
                                                    <div class="location text-sm-center"><input type="file" name="banner_photo" style="margin-left:50px; font-size: 12px;"></div>
                                                </div>
                                                </br>
                                                <div class="card-text text-sm-center">
                                                    <input name='Update2' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
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
