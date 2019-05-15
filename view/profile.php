<?php
  require_once("../config/config.php");
  require("../config/auth.php");
  require("../config/editprofil.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile - TOBAT Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">

    <!-- jQuery -->
    <script src="../js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="../js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="../fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="../plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
    <script src="../plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- custom style -->
    <link href="../css/ui.css" rel="stylesheet" type="text/css"/>
    <link href="../css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="../js/script.js" type="text/javascript"></script>
    <style media="screen">
    .dropdown-toggle_a::after {
      display: none;
    }
    .dropdown_a:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }
    .circle {
      height:35px;
      width:35px;
      border-radius:50%;
      background-image: url('../images/cover.jpg');
      background-position:center; background-size:cover;
    }
    </style>
  </head>
  <body>
    <?php
      if(!isset($_SESSION["user"])) {
        require("header.php");
      }else{
        require("header_login.php");
      }
     ?>
       <!-- ========================= SECTION CONTENT ========================= -->
       <section class="section-content bg padding-y-sm ">
       <div class="container">
       <nav class="mb-3">
         <ol class="breadcrumb">
           <li class="breadcrumb-item text-uppercase"><a href="index-login.php">Home</a></li>
           <li class="breadcrumb-item text-uppercase active text-success" aria-current="page">Profil</li>
       </ol>
       </nav>
       <div class="card mb-4">
        <div class="card-header">
             <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        </div>
         <div class="card-body">
           <form action="" method="POST" enctype="multipart/form-data" oninput='password2.setCustomValidity(password2.value != password.value ? "Password tidak sesuai." : "")'>
           <div class="row">
             <div class="col-md-3">
               <!-- Basic Card Example -->
               <div class="card shadow mb-4">
                 <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-success">Foto</h6>
                 </div>
                 <div class="card-body">
                   <img class="mx-auto d-block" width="100%" src="../images/avatars/<?php echo $data['foto'] ?>">
                   <div class="form-group input-group my-3">
                     <div class="input-group-prepend">
                       <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                       <input name="nama" class="form-control" placeholder="Nama Panjang" type="text" value="<?php echo $data['nama'] ?>" required>
                   </div> <!-- form-group// -->
                   <div class="form-group input-group">
                      <input class="input-group-text custom-file-input" style="width: 100%" type="file" name="image" required>
                      <label class="custom-file-label text-secondary" for="customFile">Unggah Foto</label>
                   </div> <!-- form-group// -->
                 </div>
               </div>

             </div>
             <div class="col-md-9">
               <!-- Basic Card Example -->
               <div class="card shadow mb-4">
                 <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-success">Data Akun</h6>
                 </div>
                 <div class="card-body">
                   <div class="form-group input-group">
                     <div class="input-group-prepend">
                       <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                     </div>
                       <input name="email" class="form-control" placeholder="Alamat Email" type="email" value="<?php echo $data['email'] ?>" readonly="readonly">
                   </div> <!-- form-group// -->
                   <div class="form-group input-group">
                     <div class="input-group-prepend">
                       <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                     </div>
                     <select class="custom-select" style="max-width: 120px;">
                       <option selected="">+62</option>
                     </select>
                       <input name="no_hp" class="form-control" placeholder="Nomor Telepon" type="number" value="<?php echo $data['no_hp'] ?>" required>
                   </div> <!-- form-group// -->
                   <div class="form-group input-group">
                     <div class="input-group-prepend">
                       <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                     </div>
                     <input name="alamat" class="form-control" placeholder="Alamat" type="text" value="<?php echo $data['alamat'] ?>" required>
                   </div> <!-- form-group end.// -->
                   <label class="font-weight-bold text-success">Ganti Password</label>
                   <div class="form-group input-group">
                     <div class="input-group-prepend">
                       <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                     </div>
                       <input name="passwordsebelumnya" class="form-control" placeholder="Password Sebelumnya" type="password" required>
                   </div> <!-- form-group// -->
                   <div class="form-group input-group">
                     <div class="input-group-prepend">
                       <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                     </div>
                       <input name="password" class="form-control" placeholder="Password" type="password" required>
                   </div> <!-- form-group// -->
                   <div class="form-group input-group">
                     <div class="input-group-prepend">
                       <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                     </div>
                       <input name="password2" class="form-control" placeholder="Ulangi password" type="password" required>
                   </div> <!-- form-group// -->
                   <div class="form-group input-group mb-0">
                     <button type="submit" class="btn btn-info btn-block" name="submit"> Edit Akun </button>
                   </div> <!-- form-group// -->
                 </div>
               </div>

             </div>

           </div>
         </form>
         </div>
       </div>
     </div>
   </div>
   <?php
    require("section/footer.php");
    ?>
  </body>
  <div class="modal fade" id="masuk2" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Silahkan Login untuk Melanjutkan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <div class="col-7 mx-auto mt-5">
              <div class="text-center">
                <img src="../images/icons/login.svg" alt="Daftar Belanja" width="70%">
                <h5 class="small text-secondary mt-4">Yuk segera login, obatmu sudah menunggumu lho.. !</h5>
              </div>
                <form class="form-horizontal" action="index.php" method="POST">
                  <div class="form-group input-icon">
                    <i class="fa fa-user"></i>
                      <input name="email" class="form-control" placeholder="Email" type="email" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-icon">
                    <i class="fa fa-lock"></i>
                    <input name="password" class="form-control" placeholder="******" type="password" required>
                  </div> <!-- form-group// -->
            </div>
        </div>
       </div>
    </div>
    <div class="modal-footer">
      <div class="container">
        <div class="row">
          <div class="col text-center">
              <button name="login" type="submit" class="btn btn-success btn-block"> Masuk </button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</html>
