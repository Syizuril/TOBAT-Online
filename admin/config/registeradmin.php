<?php
  if(isset($_POST['register'])){
    //filter data yang diinputkan agar tidak terkena serangan
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
    $sql = "INSERT INTO user (email,password,nama,no_hp,alamat,level,foto) VALUES (:email, :password, :nama, :no_hp, :alamat, :level, :foto)";
    $stmt = $db->prepare($sql);

    //bind parameter kequery
    $params = array (
      ":email"=>$email,
      ":password"=>$password,
      ":nama"=>$nama,
      ":no_hp"=>$no_hp,
      ":alamat"=>$alamat,
      ":level"=>1,
      ":foto"=>$image
    );

    //eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);
    if($saved){
        echo "<div class='alert alert-success alert-dismissible fade show'>
            <strong>Berhasil!</strong> Data Anda berhasil ditambahkan.</div>";
      }else{
        echo "<div class='alert alert-danger alert-dismissible fade show'>
            <strong>Gagal!</strong> Data Anda gagal ditambahkan diakibatkan beberapa sebab </div>";
      }
    }
  }
 ?>
