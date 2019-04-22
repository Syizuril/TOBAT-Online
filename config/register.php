<?php
  if(isset($_POST['register'])){
    //filter data yang diinputkan agar tidak terkena serangan
    $nama = filter_input(INPUT_POST,'nama',FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST,'alamat',FILTER_SANITIZE_STRING);
    $no_hp = filter_input(INPUT_POST,'no_hp',FILTER_SANITIZE_NUMBER_INT);
    //enkripsi Password
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

    //menyiapkan query
    $sql = "INSERT INTO user (email,password,nama,no_hp,alamat,level) VALUES (:email, :password, :nama, :no_hp, :alamat, :level)";
    $stmt = $db->prepare($sql);

    //bind parameter kequery
    $params = array (
      ":email"=>$email,
      ":password"=>$password,
      ":nama"=>$nama,
      ":no_hp"=>$no_hp,
      ":alamat"=>$alamat,
      ":level"=>0
    );

    //eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    //jika query berhasil, maka user dialihkan ke halaman lain
    if($saved)header("Location: index.php");
  }
 ?>
