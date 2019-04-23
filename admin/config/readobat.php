<?php
  $stmt = $db->prepare("SELECT * FROM obat");
  $stmt->execute();
  $data = $stmt->fetchAll();

  function rp($angka){
	    $format_rupiah = "Rp " . number_format($angka,2,',','.');
	    return $format_rupiah;
   }
 ?>
