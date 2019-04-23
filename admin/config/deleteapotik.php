<?php
  require("../../config/config.php");
  if(isset($_GET["email"])){
    //prepared statement untuk menghapus data
    try{
    $sql = "DELETE FROM user WHERE email=:email";
    $stmt = $db->prepare($sql);
    $params = array (
      ":email"=>$_GET['email']
    );
    $foto = $_GET['foto'];
    unlink("../../images/avatars/$foto");
    $stmt->execute($params);
    header("Location: ../view/tablesapotik.php");
    }catch(PDOException $e){
    echo "<div class='alert alert-danger alert-dismissible fade show'>
          <strong>Gagal!</strong> Data Anda gagal dihapus diakibatkan karena ". $e->getMessage()."</div>";
      }
  }
 ?>
