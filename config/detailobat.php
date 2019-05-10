<?php
  if(!isset($_GET['id_obat'])){
    die("Error: Id Obat Tidak Dimasukkan");
  }
  $stmt = $db->prepare("SELECT * FROM obat WHERE id_obat=:id_obat");

  $params = array (
    ":id_obat"=>$_GET['id_obat']
  );

  $stmt->execute($params);
  if($stmt->rowCount()==0){
    die("Error: Id Obat Tidak Ditemukan");
  }else{
    $data = $stmt->fetch();
  }
 ?>
