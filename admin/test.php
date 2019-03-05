<?php
    session_start();
    error_reporting(0);
    include "../include/koneksi.php";
    include "../include/current.php";

    date_default_timezone_set("Asia/Bangkok");
?>

<form method="post" action="upload.php" enctype='multipart/form-data'>
  <input type='file' name='file' />
  <input type='submit' value='Save name' name='but_upload'>
</form>

