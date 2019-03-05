<?php
session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

$sql = "select name from images where id=3";
$result = mysqli_query($konek,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "images/".$image;

?>
<img src='<?php echo $image_src;  ?>' >