<?php
  require_once("../../config/config.php");
  require("../config/auth.php");
  require("../config/readbantuan.php");
  require("../../config/tgl_indo.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kelola Data Bantuan - Admin TOBAT Online</title>
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
      <?php
      require("navbar/navitem2.php");
      require("navbar/navitem3.php") ?>

      <!-- Heading -->
      <div class="sidebar-heading">
        Tambahan
      </div>
      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="tablebantuan.php">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Bantuan Pelayanan</span></a>
      </li>
      <?php
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
              <li class="breadcrumb-item active" aria-current="page">Daftar Bantuan</a></li>
            </ol>
          </nav>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Kelola Daftar Bantuan</h1>
          <p class="mb-4">Berikut adalah tampilan data dari daftar bantuan, Anda dapat mengaturnya seperti mengedit hingga menghapus data tersebut.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="row">
                <div class="col-6">
                  <h6 class="m-0 mt-2 font-weight-bold text-primary">Daftar Bantuan</h6>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Judul</th>
                    <th>Status</th>
                  </thead>
                  <tfoot>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Judul</th>
                    <th>Status</th>
                  </tfoot>
                  <tbody>
                    <?php foreach ($data as $value): ?>
                    <tr>
                        <?php
                        if(!empty($value['id_user'])){?>
                        <td><a href="jawabbantuan.php?id_bantuan=<?php echo $value['id_bantuan']?>&id_user=<?php echo $value['id_user'] ?>"><?php echo $value['nama'] ?></a></td>
                        <?php }else{ ?>
                        <td><a href="jawabbantuan.php?id_bantuan=<?php echo $value['id_bantuan']?>&id_apotek=<?php echo $value['id_apotek'] ?>"><?php echo $value['nama'] ?></a></td>
                        <?php }?>
                        <td><?php echo tgl_indo($value['tanggal']) ?></td>
                        <td><?php echo $value['judul'] ?></td>
                        <?php if($value['status']!='Sudah Terjawab'){ ?>
                        <td> <button type="button" class="btn btn-info btn-block"><?php echo $value['status'] ?></button></td>
                        <?php }else{ ?>
                        <td> <button type="button" class="btn btn-secondary btn-block"><?php echo $value['status'] ?></button></td>
                        <?php } ?>
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
