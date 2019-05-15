<?php
  $stmt = $db->prepare("SELECT * FROM user WHERE level=2");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
