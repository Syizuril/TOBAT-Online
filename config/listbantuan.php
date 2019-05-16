<?php
  $id_user=$_SESSION['user']['id'];
  $stmt = $db->prepare("SELECT * FROM bantuan WHERE id_user=$id_user GROUP BY id_bantuan ORDER BY id_bantuan DESC");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
