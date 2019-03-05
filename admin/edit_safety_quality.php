<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");

    $statusMsg = '';

    // File upload path
    $targetDir = "../img/our responsibility/safety & quality/";

    $fileName = basename($_FILES["slider1"]["name"]);

    $ukuran = $_FILES['slider1']['size'];

    $targetFilePath = $targetDir . $fileName;

    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if ($_POST[Update])
    {
        $date=date("Y-m-d");
        $time=date("H:i:s");
      $qupdate = "UPDATE `t_safety_quality` SET 
                        point1_title = '".$_POST['point1_title']."',
                        point1_content = '".$_POST['point1_content']."'
                        WHERE id ='".$_GET['id']."'";
      $query= mysqli_query ($konek, $qupdate);
      
        $_POST['Update'] = '';   
        $Done = '';
      

     echo "<script type='text/javascript'>
     alert('Success!')
     window.location='safety_quality.php';
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
                move_uploaded_file($_FILES["slider1"]["tmp_name"], $targetFilePath1);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_safety_quality SET point1_icon = ('$fileName'), uploaded_on = NOW() WHERE `t_safety_quality`.`id` = '".$_GET['id']."'");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='safety_quality.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='safety_quality.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='safety_quality.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='safety_quality.php';
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
                    $id=$_GET['id'];
                    $qrecord = "SELECT * FROM t_safety_quality where id='$id'";
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
                                        <strong class="card-title">Update <?php echo $rwrecord['point1_title'];?></strong>
                                    </div>


                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center"><?php echo $rwrecord['point1_title'];?></h3>
                                        </div>
        <!---------------------------- ABOUT'S SETUP AREA ------------------------------->

                                         <form name="action" method="post" action="" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Title</label>
                                                    </div>

                                                    <div class="col-12 col-md-9">
                                                        <input name="point1_title" type="text" class="form-control" value="<?php echo $rwrecord['point1_title'];?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Description</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="point1_content" id="editor1" rows="9" class="form-control"><?php echo $rwrecord['point1_content'];?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <input name='Update' value='Update' type="submit" class="btn btn-lg btn-info btn-block">           
                                        </div>
                                    </div>

                                     <div class="col-md-4"></div>

                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong class="card-title mb-3">Update <?php echo $rwrecord['point1_title'];?> Icon</strong>
                                            </div>
                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                    <img class="rounded-circle mx-auto d-block" <?php echo 'src="../img/our responsibility/safety & quality/'.$rwrecord['point1_icon'].'"';?> height="148" width="157" style="text-align: center;" alt="Card image cap">
                                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['photo'];?></h5>
                                                    <div class="location text-sm-center"><input type="file" name="slider1" style="margin-left:50px; font-size: 12px;"></div>
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
