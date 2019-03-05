<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");

    $statusMsg = '';

    // File upload path
    $targetDir = "../img/product/";
    $fileName = basename($_FILES["file"]["name"]);
    $ukuran = $_FILES['file']['size'];
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(isset($_POST["Update"]) && !empty($_FILES["file"]["name"]))
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
                $insert = $konek->query("UPDATE t_our_product SET file_name = ('$fileName'), uploaded_on = NOW() WHERE `t_our_product`.`id` = 4");

                if($insert)
                {
                   echo "  <script type='text/javascript'>
                             alert('Success!')
                             window.location='our_product_cocoa_vanilla.php';
                             </script>";
                }

                else
                {
                    echo "  <script type='text/javascript'>
                             alert('File upload failed, please try again.!')
                             window.location='our_product_cocoa_vanilla.php';
                             </script>";
                }

            }

            else
            {
               echo "  <script type='text/javascript'>
                             alert('Sorry, there was an error uploading your file.')
                             window.location='our_product_cocoa_vanilla.php';
                             </script>";
            }

        }

        else
        {
            echo "  <script type='text/javascript'>
                         alert('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.')
                         window.location='our_product_cocoa_vanilla.php';
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

    <!DOCTYPE html>  
        <html class="no-js" lang="en"> 
            <head>  
                <?php include "title_and_css.php"?>
            </head>  

            <body>  
                <?php include "left_menu.php"?>

                <div id="right-panel" class="right-panel">
                
                    <?php include "top_menu.php"?>

                    <div class="content mt-3">
                        <div class="animated fadeIn">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Update Product Page</strong>
                                        </div>

                                            <?php
                                                  $query = "SELECT * FROM t_our_product WHERE id = 4";  
                                                    $result = mysqli_query($konek, $query);  
                                                    $row = mysqli_fetch_array($result);
                                            ?>

                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3 class="text-center"><?php echo $row['name'];?></h3>
                                                </div>

                                                <form method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product Name</label></div>
                                                            <div class="col-12 col-md-9">
                                                                <input disabled="" name="title" type="text" class="form-control" value="<?php echo $row['name'];?>">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Image</label></div>
                                                            <div class="col-12 col-md-9">
                                                                <input type="file" name="file">
                                                            </div>
                                                        </div>

                                                        <div class="row form-group">
                                                            <div class="col col-md-3"></div>
                                                            <div class="col-12 col-md-9">
                                                                 <img <?php echo 'src="../img/product/'.$row['file_name'].'"';?> alt="" height="200" width="200">
                                                                 <p class="mt-2 mb-1" style="font-size: 11px;"><i>Image Resolution 900 x 900</i></p>
                                                            </div>
                                                        </div>

                                                     
                                                    <input name='Update' value='Update' type="submit" class="btn btn-lg btn-info btn-block">

                                                </form> 

                                               
                                                  
  
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

               <?php include "java_script.php"?>
          </body>  
     </html>  

    <script>  
        $(document).ready(function(){  
              $('#Update').click(function(){  
                   var image_name = $('#file').val();  
                   if(image_name == '')  
                   {  
                        alert("Please Select Image");  
                        return false;  
                   }  
                   else  
                   {  
                        var extension = $('#file').val().split('.').pop().toLowerCase();  
                        if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                        {  
                             alert('Invalid Image File');  
                             $('#file').val('');  
                             return false;  
                        }  
                   }  
              });  
        });  
    </script>  

<?php } ?>