<?php
  date_default_timezone_set('Asia/Jakarta');
  $hariini = date("Ymd");
  $stmt = $db->prepare("SELECT max(nomor_transaksi) as maxID FROM transaksi WHERE nomor_transaksi LIKE '$hariini%'");
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);
  $idMax = $data['maxID'];

  //setelah membaca id terakhir, lanjut mencari nomor urut id dari id terakhir
  $NoUrut = (int) substr($idMax, 8, 4);
  $NextNoUrut = $NoUrut+1; //nomor urut +1

  //setelah ketemu id terakhir lanjut membuat id baru dengan format sbb:
  $NewID = $hariini .sprintf('%04s', $NextNoUrut);

 ?>
