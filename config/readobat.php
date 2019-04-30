<?php
  $stmt = $db->prepare("SELECT * FROM obat");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
