<?php
  if(isset($_GET['bantuan'])){
    $judul = filter_input(INPUT_GET,'judul',FILTER_SANITIZE_STRING);
    $isi = filter_input(INPUT_GET,'isipermasalahan',FILTER_SANITIZE_STRING);

    if (strlen($isi) < 255 ){
    //menyiapkan query
    try {
    $sql = "INSERT INTO bantuan (id_user,judul,isi,tanggal,status) VALUES (:id_user, :judul, :isi, :tanggal, :status)";
    $stmt = $db->prepare($sql);

    //bind parameter kequery
    $params = array (
      ":id_user"=>$_SESSION['user']['id'],
      ":judul"=>$judul,
      ":isi"=>$isi,
      ":tanggal"=> date("Ymd"),
      ":status"=>"Belum Terjawab",
    );

    //eksekusi query untuk menyimpan ke database
    $stmt->execute($params);
    echo "<div class='text-success text-center small'>
          <strong>Berhasil!</strong> Pesan Bantuan Anda berhasil dikirim.</div>";
    }catch(PDOException $e){
    echo "<div class='text-danger text-center small'>
          <strong>Gagal!</strong> Pesan Bantuan Anda gagal dikirim diakibatkan karena ". $e->getMessage()."</div>";
      }
    }else{
    echo "<div class='text-danger text-center small'>
          <strong>Gagal!</strong>Tidak bisa input isi permasalahan lebih dari 255 karakter.</div>";
  }
}
?>
