<?php
  require("../../config/config.php");
  if(isset($_GET["id_obat"])){
    //prepared statement untuk menghapus data
    $sql = "DELETE FROM obat WHERE id_obat=:id_obat";
    $stmt = $db->prepare($sql);
    $params = array (
      ":id_obat"=>$_GET['id_obat']
    );
    $foto_obat = $_GET['foto_obat'];
    unlink("../../images/items/$foto_obat");
    $saved = $stmt->execute($params);
    if($saved){
        header("Location: ../view/tablesobat.php");
      }
  }
 ?>
