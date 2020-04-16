<?php
  $p = 0;
  foreach ($_POST as $key => $value) {
    if($value == "yes"){
      $p++;
    }
  }
  //insert
  error_reporting(0);
  include "config/koneksi.php";
  $sql = mysqli_query($con, "INSERT INTO `user` (`id`, `nama`, `Nilai`, `alamat`) VALUES (NULL, '".$_POST["name"]."','".$p."','".$_POST["address"]."')");
  if ($sql) {
    echo $p;
  }else{
    echo $p;
  }
?>