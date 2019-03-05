<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");

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
                    $qrecord = "SELECT * FROM t_safety_quality";
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
                                            <strong class="card-title">Blog Master Data</strong>
                                        </div>

                                        <div class="card-body">
                                            <div class="card-title">
                                                <div class="panel-body">
                                                    <div class="col-md-12">
                                                        <div style="overflow-x:auto;">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center" width="30">ID</th>
                                                                        <th class="text-center" width="200">Title</th>
                                                                        <th class="text-center" width="200">Headline</th>
                                                                        <th class="text-center">Content</th>
                                                                        <th class="text-center">Edit</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody style="font-size: 12px;">
                                                                    <?php
                                                                        $qrecord1 = "SELECT * FROM t_blog_record order by id desc";
                                                                        $rrecord1 = mysqli_query($konek, $qrecord1);
                                                                        while ($rwrecord1 = mysqli_fetch_array($rrecord1))
                                                                        {
                                                                            
                                                                    ?> 
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $rwrecord1['id'];?></td>
                                                                        <td class="text-center">
                                                                            <?php echo $rwrecord1['judul_blog'];?>
                                                                        </td>
                                                                        <td class="text-center"><?php echo $rwrecord1['headline'];?></td>
                                                                        <td class="text-center">
                                                                            <?php echo substr($rwrecord1['content'],0,90)." ...";?>
                                                                        </td>
                                                                       
                                                                        <td class="text-right">
                                                                            <div class="tooltip-demo">
                                                                                <a href="edit_blog.php?id=<?php echo $rwrecord1['id']; ?>">
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