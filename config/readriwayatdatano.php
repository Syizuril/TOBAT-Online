<?php
  $no_transaksi=$value["nomor_transaksi"];
  $stmt2 = $db->prepare("SELECT transaksi.*,obat.* FROM transaksi,obat WHERE nomor_transaksi=$no_transaksi AND transaksi.id_obat=obat.id_obat");
  $stmt2->execute();
  $data2 = $stmt2->fetchAll();
 ?>
