<?php
  if(!isset($_GET['id_promosi'])){
    die("Error: Id Promosi Tidak Dimasukkan");
  }
  $stmt = $db->prepare("SELECT * FROM promosi WHERE id_promosi=:id_promosi");

  $params = array (
    ":id_promosi"=>$_GET['id_promosi']
  );

  $stmt->execute($params);
  if($stmt->rowCount()==0){
    die("Error: Id Promosi Tidak Ditemukan");
  }else{
    $data = $stmt->fetch();
  }
  if(isset($_POST['edit'])){
    $judul= filter_input(INPUT_POST,'judul_promosi',FILTER_SANITIZE_STRING);
    $ringkasan = filter_input(INPUT_POST,'ringkasan_promosi',FILTER_SANITIZE_STRING);
    $deskripsi = filter_input(INPUT_POST,'deskripsi_promosi',FILTER_SANITIZE_STRING);

    $folder ="../../images/banners/";
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

    //menyiapkan query
    try{
    $sql = "UPDATE promosi SET judul=:judul,ringkasan=:ringkasan,deskripsi=:deskripsi,foto=:foto WHERE id_promosi=:id_promosi";
    $stmt = $db->prepare($sql);

    //bind parameter kequery
    $params = array (
      ":id_promosi"=>$_GET['id_promosi'],
      ":judul"=>$judul,
      ":ringkasan"=>$ringkasan,
      ":deskripsi"=>$deskripsi,
      ":foto"=>$image
    );

    //eksekusi query untuk menyimpan ke database
    $stmt->execute($params);
    echo "<div class='alert alert-success alert-dismissible fade show'>
          <strong>Berhasil!</strong> Data Anda berhasil diperbaharui.</div>";
    }catch(PDOException $e){
    echo "<div class='alert alert-danger alert-dismissible fade show'>
          <strong>Gagal!</strong> Data Anda gagal diperbaharui diakibatkan karena ". $e->getMessage()."</div>";
      }
    }
  }
 ?>
