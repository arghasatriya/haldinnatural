<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");

    $statusMsg = '';

    // File upload path
    $targetDir = "../img/our responsibility/sustainability/";

    $fileName = basename($_FILES["banner_photo"]["name"]);
    $fileName2 = basename($_FILES["photo"]["name"]);

    $ukuran = $_FILES['banner_photo']['size'];
    $ukuran2 = $_FILES['photo']['size'];

    $targetFilePath = $targetDir . $fileName;
    $targetFilePath2 = $targetDir . $fileName2;

    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);

    if ($_POST[Update])
    {
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $qupdate = "    UPDATE `t_sustainability` SET 
                        title = '".$_POST['title1']."',
                        content = '".$_POST['content1']."'
                        WHERE `t_sustainability`.`id` = 1";
        $rupdate = mysqli_query ($konek, $qupdate);

        $_POST['Update'] = '';   
        $Done = '';

        echo "<script type='text/javascript'>
             alert('Success!')
             window.location='sustainability.php';
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
                $insert = $konek->query("UPDATE t_sustainability SET banner_photo = ('$fileName'), banner_uploaded_on = NOW() WHERE `t_sustainability`.`id` = 1");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='sustainability.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='sustainability.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='sustainability.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='sustainability.php';
                         </script>";
        }

        }

    else
    {

    }


    if(isset($_POST["Update_photo_sustainability"]) && !empty($_FILES["photo"]["name"]))
    {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType2, $allowTypes))
        {
            if($ukuran < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath2);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_sustainability SET photo = ('$fileName2'), uploaded_on = NOW() WHERE `t_sustainability`.`id` = 1");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='sustainability.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='sustainability.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='sustainability.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='sustainability.php';
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
                    $qrecord = "SELECT * FROM t_sustainability";
                    $rrecord = mysqli_query($konek, $qrecord);
                    $rwrecord = mysqli_fetch_array($rrecord);
                    {
                ?> 

                <form name="action" method="post" action="" enctype="multipart/form-data">

                    <div class="content mt-3">
                         <div class="animated fadeIn">
                            <div class="row">
                                <div class="col-md-12">
                               

                                    <div class="card">
                                        <div class="card-header">
                                             <strong class="card-title">Update <?php echo $rwrecord['title'];?> Banner Image</strong>
                                        </div>

                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center"><?php echo $rwrecord['title'];?></h3>
                                            </div>   
                                        </div>

                                        <?php
                                            $qrecord = "SELECT * FROM `t_sustainability` WHERE id = '1'";
                                            $rrecord = mysqli_query($konek, $qrecord);
                                            $rwrecord = mysqli_fetch_array($rrecord);
                                            {
                                        ?> 

                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                    <img class="mx-auto d-block" <?php echo 'src="../img/our responsibility/sustainability/'.$rwrecord['banner_photo'].'"';?> height="auto" width="auto" style="text-align: center;" alt="Card image cap">
                                                     <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['banner_photo'];?></h5>
                                                    <div class="location text-sm-center"><input type="file" name="banner_photo" style="margin-left:90px;"></div>
                                                </div>
                                                </br>
                                                <div class="card-text text-sm-center">
                                                    <input name='Update2' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                                </div>
                                            </div>

                                        <?php
                                        } 
                                        ?>

                                    </div>

                                    
                                    <div class="card">
                                        <div class="card-header">
                                             <strong class="card-title">Update <?php echo $rwrecord['title'];?> Content</strong>
                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <input name="title1" type="text" class="form-control" value="<?php echo $rwrecord['title'];?>">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Story</label></div>
                                                    <div class="col-12 col-md-9">
                                                        <textarea name="content1" id="editor1" rows="3" class="form-control"><?php echo $rwrecord['content'];?></textarea>
                                                    </div>
                                                </div>

                                                <input name='Update' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                            </div>

                                            <div class="panel-body">
                                                <div class="col-md-12">
                                                    <div style="overflow-x:auto;">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center" width="100">Icon</th>
                                                                    <th class="text-center" width="250">Title</th>
                                                                    <th class="text-center">Description</th>
                                                                    <th class="text-center">Edit</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                                                    $qrecord1 = "SELECT * FROM t_sustainability WHERE id IN (3,4)";
                                                                    $rrecord1 = mysqli_query($konek, $qrecord1);
                                                                    while ($rwrecord1 = mysqli_fetch_array($rrecord1))
                                                                    {
                                                                        
                                                                ?> 
                                                                <tr>
                                                                    <td class="text-center"> <img width="40" height="40" class="mx-auto d-block" <?php echo 'src="../img/our responsibility/sustainability/'.$rwrecord1['point1_icon'].'"';?>></td>
                                                                    <td class="text-center"><?php echo $rwrecord1['point1_title'];?></td>
                                                                    <td>
                                                                        <a href="edit_sustainability.php?id=<?php echo $rwrecord1['id']; ?>">
                                                                            <?php echo substr($rwrecord1['point1_content'],0,180)." ...";?>
                                                                        </a>
                                                                    </td>
                                                                   
                                                                    <td class="text-right">
                                                                        <div class="tooltip-demo">
                                                                            <a href="edit_sustainability.php?id=<?php echo $rwrecord1['id']; ?>">
                                                                                <button type="button" class="btn btn-primary btn-xs"data-toggle="tooltip" data-placement="top" title="Edit Kategori">
                                                                                    <i class="fa fa-wrench"></i>
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header">
                                             <strong class="card-title">Update <?php echo $rwrecord['title'];?> Image</strong>
                                        </div>

                                        <?php
                                            $qrecord = "SELECT * FROM `t_sustainability` WHERE id = '1'";
                                            $rrecord = mysqli_query($konek, $qrecord);
                                            $rwrecord = mysqli_fetch_array($rrecord);
                                            {
                                        ?> 

                                            <div class="card-body">
                                                <div class="mx-auto d-block">
                                                    <img class="mx-auto d-block" <?php echo 'src="../img/our responsibility/sustainability/'.$rwrecord['photo'].'"';?> height="auto" width="auto" style="text-align: center;" alt="Card image cap">
                                                     <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['photo'];?></h5>
                                                    <div class="location text-sm-center"><input type="file" name="photo" style="margin-left:90px;"></div>
                                                </div>
                                                </br>
                                                <div class="card-text text-sm-center">
                                                    <input name='Update_photo_sustainability' value='Update' type="submit" class="btn btn-lg btn-info btn-block">
                                                </div>
                                            </div>

                                        <?php
                                        } 
                                        ?>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </form>

                <?php } ?>

            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            <?php include "java_script.php"?>

        </body>

    </html>

<?php } ?>