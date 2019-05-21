<?php
  $stmt = $db->prepare("SELECT * FROM promosi");
  $stmt->execute();
  $data = $stmt->fetchAll();

 ?>
