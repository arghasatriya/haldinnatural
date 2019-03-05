<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");

    $statusMsg = '';

    // File upload path
    $targetDir = "../img/blog/";

    $fileName = basename($_FILES["photo"]["name"]);

    $ukuran = $_FILES['photo']['size'];

    $targetFilePath = $targetDir . $fileName;

    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if ($_POST[Update])
    {
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $qupdate = "UPDATE `t_blog_record` SET 
                        judul_blog = '".$_POST['title']."',
                        headline = '".$_POST['headline']."',
                        content = '".$_POST['content']."'
                        WHERE id ='".$_GET['id']."'";
        $query= mysqli_query ($konek, $qupdate);
      
        $_POST['Update'] = '';   
        $Done = '';
      

     echo "<script type='text/javascript'>
     alert('Success!')
     window.location='edit_blog.php?id=$id';
     </script>";
    }
    
     if(isset($_POST["Update2"]) && !empty($_FILES["photo"]["name"]))
    {
        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes))
        {
            if($ukuran < 10044070)
            {  
            // Upload file to server
                move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath);
                    // Insert image file name into database
                $insert = $konek->query("UPDATE t_blog_record SET file_name = ('$fileName'), uploaded_on = NOW() WHERE `t_blog_record`.`id` = '".$_GET['id']."'");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='view_blog.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='view_blog.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='view_blog.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='view_blog.php';
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
                    $qrecord = "SELECT * FROM t_blog_record where id='$id'";
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
                                        <strong class="card-title">Update <?php echo $rwrecord['judul_blog'];?></strong>
                                    </div>


                                    <div class="card-body">
        <!---------------------------- ABOUT'S SETUP AREA ------------------------------->

                                         <form name="action" method="post" action="" enctype="multipart/form-data">

                                            <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Title</label>
                                                    </div>

                                                    <div class="col-12 col-md-9">
                                                        <input name="title" type="text" class="form-control" value="<?php echo $rwrecord['judul_blog'];?>">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Headline</label>
                                                    </div>

                                                    <div class="col-12 col-md-9">
                                                        <input name="headline" type="text" class="form-control" value="<?php echo $rwrecord['headline'];?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Content</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="content" id="editor1" rows="9" class="form-control"><?php echo $rwrecord['content'];?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <input name='Update' value='Update' type="submit" class="btn btn-lg btn-info btn-block">           
                                        </div>
                                    </div>

                                    <div class="card">
                                        <?php
                                            $id=$_GET['id'];
                                            $qrecord = "SELECT * FROM `t_blog_record` WHERE id = '$id'";
                                            $rrecord = mysqli_query($konek, $qrecord);
                                            $rwrecord = mysqli_fetch_array($rrecord);
                                            {
                                        ?> 

                                        <div class="card-body">
                                            <div class="mx-auto d-block">
                                                <img class="mx-auto d-block" <?php echo 'src="../img/blog/'.$rwrecord['file_name'].'"';?> height="auto" width="auto" style="text-align: center;" alt="Card image cap">
                                                 <h5 class="text-sm-center mt-2 mb-1"><?php echo $rwrecord['photo'];?></h5>
                                                <div class="location text-sm-center"><input type="file" name="photo" style="margin-left:90px;"></div>
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
