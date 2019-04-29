<?php
  $stmt = $db->prepare("SELECT * FROM obat WHERE kategori='Obat Batuk dan Pilek'");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
