<?php
  require("../../config/config.php");
  if(isset($_GET["id_obat"])){
    //prepared statement untuk menghapus data
    $sql = "DELETE FROM obat WHERE id_obat=:id_obat";
    $stmt = $db->prepare($sql);
    $params = array (
      ":id_obat"=>$_GET['id_obat']
    );

    $saved = $stmt->execute($params);
    if($saved){
        // $berhasil="Data berhasil dihapus!";
        // echo "<script type='text/javascript'>alert('$berhasil');</script>";
        header("Location: ../view/tablesobat.php");
      // }else{
      //   echo "<div class='alert alert-danger alert-dismissible fade show'>
      //       <strong>Gagal!</strong> Data Anda gagal diperbaharui diakibatkan beberapa sebab </div>";
      }
  }
 ?>
