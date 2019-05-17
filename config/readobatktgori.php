<?php
  if(isset($_GET['kategori'])){
    $kategori = $_GET['kategori'];
    $stmt = $db->prepare("SELECT * FROM obat WHERE kategori='$kategori'");
    $stmt->execute();
    $data = $stmt->fetchAll();
  }
 ?>
