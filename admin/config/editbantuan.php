<?php
  if(!isset($_GET['id_bantuan'])){
    die("Error: Id_bantuan Tidak Dimasukkan");
  }
  if(isset($_GET['id_user'])){
  $stmt = $db->prepare("SELECT bantuan.*,user.* FROM bantuan,user WHERE bantuan.id_bantuan=:id_bantuan AND bantuan.id_user=user.id");
  }elseif(isset($_GET['id_apotek'])){
  $stmt = $db->prepare("SELECT bantuan.*,user.* FROM bantuan,user WHERE bantuan.id_bantuan=:id_bantuan AND bantuan.id_apotek=user.id");
  }
  $params = array (
    ":id_bantuan"=>$_GET['id_bantuan']
  );

  $stmt->execute($params);
  if($stmt->rowCount()==0){
    die("Error: Id bantuan Tidak Ditemukan");
  }else{
    $data = $stmt->fetch();
  }

  if(isset($_POST['submit'])){
    $jawaban = filter_input(INPUT_POST,'isijawaban',FILTER_SANITIZE_STRING);

    if (strlen($jawaban) < 255 ){
    //menyiapkan query
    try {
    $sql = "UPDATE bantuan SET id_admin=:id_admin,jawaban=:jawaban,status=:status WHERE id_bantuan=:id_bantuan";
    $stmt = $db->prepare($sql);

    //bind parameter kequery
    $params = array (
      ":id_admin"=>$_SESSION['user']['id'],
      ":id_bantuan"=>$_POST['id_bantuan'],
      ":jawaban"=>$jawaban,
      ":status"=>"Sudah Terjawab",
    );

    //eksekusi query untuk menyimpan ke database
    $stmt->execute($params);
    echo "<div class='alert alert-success alert-dismissible fade show'>
          <strong>Berhasil!</strong> Pesan Bantuan Anda berhasil dikirim.</div>";
    }catch(PDOException $e){
    echo "<div class='alert alert-danger alert-dismissible fade show'>
          <strong>Gagal!</strong> Pesan Bantuan Anda gagal dikirim diakibatkan karena ". $e->getMessage()."</div>";
      }
    }else{
    echo "<div class='alert alert-danger alert-dismissible fade show'>
          <strong>Gagal!</strong>Tidak bisa input isi permasalahan lebih dari 255 karakter.</div>";
        }

  }
 ?>
