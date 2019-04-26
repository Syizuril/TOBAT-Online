<?php
  require("../../config/config.php");
  if(isset($_GET["id_obat"])){
    //prepared statement untuk menghapus data
    try{
    $sql = "DELETE FROM obat WHERE id_obat=:id_obat";
    $stmt = $db->prepare($sql);
    $params = array (
      ":id_obat"=>$_GET['id_obat']
    );
    $foto_obat = $_GET['foto_obat'];
    if($image!="default.svg"){
      unlink("../../images/items/$foto_obat");
    }
    $saved = $stmt->execute($params);
    header("Location: ../view/tablesobat.php");
    }catch(PDOException $e){
    echo "<div class='alert alert-danger alert-dismissible fade show'>
          <strong>Gagal!</strong> Data Anda gagal dihapus diakibatkan karena ". $e->getMessage()."</div>";
      }
  }
 ?>
