<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");
    $statusMsg = '';

    // File upload path
    $targetDir = "../img/our people/";
    $targetDir2 = "../img/our people/";
    $targetDir3 = "../img/our people/";
    $targetDir4 = "../img/our people/";

    $fileName = basename($_FILES["slider1"]["name"]);
    $fileName2 = basename($_FILES["slider2"]["name"]);
    $fileName3 = basename($_FILES["slider3"]["name"]);
    $fileName4 = basename($_FILES["slider4"]["name"]);

    $ukuran = $_FILES['slider1']['size'];
    $ukuran2 = $_FILES['slider2']['size'];
    $ukuran3 = $_FILES['slider3']['size'];
    $ukuran4 = $_FILES['slider4']['size'];

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
        $qupdate = "    UPDATE `t_about_us` SET 
                        title1 = '".$_POST['title1']."',
                        story1 = '".$_POST['story1']."',
                        title2 = '".$_POST['title2']."',
                        story2 = '".$_POST['story2']."'
                        WHERE `t_about_us`.`id` = 2";
        $rupdate = mysqli_query ($konek, $qupdate);

        $_POST['Update'] = '';   
        $Done = '';

        echo "<script type='text/javascript'>
             alert('Success!')
             window.location='our_peoples.php';
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
                $insert = $konek->query("UPDATE t_about_us SET file_name = ('$fileName'), uploaded_on = NOW() WHERE `t_about_us`.`id` = 2");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='our_peoples.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='our_peoples.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='our_peoples.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='our_peoples.php';
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
            if($ukuran2 < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["slider2"]["tmp_name"], $targetFilePath2);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_about_us SET file_name2 = ('$fileName2'), uploaded_on2 = NOW() WHERE `t_about_us`.`id` = 2");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='our_peoples.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='our_peoples.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='our_peoples.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='our_peoples.php';
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
            if($ukuran2 < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["slider3"]["tmp_name"], $targetFilePath3);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_about_us SET file_name3 = ('$fileName3'), uploaded_on3 = NOW() WHERE `t_about_us`.`id` = 2");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='our_peoples.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='our_peoples.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='our_peoples.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='our_peoples.php';
                         </script>";
        }

        }

    else
    {

    }

     if(isset($_POST["Update_Header"]) && !empty($_FILES["slider4"]["name"]))
    {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType4, $allowTypes))
        {
            if($ukuran2 < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["slider4"]["tmp_name"], $targetFilePath4);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_about_us SET header_photo = ('$fileName4'), header_uploaded_on = NOW() WHERE `t_about_us`.`id` = 2");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='our_peoples.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='our_peoples.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='our_peoples.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='our_peoples.php';
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
                    $qrecord = "SELECT * FROM `t_about_us` WHERE id = '2'";
                    $rrecord = mysqli_query($konek, $qrecord);
                    $rwrecord = mysqli_fetch_array($rrecord);
                    {
                ?> 

                <div class="content mt-3">
                     <div class="animated fadeIn">
                        <div class="row">

                            <form name="action" method="post" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Update Header Image of Our People</strong>
                                        </div>

                                        <div class="card-body">
                                            <div class="mx-auto d-block">
                                            <p class="text-sm-center mt-2 mb-1" style="font-size:13px;"><i>Image Resolution (1920 x 900)</i></p>
                                            <img class="mx-auto d-block" <?php echo 'src="../img/our people/'.$rwrecord['header_photo'].'"';?> height="auto" width="auto" style="text-align: center;" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['header_photo'];?></h5>
                                            <div class="location text-sm-center"><input type="file" name="slider4" style="margin-left:50px; font-size: 12px;"></div>
                                        </div>
                                        </br>
                                        <div class="card-text text-sm-center">
                                            <input name='Update_Header' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Update Our People Page</strong>
                                    </div>


                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center"><?php echo $rwrecord['title1'];?></h3>
                                        </div>

                                            <div class="custom-tab">
                                                <nav>
                                                    <div class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                                                        <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#point1" role="tab" aria-controls="point1" aria-selected="true">
                                                            <?php
                                                                if (($rwrecord['title1'])!='') {
                                                                    echo $rwrecord['title1'];
                                                                } else {
                                                                    echo "No Data";
                                                                }
                                                            
                                                            ?>
                                                        </a>

                                                        <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#point2" role="tab" aria-controls="point2" aria-selected="false">
                                                          <?php
                                                                if (($rwrecord['title2'])!='') {
                                                                    echo $rwrecord['title2'];
                                                                } else {
                                                                    echo "No Data";
                                                                }
                                                            
                                                            ?>
                                                        </a>
                                                    </div>
                                                </nav>

                                                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="point1" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input" class=" form-control-label">
                                                                    Title 1
                                                                </label>
                                                            </div>

                                                            <div class="col-12 col-md-9">
                                                                <input name="title1" type="text" class="form-control" value="<?php echo $rwrecord['title1'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row form-group">
                                                                 <div class="col col-md-3">
                                                                     <label for="text-input" class=" form-control-label">
                                                                        Story
                                                                    </label>
                                                                </div>

                                                                 <div class="col-12 col-md-9">
                                                                    <textarea name="story1" id="editor2" rows="5" class="form-control"><?php echo $rwrecord['story1'];?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="point2" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                                        <div class="form-group">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3">
                                                                <label for="text-input" class=" form-control-label">
                                                                    Title 2
                                                                </label>
                                                            </div>

                                                            <div class="col-12 col-md-9">
                                                                <input name="title2" type="text" class="form-control" value="<?php echo $rwrecord['title2'];?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row form-group">
                                                                 <div class="col col-md-3">
                                                                     <label for="text-input" class=" form-control-label">
                                                                        Story
                                                                    </label>
                                                                </div>

                                                                 <div class="col-12 col-md-9">
                                                                    <textarea name="story2" id="editor3" rows="5" class="form-control"><?php echo $rwrecord['story2'];?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                    <!--------------------------------------- VIDEO AND PHOTO SETUP AREA ---------------------------------->
                                                 </div>
                                           
                                            </div>
                                        </div>

                                        <input name='Update' value='Update' type="submit" class="btn btn-lg btn-info btn-block">

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title mb-3">Our People Image 1</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="mx-auto d-block">
                                                <p class="text-sm-center mt-2 mb-1" style="font-size: 11px;"><i>Image Resolution 555 x 650</i></p>
                                                 <img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/our people/'.$rwrecord['file_name'].'"';?> height="158" width="167" alt="Card image cap">
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
                                            <strong class="card-title mb-3">Our People Image 2</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="mx-auto d-block">
                                                <p class="text-sm-center mt-2 mb-1" style="font-size: 11px;"><i>Image Resolution 555 x 650</i></p>
                                                 <img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/our people/'.$rwrecord['file_name2'].'"';?> height="158" width="167" alt="Card image cap">
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
                                            <strong class="card-title mb-3">Our People Image 3</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="mx-auto d-block">
                                                <p class="text-sm-center mt-2 mb-1" style="font-size: 11px;"><i>Image Resolution 555 x 650</i></p>
                                                 <img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/our people/'.$rwrecord['file_name3'].'"';?> height="158" width="167" alt="Card image cap">
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

                </div> <!-- .content -->

                <?php } ?>

            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            <?php include "java_script.php"?>

            <!-- TiniMCE -->
           

        </body>

    </html>

<?php
}
?>
