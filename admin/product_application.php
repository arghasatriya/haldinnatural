<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";

    date_default_timezone_set("Asia/Bangkok");
    if ($_POST[Update])
    {
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $qupdate = "    UPDATE `t_product_application` SET 
                        product1 = '".$_POST['product1']."', product1_content = '".$_POST['product1_content']."',
                        product2 = '".$_POST['product2']."', product2_content = '".$_POST['product2_content']."',
                        product3 = '".$_POST['product3']."', product3_content = '".$_POST['product3_content']."',
                        product4 = '".$_POST['product4']."', product4_content = '".$_POST['product4_content']."',
                        product5 = '".$_POST['product5']."', product5_content = '".$_POST['product5_content']."',
                        product6 = '".$_POST['product6']."', product6_content = '".$_POST['product6_content']."'

                       ";
        $rupdate = mysqli_query ($konek, $qupdate);

        $_POST['Update'] = '';   
        $Done = '';

        echo "<script type='text/javascript'>
             alert('Success!')
             window.location='index.php?flag=action';
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

    	<?php include "./left_menu.php"?>

        <div id="right-panel" class="right-panel">
        	
        	<?php include "./top_menu.php"?>

            <?php
                $qrecord = "SELECT * FROM `t_product_application`";
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
                                        <h3 class="text-center">Product Application</h3>
                                    </div>

                                     <form name="action" method="post" action="">

                                        <div class="custom-tab">

                                            <nav>
                                                <div class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#product1" role="tab" aria-controls="product1" aria-selected="true">
                                                        <?php echo $rwrecord['product1'];?>
                                                    </a>

                                                    <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#product2" role="tab" aria-controls="product2" aria-selected="false">
                                                        <?php echo $rwrecord['product2'];?>
                                                    </a>

                                                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#product3" role="tab" aria-controls="product3" aria-selected="false">
                                                        <?php echo $rwrecord['product3'];?>
                                                    </a>

                                                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#product4" role="tab" aria-controls="product4" aria-selected="false">
                                                        <?php echo $rwrecord['product4'];?>
                                                    </a>

                                                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#product5" role="tab" aria-controls="product5" aria-selected="false">
                                                        <?php echo $rwrecord['product5'];?>
                                                    </a>

                                                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab" href="#product6" role="tab" aria-controls="product6" aria-selected="false">
                                                        <?php echo $rwrecord['product6'];?>
                                                    </a>
                                                </div>
                                            </nav>
                                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="product1" role="tabpanel" aria-labelledby="custom-nav-home-tab">
                                                   <div class="form-group">
                                                        <label class="control-label mb-1">Product 1</label>
                                                        <input name="product1" type="text" class="form-control" value="<?php echo $rwrecord['product1'];?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label  class="control-label mb-1">Product 1 Content</label>
                                                        <textarea name="product1_content" id="editor1" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['product1_content'];?></textarea>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="product2" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                                    <div class="form-group">
                                                        <label class="control-label mb-1">Product 2</label>
                                                        <input name="product2" type="text" class="form-control" value="<?php echo $rwrecord['product2'];?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label  class="control-label mb-1">Product 2 Content</label>
                                                        <textarea name="product2_content" id="editor2" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['product2_content'];?></textarea>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="product3" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                   <div class="form-group">
                                                        <label class="control-label mb-1">Product 3</label>
                                                        <input name="product3" type="text" class="form-control" value="<?php echo $rwrecord['product3'];?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label  class="control-label mb-1">Product 3 Content</label>
                                                        <textarea name="product3_content" id="editor3" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['product3_content'];?></textarea>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="product4" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                   <div class="form-group">
                                                        <label class="control-label mb-1">Product 4</label>
                                                        <input name="product4" type="text" class="form-control" value="<?php echo $rwrecord['product4'];?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label  class="control-label mb-1">Product 4 Content</label>
                                                        <textarea name="product4_content" id="editor4" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['product4_content'];?></textarea>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="product5" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                   <div class="form-group">
                                                        <label class="control-label mb-1">Product 5</label>
                                                        <input name="product5" type="text" class="form-control" value="<?php echo $rwrecord['product5'];?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label  class="control-label mb-1">Product 5 Content</label>
                                                        <textarea name="product5_content" id="editor5" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['product5_content'];?></textarea>
                                                    </div>
                                                </div>

                                                 <div class="tab-pane fade" id="product6" role="tabpanel" aria-labelledby="custom-nav-contact-tab">
                                                   <div class="form-group">
                                                        <label class="control-label mb-1">Product 6</label>
                                                        <input name="product6" type="text" class="form-control" value="<?php echo $rwrecord['product6'];?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label  class="control-label mb-1">Product 6 Content</label>
                                                        <textarea name="product6_content" id="editor6" type="text" rows="4" class="form-control" aria-required="true" aria-invalid="false"><?php echo $rwrecord['product6_content'];?></textarea>
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
