<?php
  if(!isset($_GET['nomor_transaksi'])){
    die("Error: Nomor Transaksi Tidak Dimasukkan");
  }
    $stmt = $db->prepare("SELECT transaksi.*,obat.*,user.* FROM transaksi,obat,user WHERE nomor_transaksi=:nomor_transaksi AND transaksi.id_obat=obat.id_obat AND user.id=transaksi.id_user");

    $params = array (
      ":nomor_transaksi"=>$_GET['nomor_transaksi']
    );

    $stmt->execute($params);
    if($stmt->rowCount()==0){
      die("Error: Id Obat Tidak Ditemukan");
    }else{
      $data = $stmt->fetch();
    }
  if(isset($_GET['batalkan']))
      try{
      //menyiapkan query
      $sql = "UPDATE transaksi SET status_beli=:status_beli, status_bayar=:status_bayar WHERE nomor_transaksi=:nomor_transaksi ";
      $stmt = $db->prepare($sql);

      //bind parameter kequery
      $params = array (
        ":nomor_transaksi"=>$_GET['nomor_transaksi'],
        ":status_beli" => "menunggu_konfirmasi.png",
        ":status_bayar" => "Menunggu Konfirmasi Pembatalan"
      );

      //eksekusi query untuk menyimpan ke database
      $stmt->execute($params);
      echo "<div class='text-danger text-center small'>Pesanan akan dibatalkan. Mohon tunggu konfirmasi Admin untuk pembatalan pemesanan</div>";
      }catch(PDOException $e){
      echo "<div class='text-danger text-center small'>Pesanan gagal diakibatkan karena ". $e->getMessage()."</div>";
      }
 ?>
