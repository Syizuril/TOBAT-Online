<?php
  if(!isset($_GET['id_obat'])){
    die("Error: Id Obat Tidak Dimasukkan");
  }
  $stmt = $db->prepare("SELECT * FROM obat WHERE id_obat=:id_obat");

  $params = array (
    ":id_obat"=>$_GET['id_obat']
  );

  $stmt->execute($params);
  if($stmt->rowCount()==0){
    die("Error: Id Obat Tidak Ditemukan");
  }else{
    $data = $stmt->fetch();
  }
  if(isset($_POST['edit'])){
    $nama_obat = filter_input(INPUT_POST,'nama_obat',FILTER_SANITIZE_STRING);
    $deskripsi_obat = filter_input(INPUT_POST,'deskripsi_obat',FILTER_SANITIZE_STRING);
    $kategori = filter_input(INPUT_POST,'kategori',FILTER_SANITIZE_STRING);
    $komposisi = filter_input(INPUT_POST,'komposisi',FILTER_SANITIZE_STRING);
    $indikasi = filter_input(INPUT_POST,'indikasi',FILTER_SANITIZE_STRING);
    $dosis = filter_input(INPUT_POST,'dosis',FILTER_SANITIZE_STRING);
    $penyajian = filter_input(INPUT_POST,'penyajian',FILTER_SANITIZE_STRING);
    $cara = filter_input(INPUT_POST,'cara',FILTER_SANITIZE_STRING);
    $perhatian = filter_input(INPUT_POST,'perhatian',FILTER_SANITIZE_STRING);
    $efek = filter_input(INPUT_POST,'efek',FILTER_SANITIZE_STRING);
    $kemasan = filter_input(INPUT_POST,'kemasan',FILTER_SANITIZE_NUMBER_INT);
    $pabrik = filter_input(INPUT_POST,'pabrik',FILTER_SANITIZE_STRING);
    $keterangan = filter_input(INPUT_POST,'keterangan',FILTER_SANITIZE_STRING);
    $referensi = filter_input(INPUT_POST,'referensi',FILTER_SANITIZE_STRING);
    $harga = filter_input(INPUT_POST,'harga',FILTER_SANITIZE_NUMBER_INT);
    $id_obat=$_GET['id_obat'];


    $folder ="../../images/items/";
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
    $sql = "UPDATE obat SET nama_obat=:nama_obat,deskripsi_obat=:deskripsi_obat,foto_obat=:foto_obat,kategori=:kategori,komposisi=:komposisi,indikasi=:indikasi,dosis=:dosis,penyajian=:penyajian,cara=:cara,perhatian=:perhatian,efek=:efek,kemasan=:kemasan,pabrik=:pabrik,keterangan=:keterangan,referensi=:referensi,harga=:harga WHERE id_obat=:id_obat";
    $stmt = $db->prepare($sql);

    //bind parameter kequery
    $params = array (
      "id_obat"=>$id_obat,
      ":nama_obat"=>$nama_obat,
      ":deskripsi_obat"=>$deskripsi_obat,
      ":foto_obat"=>$image,
      ":kategori"=>$kategori,
      ":komposisi"=>$komposisi,
      ":indikasi"=>$indikasi,
      ":dosis"=>$dosis,
      ":penyajian"=>$penyajian,
      ":cara"=>$cara,
      ":perhatian"=>$perhatian,
      ":efek"=>$efek,
      ":kemasan"=>$kemasan,
      ":pabrik"=>$pabrik,
      ":keterangan"=>$keterangan,
      ":referensi"=>$referensi,
      ":harga"=>$harga
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
