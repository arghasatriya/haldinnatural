<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");
    $statusMsg = '';

    // File upload path
    $targetDir = "../img/why choose us/";
    $targetDir2 = "../img/why choose us/";
    $targetDir3 = "../img/why choose us/";

    $fileName = basename($_FILES["slider1"]["name"]);
    $fileName2 = basename($_FILES["slider2"]["name"]);
    $fileName3 = basename($_FILES["slider3"]["name"]);

    $ukuran = $_FILES['slider1']['size'];
    $ukuran2 = $_FILES['slider2']['size'];
    $ukuran3 = $_FILES['slider3']['size'];

    $targetFilePath = $targetDir . $fileName;
    $targetFilePath2 = $targetDir2 . $fileName2;
    $targetFilePath3 = $targetDir3 . $fileName3;

    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
    $fileType3 = pathinfo($targetFilePath3,PATHINFO_EXTENSION);

    if ($_POST[Update])
    {
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $qupdate = "    UPDATE `t_why_choose_us` SET 
                        point1 = '".$_POST['point1']."', point1_content = '".$_POST['point1_content']."',
                        point2 = '".$_POST['point2']."', point2_content = '".$_POST['point2_content']."',
                        point3 = '".$_POST['point3']."', point3_content = '".$_POST['point3_content']."'
                       ";
        $rupdate = mysqli_query ($konek, $qupdate);

        $_POST['Update'] = '';   
        $Done = '';

        echo "<script type='text/javascript'>
             alert('Success!')
             window.location='why_choose_us.php';
             </script>";
    }

    if(isset($_POST["Update2"]) && !empty($_FILES["slider1"]["name"]))
    {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes))
        {
            if($ukuran < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["slider1"]["tmp_name"], $targetFilePath);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_why_choose_us SET file_name = ('$fileName'), uploaded_on = NOW() WHERE `t_why_choose_us`.`id` = 1");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='why_choose_us.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='why_choose_us.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='why_choose_us.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='why_choose_us.php';
                         </script>";
        }

        }

    else
    {

    }

    if(isset($_POST["Update3"]) && !empty($_FILES["slider2"]["name"]))
    {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType2, $allowTypes))
        {
            if($ukuran < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["slider2"]["tmp_name"], $targetFilePath2);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_why_choose_us SET file_name2 = ('$fileName2'), uploaded_on = NOW() WHERE `t_why_choose_us`.`id` = 1");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='why_choose_us.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='why_choose_us.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='why_choose_us.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='why_choose_us.php';
                         </script>";
        }

        }

    else
    {

    }

     if(isset($_POST["Update4"]) && !empty($_FILES["slider3"]["name"]))
    {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType3, $allowTypes))
        {
            if($ukuran < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["slider3"]["tmp_name"], $targetFilePath3);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_why_choose_us SET file_name3 = ('$fileName3'), uploaded_on = NOW() WHERE `t_why_choose_us`.`id` = 1");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='why_choose_us.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='why_choose_us.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='why_choose_us.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='why_choose_us.php';
                         </script>";
        }

        }

    else
    {

    }

    // Display status message
    echo $statusMsg;  

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
           <?php include "./title_and_css.php"?>
        </head>

        <body>

            <?php include "./left_menu.php"?>

            <div id="right-panel" class="right-panel">
                
                <?php include "./top_menu.php"?>

                <?php
                    $qrecord = "SELECT * FROM `t_why_choose_us`";
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
                                        <strong class="card-title">Update Home Content</strong>
                                    </div>

                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Why Choose Us</h3>
                                        </div>

                                         <form method="post" enctype="multipart/form-data">

                                            <div class="custom-tab">

                                                <nav>
                                                    <div class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                        <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#point1" role="tab" aria-controls="point1" aria-selected="true">
                                                            Point 1
                                                        </a>

                                                        <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#point2" role="tab" aria-controls="point2" aria-selected="false">
                                                            Point 2
                                                        </a>

                                                        <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#point3" role="tab" aria-controls="point3" aria-selected="false">
                                                            Point 3
                                                        </a>
                                                    </div>
                                                </nav>

                                                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="point1" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                                       <div class="form-group">
                                                            <label class="control-label mb-1">Why Choose Us 1</label>
                                                            <input name="point1" type="text" class="form-control" value="<?php echo $rwrecord['point1'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label mb-1">Why Choose Us 1 Content</label>
                                                            <textarea name="point1_content" id="editor1" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['point1_content'];?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="point2" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                                        <div class="form-group">
                                                            <label class="control-label mb-1">Why Choose Us 2</label>
                                                            <input name="point2" type="text" class="form-control" value="<?php echo $rwrecord['point2'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label mb-1">Why Choose Us 2 Content</label>
                                                            <textarea name="point2_content" id="editor2" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['point2_content'];?></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="point3" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                       <div class="form-group">
                                                            <label class="control-label mb-1">Why Choose Us 3</label>
                                                            <input name="point3" type="text" class="form-control" value="<?php echo $rwrecord['point3'];?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="control-label mb-1">Why Choose Us 3 Content</label>
                                                            <textarea name="point3_content" id="editor3" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['point3_content'];?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div></br>

                                            <input name='Update' value='Update' type="submit" class="btn btn-lg btn-info btn-block">

                                        </div></br>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong class="card-title mb-3">Why Choose Us Image 1</strong>
                                            </div>
                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                     <img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/why choose us/'.$rwrecord['file_name'].'"';?> height="158" width="167" alt="Card image cap">
                                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['file_name'];?></h5>
                                                    <div class="location text-sm-center"><input type="file" name="slider1" style="margin-left:50px; font-size: 12px;"></div>
                                                </div>
                                                <hr>
                                                <div class="card-text text-sm-center">
                                                    <input name='Update2' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong class="card-title mb-3">Why Choose Us Image 2</strong>
                                            </div>
                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                     <img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/why choose us/'.$rwrecord['file_name2'].'"';?> height="158" width="167" alt="Card image cap">
                                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['file_name2'];?></h5>
                                                    <div class="location text-sm-center"><input type="file" name="slider2" style="margin-left:50px; font-size: 12px;"></div>
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
                                                <strong class="card-title mb-3">Why Choose Us Image 3</strong>
                                            </div>
                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                     <img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/why choose us/'.$rwrecord['file_name3'].'"';?> height="158" width="167" alt="Card image cap">
                                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['file_name3'];?></h5>
                                                    <div class="location text-sm-center"><input type="file" name="slider3" style="margin-left:50px; font-size: 12px;"></div>
                                                </div>
                                                <hr>
                                                <div class="card-text text-sm-center">
                                                    <input name='Update4' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    </form>
                                </div>

                            </div>
                        </div>

                    </div> <!-- .content -->

                <?php
                    }
                ?>

            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            <?php include "java_script.php"?>

        </body>

    </html>

<?php
}
?>
