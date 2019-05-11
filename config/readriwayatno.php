<?php
  $id_user=$_SESSION['user']['id'];
  $stmt = $db->prepare("SELECT * FROM transaksi WHERE id_user=$id_user GROUP BY nomor_transaksi");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
