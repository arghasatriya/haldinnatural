<?php
  $qrecord = "SELECT * FROM `t_blog_record` order by id desc limit 0,3";
  $rrecord = mysqli_query($konek, $qrecord);
  while($rwrecord = mysqli_fetch_array($rrecord))
  {
?> 

  <?php 
    echo "  <div class='col-md-4'>
              <div class='blog'>
                  <div class='blog-img'>
                      <a href='./view_blog.php?id=".$rwrecord['id']."' class='block-5' style='background-image: url(".'img/blog/'.$rwrecord['file_name'].");'>
                          <div class='text'>
                            <div class='subheading'>Haldin Natural</div>
                            <h3 class='heading'>".$rwrecord['judul_blog']."</h3>
                            <div class='post-meta'>
                              <span>Marketing Haldin</span>
                              <span>".$rwrecord['date_created']."</span>
                            </div>
                          </div>
                        </a>
                  </div>
              </div>
          </div>";
  ?>

<?php } ?>


