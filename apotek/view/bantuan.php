<?php
  require_once("../../config/config.php");
  require("../config/auth.php");
  require_once("../../config/tgl_indo.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.ico">
  <title>Kelola Transaksi - Admin TOBAT Online</title>

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script type="text/javascript">
    function numberOfCharacters(textbox,limit,indicator) {
      chars = document.getElementById(textbox).value.length;
      document.getElementById(indicator).innerHTML = limit-chars;
    }
  </script>
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
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
      <?php
      require("navbar/sidebrand.php");
      require("navbar/navitem1.php"); ?>
      <!-- Heading -->
      <div class="sidebar-heading">
        Pemesanan
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-cash-register"></i>
          <span>Pemesanan</span>
        </a>
        <div id="collapseUtilities" class="collapse show"  aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pemesanan:</h6>
            <a class="collapse-item active" href="tabletransaksi">Pesanan Masuk</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

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
          <?php require("../config/bantuan.php"); ?>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="tablebantuan.php">Daftar Pertanyaan</a></li>
              <li class="breadcrumb-item active">Pertanyaan</li>
            </ol>
          </nav>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Buat Formulir Permasalahan</h1>
          <p class="mb-4">Terdapat masalah dalam memesan ? Silahkan kirim pertanyaanmu kepada Administrator. Pertanyaan Anda akan dijawab dalam beberapa saat kemudian.</p>

          <div class="card mb-4">
           <div class="card-header">
                <h1 class="h6 mb-0 text-gray-800">Buat Formulir Permasalahan</h1>
           </div>
           <div class="card-body">
             <div class="row">
               <div class="col-12">
                 <form action="#" method="get">
                 <div class="form-group">
                   <label>Judul Permasalahan</label>
                   <input class="form-control" type="text" name="judul" value="" required>
                 </div>
                 <div class="form-group">
                   <label for="mytextbox">
                       Isi Permasalahan (Maks 255 karakter.)
                       <span class="text-muted" id="characterlimit">255</span><span class="text-muted"> karakter tersisa</span>
                   </label>
                   <br/>
                   <textarea name="isipermasalahan" class="form-control" id="mytextbox" rows="5" cols="40" onkeyup="numberOfCharacters('mytextbox',255,'characterlimit');"></textarea>
                 </div>
                 <div class="Form-group">
                     <button type="submit" class="btn btn-success btn-block" name="bantuan"> Kirim Bantuan </button>
                 </div>
               </form>
               </div>
             </div>
           </div>
          </div>
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

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
