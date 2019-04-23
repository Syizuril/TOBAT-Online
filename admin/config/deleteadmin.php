<?php
  require("../../config/config.php");
  if(isset($_GET["email"])){
    //prepared statement untuk menghapus data
    $sql = "DELETE FROM user WHERE email=:email";
    $stmt = $db->prepare($sql);
    $params = array (
      ":email"=>$_GET['email']
    );
    $foto = $_GET['foto'];
    unlink("../../images/avatars/$foto");
    $saved = $stmt->execute($params);
    if($saved){
        header("Location: ../view/tablesadmin.php");
      }
  }
 ?>
