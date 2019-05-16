<?php
  $stmt = $db->prepare("SELECT bantuan.*,user.* FROM bantuan,user WHERE bantuan.id_user=user.id OR bantuan.id_apotek=user.id GROUP BY bantuan.id_bantuan");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
