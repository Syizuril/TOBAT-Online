<?php
  require("../../config/config.php");
  if(isset($_GET["email"])){
    //prepared statement untuk menghapus data
    $sql = "DELETE FROM user WHERE email=:email";
    $stmt = $db->prepare($sql);
    $params = array (
      ":email"=>$_GET['email']
    );

    $saved = $stmt->execute($params);
    if($saved){
        // $berhasil="Data berhasil dihapus!";
        // echo "<script type='text/javascript'>alert('$berhasil');</script>";
        header("Location: ../view/tablesadmin.php");
      // }else{
      //   echo "<div class='alert alert-danger alert-dismissible fade show'>
      //       <strong>Gagal!</strong> Data Anda gagal diperbaharui diakibatkan beberapa sebab </div>";
      }
  }
 ?>
