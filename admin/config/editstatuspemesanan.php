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
  if(isset($_POST['proses'])){
      try{
      //menyiapkan query
      $sql = "UPDATE transaksi SET id_admin=:id_admin,id_apotek=:id_apotek,status_beli=:status_beli,status_bayar=:status_bayar WHERE nomor_transaksi=:nomor_transaksi ";
      $stmt = $db->prepare($sql);

      //bind parameter kequery
      $params = array (
        ":nomor_transaksi"=>$_POST['nomor_transaksi'],
        ":id_admin" => $_SESSION['user']['id'],
        ":id_apotek" => $_POST['id_apotek'],
        ":status_beli" => "diproses_apotek.png",
        ":status_bayar" => "Menunggu Apotek Memproses"
      );

      //eksekusi query untuk menyimpan ke database
      $stmt->execute($params);
      echo "<div class='alert alert-success alert-dismissible fade show'>
            <strong>Berhasil!</strong> Pemesanan ini sedang diproses Apotek.</div>";
      }catch(PDOException $e){
      echo "<div class='alert alert-danger alert-dismissible fade show'>
            <strong>Gagal!</strong> Pemesanan ini gagal diproses diperbaharui diakibatkan karena ". $e->getMessage()."</div>";
      }
    }
    if(isset($_POST['cancel'])){
      try{
      //menyiapkan query
      $sql = "UPDATE transaksi SET id_admin=:id_admin,status_beli=:status_beli,status_bayar=:status_bayar WHERE nomor_transaksi=:nomor_transaksi ";
      $stmt = $db->prepare($sql);

      //bind parameter kequery
      $params = array (
        ":nomor_transaksi"=>$_POST['nomor_transaksi'],
        ":id_admin" => $_SESSION['user']['id'],
        ":status_beli" => "batal.png",
        ":status_bayar" => "Pesanan telah Dibatalkan"
      );

      //eksekusi query untuk menyimpan ke database
      $stmt->execute($params);
      echo "<div class='alert alert-success alert-dismissible fade show'>
            <strong>Berhasil!</strong> Pemesanan ini berhasil dibatalkan.</div>";
      }catch(PDOException $e){
      echo "<div class='alert alert-danger alert-dismissible fade show'>
            <strong>Gagal!</strong> Pemesanan ini gagal diproses dibatalkan diakibatkan karena ". $e->getMessage()."</div>";
      }
    }
 ?>
