<?php
    $qrecord = "SELECT * FROM `t_why_choose_us`";
    $rrecord = mysqli_query($konek, $qrecord);
    $rwrecord = mysqli_fetch_array($rrecord);
    {
?> 

<div class="feature">
	<i class="fa fa-check"></i>
	<p class="why_choose_title"><?php echo $rwrecord['point1'];?></p>
	<p style="margin-left: 31px;"><?php echo $rwrecord['point1_content'];?></p>
</div>
<div class="feature">
	<i class="fa fa-check"></i>
	<p class="why_choose_title"><?php echo $rwrecord['point2'];?></p>
	<p style="margin-left: 31px;"><?php echo $rwrecord['point2_content'];?>
</p>
</div>
<div class="feature">
	<i class="fa fa-check"></i>
	<p class="why_choose_title"><?php echo $rwrecord['point3'];?></p>
	<p style="margin-left: 31px;"><?php echo $rwrecord['point3_content'];?></p>
</div>

<?php
}
?>