<?php
  require("../../config/config.php");
  if(isset($_GET["id_bantuan"])){
    //prepared statement untuk menghapus data
    try{
    $sql = "DELETE FROM bantuan WHERE id_bantuan=:id_bantuan";
    $stmt = $db->prepare($sql);
    $params = array (
      ":id_bantuan"=>$_GET['id_bantuan']
    );

    $saved = $stmt->execute($params);
    header("Location: ../view/tablebantuan.php");
    }catch(PDOException $e){
    echo "<div class='alert alert-danger alert-dismissible fade show'>
          <strong>Gagal!</strong> Data Bantuan gagal dihapus diakibatkan karena ". $e->getMessage()."</div>";
      }
  }
 ?>
