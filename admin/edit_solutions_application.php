<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");
    if ($_POST[Update])
    {
        $date=date("Y-m-d");
        $time=date("H:i:s");
      $qupdate = "UPDATE `t_solutions_applications` SET 
                        header = '".$_POST['header']."',
                        isi = '".$_POST['isi']."'
                        WHERE id ='".$_GET['id']."'";
      $query= mysqli_query ($konek, $qupdate);
      
        $_POST['Update'] = '';   
        $Done = '';
      

     echo "<script type='text/javascript'>
     alert('Success!')
     window.location='solutions_application.php';
     </script>";
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
                    $qrecord = "SELECT * FROM t_solutions_applications where id='$id'";
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
                                        <strong class="card-title"><?php echo $rwrecord['header'];?></strong>
                                    </div>


                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center"><?php echo $rwrecord['header'];?></h3>
                                        </div>
        <!---------------------------- ABOUT'S SETUP AREA ------------------------------->

                                        <form name="action" method="post" action="">

                                            <div class="form-group">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label">Title</label>
                                                    </div>

                                                    <div class="col-12 col-md-9">
                                                        <input name="header" type="text" class="form-control" value="<?php echo $rwrecord['header'];?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="text-input" class=" form-control-label">Description</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <textarea name="isi" id="editor1" rows="9" class="form-control"><?php echo $rwrecord['isi'];?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <input name='Update' value='Update' type="submit" class="btn btn-lg btn-info btn-block">           
    
                                        </form>
                                    </div>
                                </div>
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
