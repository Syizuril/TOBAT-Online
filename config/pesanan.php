<?php
  $data_obat = $_SESSION["keranjang"];
  if(isset($_POST["pesan"])){
    try{
    //menyiapkan query
    $sql = "INSERT INTO transaksi (nomor_transaksi,id_obat,id_user,jumlah,harga,tanggal,jam,alamat,status_beli,status_bayar) VALUES (:nomor_transaksi, :id_obat, :id_user, :jumlah, :harga, :tanggal, :jam, :alamat, :status_beli, :status_bayar)";
    $stmt = $db->prepare($sql);

    //bind parameter kequery
    $params = array (
      ":nomor_transaksi" => $NewID,
      ":id_obat" => $values["id_obat"],
      ":id_user" => $_SESSION['user']['id'],
      ":jumlah"=> $values["jumlah"],
      ":harga" => $values["harga"],
      ":tanggal" => date("Ymd"),
      ":jam" => date('H:i:s a'),
      ":alamat" => $_POST["alamat"],
      ":status_beli" => "menunggu_konfirmasi.png",
      ":status_bayar" => "Menunggu Konfirmasi Admin"
    );

    //eksekusi query untuk menyimpan ke database
    $stmt->execute($params);
    echo "<script>window.location.replace('pemesanan.php');</script>";
    unset($_SESSION["keranjang"]);
    }catch(PDOException $e){
    echo "<div class='text-danger text-center small'>Pesanan gagal diakibatkan karena ". $e->getMessage()."</div>";
    }
  }

 ?>
