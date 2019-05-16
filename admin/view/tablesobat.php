<?php
  require_once("../../config/config.php");
  require("../config/auth.php");
  require("../config/readobat.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Kelola Data Obat - Admin TOBAT Online</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.ico">
  <!-- Custom fonts-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
            <a class="collapse-item active" href="tablesobat.html">Obat</a>
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

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Kelola Data Obat</a></li>
            </ol>
          </nav>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Kelola Data Obat</h1>
          <p class="mb-4">Berikut adalah tampilan data dari obat yang ditampilkan, Anda dapat mengaturnya seperti menambahkan, mengedit, hingga menghapus data obat tersebut.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="row">
                <div class="col-6">
                  <h6 class="m-0 mt-2 font-weight-bold text-primary">Data Obat</h6>
                </div>
                <div class="col-6">
                  <a href="tambahobat.php" class="float-right btn btn-info m-0">Tambah Obat</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <th width="20%">Nama Obat</th>
                    <th>Deskripsi</th>
                    <th width="20%">Kategori</th>
                    <th width="13%">Harga</th>
                  </thead>
                  <tfoot>
                    <th>Nama Obat</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                  </tfoot>
                  <tbody>
                    <?php foreach ($data as $value): ?>
                    <tr>
                        <td><a href="editobat.php?id_obat=<?php echo $value['id_obat'] ?>"><?php echo $value['nama_obat'] ?></a></td>
                        <td><?php echo $value['deskripsi_obat'] ?></td>
                        <td><?php echo $value['kategori'] ?></td>
                        <td><?php echo rp($value['harga']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
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
