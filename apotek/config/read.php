<?php
  $stmt = $db->prepare("SELECT * FROM user WHERE level=0");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
