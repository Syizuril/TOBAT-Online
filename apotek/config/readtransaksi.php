<?php
  $id_apotek=$_SESSION['user']['id'];
  $stmt = $db->prepare("SELECT transaksi.*,obat.*,user.* FROM transaksi,obat,user WHERE transaksi.id_user=user.id AND transaksi.id_apotek=$id_apotek GROUP BY transaksi.nomor_transaksi");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
