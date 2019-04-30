<?php
  $stmt = $db->prepare("SELECT * FROM obat WHERE kategori='Antiseptik dan Desinfektan Kulit'");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
