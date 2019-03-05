<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");
    $statusMsg = '';

    // File upload path
    $targetDir = "../img/about us/";
    $fileName = basename($_FILES["file"]["name"]);
    $ukuran = $_FILES['file']['size'];
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if ($_POST[Update])
    {
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $qupdate = "    UPDATE `t_about_us` SET 
                        title1 = '".$_POST['title1']."',
                        story1 = '".$_POST['story1']."',
                        title2 = '".$_POST['title2']."',
                        story2 = '".$_POST['story2']."',
                        aboutus_video = '".$_POST['aboutus_video']."'
                        WHERE `t_about_us`.`id` = 1";
        $rupdate = mysqli_query ($konek, $qupdate);

        $_POST['Update'] = '';   
        $Done = '';

        echo "<script type='text/javascript'>
             alert('Success!')
             window.location='about_us.php';
             </script>";
    }

    if(isset($_POST["Update2"]) && !empty($_FILES["file"]["name"]))
    {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes))
        {
            if($ukuran < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_about_us SET file_name = ('$fileName'), uploaded_on = NOW() WHERE `t_about_us`.`id` = 1");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='about_us.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='about_us.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='about_us.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='about_us.php';
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
                    $qrecord = "SELECT * FROM `t_about_us` WHERE id = '1'";
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
                                        <strong class="card-title">Update About Us Page</strong>
                                    </div>


                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center"><?php echo $rwrecord['title1'];?></h3>
                                        </div>
        <!---------------------------- ABOUT'S SETUP AREA ------------------------------->

                                        <form name="action" method="post" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Video</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input name="aboutus_video" type="text" class="form-control" value="<?php echo $rwrecord['aboutus_video'];?>">
                                                    </div>
                                                </div>


           <!--------------------------------------- HAlDIN'S SETUP AREA ---------------------------------->
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
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">About Us Image</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <p class="text-sm-center mt-2 mb-1" style="font-size:13px;"><i>Image Resolution (555 x 650)</i></p>
                                            <img class="mx-auto d-block" <?php echo 'src="../img/about us/'.$rwrecord['file_name'].'"';?> height="auto" width="auto" style="text-align: center;" alt="Card image cap">
                                             <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['file_name'];?></h5>
                                            <div class="location text-sm-center"><input type="file" name="file" style="margin-left:90px;"></div>
                                        </div>
                                        </br>
                                        <div class="card-text text-sm-center">
                                            <input name='Update2' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
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
