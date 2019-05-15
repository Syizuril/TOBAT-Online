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
  if(isset($_GET['batalkan'])){
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
    }
    if(isset($_POST['kirim'])){
      $folder ="../images/bukti/";
      $image = $_FILES['image']['name'];
      $path = $folder . $image ;
      $target_file=$folder.basename($_FILES["image"]["name"]);
      $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
      $allowed=array('jpeg','png' ,'jpg');
      $filename=$_FILES['image']['name'];
      $ext=pathinfo($filename, PATHINFO_EXTENSION);

      if(!in_array($ext,$allowed))
      {
        echo "<div class='alert alert-danger alert-dismissible fade show'>
              <strong>Terdapat kesalahan dalam mengupload gambar,</strong> silahkan periksa ekstensi file dan keberadaan foto tersebut.</div>";
      }else{
        move_uploaded_file( $_FILES['image'] ['tmp_name'], $path);

      try{
      //menyiapkan query
      $sql = "UPDATE transaksi SET tgl_bayar=:tgl_bayar,bukti=:bukti,status_beli=:status_beli, status_bayar=:status_bayar WHERE nomor_transaksi=:nomor_transaksi ";
      $stmt = $db->prepare($sql);

      //bind parameter kequery
      $params = array (
        ":nomor_transaksi"=>$_POST['nomor_transaksi'],
        ":tgl_bayar" => date("Ymd"),
        ":bukti"=>$image,
        ":status_beli" => "diproses_apotek_second.png",
        ":status_bayar" => "Verifikasi Pembayaran"
      );

      //eksekusi query untuk menyimpan ke database
      $stmt->execute($params);
      echo "<div class='text-success text-center small'>
            <strong>Berhasil!</strong> Bukti Pembayaran telah dikirim.</div>";
      }catch(PDOException $e){
      echo "<div class='text-success text-center small'>
            <strong>Gagal!</strong> Bukti pembayaran gagal dikirim diakibatkan karena ". $e->getMessage()."</div>";
        }
      }
    }
    if(isset($_POST['selesai'])){
      try{
      //menyiapkan query
      $sql = "UPDATE transaksi SET status_beli=:status_beli, status_bayar=:status_bayar WHERE nomor_transaksi=:nomor_transaksi ";
      $stmt = $db->prepare($sql);

      //bind parameter kequery
      $params = array (
        ":nomor_transaksi"=>$_POST['nomor_transaksi'],
        ":status_beli" => "selesai.png",
        ":status_bayar" => "Selesai"
      );

      //eksekusi query untuk menyimpan ke database
      $stmt->execute($params);
      echo "<div class='text-success text-center small'>
            <strong>Berhasil!</strong> Pesanan telah diselesaikan.</div>";
      }catch(PDOException $e){
      echo "<div class='text-success text-center small'>
            <strong>Gagal!</strong> Pesanan gagal diselesaikan diakibatkan karena ". $e->getMessage()."</div>";
        }
      }
 ?>
