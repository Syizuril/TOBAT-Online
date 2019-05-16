<?php
    $stmt = $db->prepare("SELECT * FROM bantuan WHERE id_bantuan=:id_bantuan");

    $params = array (
      ":id_bantuan"=>$_GET['id_bantuan']
    );

    $stmt->execute($params);
    if($stmt->rowCount()==0){
      die("Error: Id Bantuan Tidak Ditemukan");
    }else{
      $data = $stmt->fetch();
    }
 ?>
