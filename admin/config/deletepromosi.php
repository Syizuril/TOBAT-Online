<?php
  require("../../config/config.php");
  if(isset($_GET["id_promosi"])){
    //prepared statement untuk menghapus data
    try{
    $sql = "DELETE FROM promosi WHERE id_promosi=:id_promosi";
    $stmt = $db->prepare($sql);
    $params = array (
      ":id_promosi"=>$_GET['id_promosi']
    );
    $foto = $_GET['foto'];
    if($foto!="slide1.png"||$foto!="slide2.png"||$foto!="slide3.png"){
      unlink("../../images/banners/$foto");
    }

    $saved = $stmt->execute($params);
    header("Location: ../view/tabletransaksi.php");
    }catch(PDOException $e){
    echo "<div class='alert alert-danger alert-dismissible fade show'>
          <strong>Gagal!</strong> Data Anda gagal dihapus diakibatkan karena ". $e->getMessage()."</div>";
      }
  }
 ?>
