<?php
  $stmt = $db->prepare("SELECT transaksi.*,obat.*,user.* FROM transaksi,obat,user WHERE transaksi.id_user=user.id GROUP BY transaksi.nomor_transaksi");
  $stmt->execute();
  $data = $stmt->fetchAll();
 ?>
