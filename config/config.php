<?php
  $db_host = "localhost";
  $db_user = "root";
  $db_pass = "";
  $db_name = "tobat";

  try {
    //Membuat koneksi PDO
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e){
    //Tampilkan error
    die("Terjadi masalah: ".$e->getMessage());
  }
 ?>
