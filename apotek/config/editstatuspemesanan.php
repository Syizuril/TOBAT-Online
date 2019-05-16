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
  if(isset($_POST['konfirmasi'])){
      try{
      //menyiapkan query
      $sql = "UPDATE transaksi SET id_apotek=:id_apotek,status_beli=:status_beli,status_bayar=:status_bayar WHERE nomor_transaksi=:nomor_transaksi ";
      $stmt = $db->prepare($sql);

      //bind parameter kequery
      $params = array (
        ":nomor_transaksi"=>$_POST['nomor_transaksi'],
        ":id_apotek" => $_SESSION['user']['id'],
        ":status_beli" => "pembayaran.png",
        ":status_bayar" => "Proses Pembayaran"
      );

      //eksekusi query untuk menyimpan ke database
      $stmt->execute($params);
      echo "<div class='alert alert-success alert-dismissible fade show'>
            <strong>Berhasil!</strong> Pemesanan ini dikonfirmasi.</div>";
      }catch(PDOException $e){
      echo "<div class='alert alert-danger alert-dismissible fade show'>
            <strong>Gagal!</strong> Pemesanan ini gagal diproses dikonfirmasi diakibatkan karena ". $e->getMessage()."</div>";
      }
    }
    if(isset($_POST['cancel'])){
      try{
      //menyiapkan query
      $sql = "UPDATE transaksi SET id_apotek=:id_apotek,status_beli=:status_beli,status_bayar=:status_bayar WHERE nomor_transaksi=:nomor_transaksi ";
      $stmt = $db->prepare($sql);

      //bind parameter kequery
      $params = array (
        ":nomor_transaksi"=>$_POST['nomor_transaksi'],
        ":id_apotek" => $_SESSION['user']['id'],
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
    if(isset($_POST['kirim'])){
      try{
      //menyiapkan query
      $sql = "UPDATE transaksi SET id_apotek=:id_apotek,status_beli=:status_beli,status_bayar=:status_bayar WHERE nomor_transaksi=:nomor_transaksi ";
      $stmt = $db->prepare($sql);

      //bind parameter kequery
      $params = array (
        ":nomor_transaksi"=>$_POST['nomor_transaksi'],
        ":id_apotek" => $_SESSION['user']['id'],
        ":status_beli" => "pengiriman.png",
        ":status_bayar" => "Pesanan Sedang Dikirim"
      );

      //eksekusi query untuk menyimpan ke database
      $stmt->execute($params);
      echo "<div class='alert alert-success alert-dismissible fade show'>
            <strong>Berhasil!</strong> Pemesanan ini berhasil dikirim.</div>";
      }catch(PDOException $e){
      echo "<div class='alert alert-danger alert-dismissible fade show'>
            <strong>Gagal!</strong> Pemesanan ini gagal diproses dikirim diakibatkan karena ". $e->getMessage()."</div>";
      }
    }
    if(isset($_POST['sampai'])){
      try{
      //menyiapkan query
      $sql = "UPDATE transaksi SET id_apotek=:id_apotek,status_beli=:status_beli,status_bayar=:status_bayar WHERE nomor_transaksi=:nomor_transaksi ";
      $stmt = $db->prepare($sql);

      //bind parameter kequery
      $params = array (
        ":nomor_transaksi"=>$_POST['nomor_transaksi'],
        ":id_apotek" => $_SESSION['user']['id'],
        ":status_beli" => "sampai.png",
        ":status_bayar" => "Pesanan Telah Disampaikan"
      );

      //eksekusi query untuk menyimpan ke database
      $stmt->execute($params);
      echo "<div class='alert alert-success alert-dismissible fade show'>
            <strong>Berhasil!</strong> Pemesanan ini berhasil disampaikan.</div>";
      }catch(PDOException $e){
      echo "<div class='alert alert-danger alert-dismissible fade show'>
            <strong>Gagal!</strong> Pemesanan ini gagal diproses disampaikan diakibatkan karena ". $e->getMessage()."</div>";
      }
    }
    if(isset($_POST['selesai'])){
      try{
      //menyiapkan query
      $sql = "UPDATE transaksi SET id_apotek=:id_apotek,status_beli=:status_beli, status_bayar=:status_bayar WHERE nomor_transaksi=:nomor_transaksi ";
      $stmt = $db->prepare($sql);

      //bind parameter kequery
      $params = array (
        ":nomor_transaksi"=>$_POST['nomor_transaksi'],
        ":id_apotek" => $_SESSION['user']['id'],
        ":status_beli" => "selesai.png",
        ":status_bayar" => "Selesai"
      );

      //eksekusi query untuk menyimpan ke database
      $stmt->execute($params);
      echo "<div class='alert alert-success alert-dismissible fade show'>
            <strong>Berhasil!</strong> Pesanan telah diselesaikan.</div>";
      }catch(PDOException $e){
      echo "<div class='alert alert-danger alert-dismissible fade show'>
            <strong>Gagal!</strong> Pesanan gagal diselesaikan diakibatkan karena ". $e->getMessage()."</div>";
        }
      }
 ?>
