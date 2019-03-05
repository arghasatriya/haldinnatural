<?php
    $qrecord = "SELECT * FROM `t_solutions_applications` WHERE id = 1";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

<!----------------------------------------------------- FUNCTIONAL INGREDIENTS AREA ------------------------------------------------------->
<section  class="service-area section-padding bg-white">
    <div class="container">
        <div class="row">

            <div class="main_title text-center ">
                <h2 class="title"><?php echo $rwrecord['title'];?></h2>
                <p class="text-center">
                    <?php echo $rwrecord['content'];?>
                </p>
            </div> 

              <div class="col-md-5 mt-50">
                    <div class="right_question_img">
                        <img <?php echo 'src="img/technology/solutions applications/'.$rwrecord['photo'].'"';?>" class="img-responsive" alt="">
                    </div>
                </div>

            <?php } ?>

            <?php
                $qrecord = "SELECT * FROM `t_solutions_applications` WHERE id = 2";
                $rrecord = mysqli_query($konek, $qrecord);
                $rwrecord = mysqli_fetch_array($rrecord);
                {
            ?> 

                <div class="col-md-7 mt-50">
                    <div class="left_question_inner">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <?php
                                if (($rwrecord['header'])!='') 
                                {
                                    echo "  <div class='panel panel-default'>
                                                <div class='panel-heading' role='tab' id='headingOne'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>".
                                                            $rwrecord['header']."
                                                        <i class='fa fa-minus' aria-hidden='true'></i>
                                                        <i class='fa fa-plus' aria-hidden='true'></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapseOne' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingOne'>
                                                    <div class='panel-body'>
                                                        <div class='feature'>".
                                                            $rwrecord['isi']."
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        ";
                                }

                                else
                                {
                                    echo "   <div class='panel panel-default'></div>";
                                }
                            ?>

                            <?php } ?>

                            <?php
                                $qrecord = "SELECT * FROM `t_solutions_applications` WHERE id = 3";
                                $rrecord = mysqli_query($konek, $qrecord);
                                $rwrecord = mysqli_fetch_array($rrecord);
                                {
                            ?> 

                                <?php
                                    if (($rwrecord['header'])!='') 
                                    {
                                        echo "  <div class='panel panel-default'>
                                                    <div class='panel-heading' role='tab' id='headingTwo'>
                                                        <h4 class='panel-title'>
                                                             <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo'>".
                                                                $rwrecord['header']."
                                                            <i class='fa fa-minus' aria-hidden='true'></i>
                                                            <i class='fa fa-plus' aria-hidden='true'></i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id='collapseTwo' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTwo'>
                                                        <div class='panel-body'>
                                                            <div class='feature'>".
                                                                $rwrecord['isi']."
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            ";
                                    }

                                    else
                                    {
                                        echo "   <div class='panel panel-default'></div>";
                                    }
                                ?>

                            <?php } ?>

                            <?php
                                $qrecord = "SELECT * FROM `t_solutions_applications` WHERE id = 4";
                                $rrecord = mysqli_query($konek, $qrecord);
                                $rwrecord = mysqli_fetch_array($rrecord);
                                {
                            ?> 

                                <?php
                                    if (($rwrecord['header'])!='') 
                                    {
                                        echo "  <div class='panel panel-default'>
                                                    <div class='panel-heading' role='tab' id='headingThree'>
                                                        <h4 class='panel-title'>
                                                             <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapseThree' aria-expanded='false' aria-controls='collapseTwo'>".
                                                                $rwrecord['header']."
                                                            <i class='fa fa-minus' aria-hidden='true'></i>
                                                            <i class='fa fa-plus' aria-hidden='true'></i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id='collapseThree' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingThree'>
                                                        <div class='panel-body'>
                                                            <div class='feature'>".
                                                                $rwrecord['isi']."
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            ";
                                    }

                                    else
                                    {
                                        echo "   <div class='panel panel-default'></div>";
                                    }
                                ?>

                            <?php } ?>

                            <?php
                                $qrecord = "SELECT * FROM `t_solutions_applications` WHERE id = 5";
                                $rrecord = mysqli_query($konek, $qrecord);
                                $rwrecord = mysqli_fetch_array($rrecord);
                                {
                            ?> 
                                 <?php
                                    if (($rwrecord['header'])!='') 
                                    {
                                        echo "  <div class='panel panel-default'>
                                                    <div class='panel-heading' role='tab' id='headingfour'>
                                                        <h4 class='panel-title'>
                                                             <a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#collapsefour' aria-expanded='false' aria-controls='collapsefour'>".
                                                                $rwrecord['header']."
                                                            <i class='fa fa-minus' aria-hidden='true'></i>
                                                            <i class='fa fa-plus' aria-hidden='true'></i>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id='collapsefour' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingfour'>
                                                        <div class='panel-body'>
                                                            <div class='feature'>".
                                                                $rwrecord['isi']."
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            ";
                                    }

                                    else
                                    {
                                        echo "   <div class='panel panel-default'></div>";
                                    }
                                ?>

                             <?php } ?>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</section>


