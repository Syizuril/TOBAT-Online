<?php
  if(!isset($_GET['email'])){
    die("Error: Email Tidak Dimasukkan");
  }
  $stmt = $db->prepare("SELECT * FROM user WHERE email=:email");

  $params = array (
    ":email"=>$_GET['email']
  );

  $stmt->execute($params);
  if($stmt->rowCount()==0){
    die("Error: Email Tidak Ditemukan");
  }else{
    $data = $stmt->fetch();
  }
  if(isset($_POST['submit'])){
    $nama = filter_input(INPUT_POST,'nama',FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST,'alamat',FILTER_SANITIZE_STRING);
    $no_hp = filter_input(INPUT_POST,'no_hp',FILTER_SANITIZE_NUMBER_INT);
    //enkripsi Password
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    $folder ="../../images/avatars/";
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
    $sql = "UPDATE user SET email=:email,password=:password,nama=:nama,no_hp=:no_hp,alamat=:alamat,foto=:foto,sia=:sia WHERE email=:email";
    $stmt = $db->prepare($sql);

    //bind parameter kequery
    $params = array (
      ":email"=>$email,
      ":password"=>$password,
      ":nama"=>$nama,
      ":no_hp"=>$no_hp,
      ":alamat"=>$alamat,
      ":foto"=>$image,
      ":sia"=>$sia
    );

    //eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);
    if($saved){
        echo "<div class='alert alert-success alert-dismissible fade show'>
            <strong>Berhasil!</strong> Data Anda berhasil diperbaharui.</div>";
      }else{
        echo "<div class='alert alert-danger alert-dismissible fade show'>
            <strong>Gagal!</strong> Data Anda gagal diperbaharui diakibatkan beberapa sebab </div>";
      }
    }
  }
 ?>
