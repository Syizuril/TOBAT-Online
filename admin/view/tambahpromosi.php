<?php
  require_once("../../config/config.php");
  require("../config/auth.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tambah Obat - TOBAT Online</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.ico">
  <!-- Custom fonts-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <style media="screen">
    .circle {
      height:200px;
      width:200px;
      border-radius:50%;
      background-image: url('../../images/cover.jpg');
      background-position:center; background-size:cover;
    }
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
      <?php
      require("navbar/sidebrand.php");
      require("navbar/navitem1.php");
      ?>

      <!-- Heading -->
      <div class="sidebar-heading">
        Kelola
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Kelola Data</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelola Data:</h6>
            <a class="collapse-item" href="dataakun.php">Akun</a>
            <a class="collapse-item" href="tablesobat.php">Obat</a>
            <a class="collapse-item active" href="tablepromosi.php">Promosi</a>
          </div>
        </div>
      </li>
      <?php require("navbar/navitem3.php") ?>

      <!-- Heading -->
      <div class="sidebar-heading">
        Tambahan
      </div>

      <?php
      require("navbar/navitem5.php");
      require("navbar/toggle.php")
      ?>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require("topbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="tablepromosi.php">Kelola Data Promosi</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data Promosi</li>
              </ol>
            </nav>
            <?php
              require("../config/tambahpromosi.php");
             ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
          </div>
          <form action="" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Foto</h6>
                </div>
                <div class="card-body">
                  <img class="mx-auto d-block img-profile" style='width: 100%' src="../../images/banners/slide1.jpg">
                  <div class="form-group input-group my-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                      <input name="judul_promosi" class="form-control" placeholder="Judul Promosi" type="text" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <input class="input-group-text custom-file-input" style="width: 100%" type="file" name="image" onchange='$("#upload-file-info").html($(this).val());'>
                    <label class="custom-file-label text-secondary" for="customFile" id="upload-file-info">Unggah Foto</label>
                  </div> <!-- form-group// -->
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Promosi</h6>
                </div>
                <div class="card-body">
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-book-open"></i> </span>
                    </div>
                      <textarea name="ringkasan_promosi" class="form-control" placeholder="Ringkasan Promosi" rows="3" required></textarea>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-book-reader"></i> </span>
                    </div>
                      <textarea name="deskripsi_promosi" class="form-control" placeholder="Deskripsi Promosi" rows="5" required></textarea>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group mb-0">
                    <button type="submit" class="btn btn-success btn-block" name="tambah"> Tambah Promosi </button>
                  </div> <!-- form-group// -->
                </div>
              </div>

            </div>

          </div>
        </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php require("navbar/footer.php"); ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="../#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php require("logoutmodal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
