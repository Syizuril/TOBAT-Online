<?php
  require("../../config/config.php");
  if(isset($_GET["nomor_transaksi"])){
    //prepared statement untuk menghapus data
    try{
    $sql = "DELETE FROM transaksi WHERE nomor_transaksi=:nomor_transaksi";
    $stmt = $db->prepare($sql);
    $params = array (
      ":nomor_transaksi"=>$_GET['nomor_transaksi']
    );
    $bukti = $_GET['bukti'];
    unlink("../../images/items/$bukti");

    $saved = $stmt->execute($params);
    header("Location: ../view/tabletransaksi.php");
    }catch(PDOException $e){
    echo "<div class='alert alert-danger alert-dismissible fade show'>
          <strong>Gagal!</strong> Data Anda gagal dihapus diakibatkan karena ". $e->getMessage()."</div>";
      }
  }
 ?>
