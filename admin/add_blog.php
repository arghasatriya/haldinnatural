<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");

    $statusMsg = '';

    $time1 = date('H:i:s');
    $date1 = date('Y-m-d');
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
        $qupdate = "    INSERT INTO `t_blog_record` 
                        (`id`, `judul_blog`)
                        VALUES ('6','".$_POST['title']."'";
        $query= mysqli_query ($konek, $qupdate);
      
        $_POST['Update'] = '';   
        $Done = '';
      

     echo "<script type='text/javascript'>
     alert('Success!')
     window.location='view_blog.php';
     </script>";
    }

    $qusernamex = "select * from t_category_product";
    $rusernamex = mysqli_query($konek, $qusernamex);
    $rwusernamex = mysqli_fetch_array($rusernamex);
    $product_name = $rwusernamex['name'];

    
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

                <div class="content mt-3">
                     <div class="animated fadeIn">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Add New Blog</strong>
                                    </div>


                                    <div class="card-body">
        <!---------------------------- ABOUT'S SETUP AREA ------------------------------->

                                         <form name="action" method="post" action="" enctype="multipart/form-data">

                                            <div class="form-group">

                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Product Group</label>
                                                    </div>

                                                    <div class="col-12 col-md-9">
                                                        <?php 
                                                            echo "<select name='product_group' class='form-control'>
                                                                    <option value='0'>Choose one ..</option>";

                                                            $query = "SELECT * FROM t_category_product";
                                                            $result = mysqli_query($konek, $query);
                                                            while ($row = mysqli_fetch_array($result))
                                                            {
                                                                $naper = strtoupper($row['name']);
                                                                //$alper = strtoupper($row[2]);
                                                                $ncode = $row['name'];
                                                                $turun = "<br/>";
                                                                
                                                               echo "<option value='".$ncode."' class='style5'>".$ncode."</option>";   
                                                                //echo "<option value='".$ncode."' class='style5'>".$alper."</option>";         
                                                            }
                                                            echo "</select>";
                                                        ?>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Title</label>
                                                    </div>

                                                    <div class="col-12 col-md-9">
                                                        <input name="title" id="title" type="text" class="form-control">
                                                        <input type="hidden" name="date" value="<? echo $date1;?>" />
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

            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            <?php include "java_script.php"?>

        </body>

    </html>
<?php
}
?>
