<?php
  $stmt = $db->prepare("SELECT * FROM user WHERE level=1");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
