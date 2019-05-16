<?php
  $id_apotek=$_SESSION['user']['id'];
  $stmt = $db->prepare("SELECT bantuan.*,user.* FROM bantuan,user WHERE bantuan.id_apotek=$id_apotek GROUP BY bantuan.id_bantuan ORDER BY bantuan.id_bantuan DESC");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
