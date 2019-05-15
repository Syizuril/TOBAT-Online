<?php
  if(isset($_POST['login'])){
    $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

    $sql = "SELECT * from user WHERE email=:email";
    $stmt = $db->prepare($sql);

    //bind parameter ke query
    $params = array(
      ":email"=>$email
    );
    $stmt->execute($params);
    //Jika user terdaftar
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user){
      //verifikasi password
      if(password_verify($password,$user["password"])){
        //buat session
        session_start();
        $level=$user["level"];
        $_SESSION["user"]=$user;
        $_SESSION["level"]=$level;
        if ($level==1) {
          header("Location: ../admin/index.php");
        }elseif($level==2){
          //login sukses, alihkan ke halaman timeline
          header("Location: ../apotek/index.php");
        }elseif($level==0){
          //login sukses, alihkan ke halaman timeline
          header("Location: ../index.php");
        }
      }else{
        echo "<div class='text-danger text-center small'>Password yang Anda Masukkan salah</div>";
      }
    }else{
      echo "<div class='text-danger text-center small'>Username belum terdaftar</div>";
    }
  }
 ?>
