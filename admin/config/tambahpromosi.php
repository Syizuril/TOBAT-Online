<?php
  if(isset($_POST['tambah'])){
    //filter data yang diinputkan agar tidak terkena serangan
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
      echo "Terdapat kesalahan dalam mengupload gambar, silahkan periksa ekstensi file dan keberadaan foto tersebut.";
    }else{
      move_uploaded_file( $_FILES['image'] ['tmp_name'], $path);

    //menyiapkan query
    try{
    $sql = "INSERT INTO promosi (judul,ringkasan,deskripsi,foto) VALUES (:judul, :ringkasan, :deskripsi, :foto)";
    $stmt = $db->prepare($sql);

    //bind parameter kequery
    $params = array (
      ":judul"=>$judul,
      ":ringkasan"=>$ringkasan,
      ":deskripsi"=>$deskripsi,
      ":foto"=>$image
    );

    //eksekusi query untuk menyimpan ke database
    $stmt->execute($params);
    echo "<div class='alert alert-success alert-dismissible fade show'>
          <strong>Berhasil!</strong> Data Anda berhasil ditambahkan.</div>";
    }catch(PDOException $e){
    echo "<div class='alert alert-danger alert-dismissible fade show'>
          <strong>Gagal!</strong> Data Anda gagal ditambahkan diakibatkan karena ". $e->getMessage()."</div>";
      }
    }
  }
 ?>
