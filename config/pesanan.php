<?php

  $data_obat = $_SESSION["keranjang"];
  if(isset($_POST["pesan"])){
    try{
    //menyiapkan query
    $sql = "INSERT INTO transaksi (nomor_transaksi,id_obat,id_user,jumlah,harga,tanggal,jam,status) VALUES (:nomor_transaksi, :id_obat, :id_user, :jumlah, :harga, :tanggal, :jam, :status)";
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
      ":status" => "Menunggu Konfirmasi Admin"
    );

    //eksekusi query untuk menyimpan ke database
    $stmt->execute($params);
    }catch(PDOException $e){
    echo "<div class='text-danger text-center small'>Pesanan gagal diakibatkan karena ". $e->getMessage()."</div>";
    }
  }

 ?>
