<?php
  require_once("../../config/config.php");
  require("../config/auth.php");
  require("../config/readtransaksi.php");
  require_once("../../config/rp.php");
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
      require("navbar/navitem1.php");
      require("navbar/navitem2.php"); ?>
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

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <?php
      require("navbar/navitem4.php");
      require("navbar/navitem5.php");
      require("navbar/navitem6.php");
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
              <li class="breadcrumb-item active"><a href="tabletransaksi.php">Pemesanan</a></li>
            </ol>
          </nav>

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Kelola Pemesanan</h1>
          <p class="mb-4">Berikut adalah tampilan data dari pemesanan yang ada saat ini, Anda dapat mengaturnya seperti mengonfirmasi pesanan, membatalkan pesanan, dsb</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="row">
                <div class="col-6">
                  <h6 class="m-0 mt-2 font-weight-bold text-primary">Data Pemesanan</h6>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <th>Nomor Transaksi</th>
                    <th>Nama Pemesan</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Status Pemesanan</th>
                  </thead>
                  <tfoot>
                    <th>Nomor Transaksi</th>
                    <th>Nama Pemesan</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Status Pemesanan</th>
                  </tfoot>
                  <tbody>
                    <?php foreach ($data as $value): ?>
                    <tr>
                        <td><a href="editstatuspemesanan.php?nomor_transaksi=<?php echo $value['nomor_transaksi'] ?>">IVC-TBT-<?php echo $value['nomor_transaksi'] ?></a></td>
                        <td><?php echo $value['nama'] ?></td>
                        <td><?php echo tgl_indo($value['tanggal']) ?></td>
                        <td>
                          <?php
                          if ($value['status_beli']=="menunggu_konfirmasi.png") {?>
                            <a href="editstatuspemesanan.php?nomor_transaksi=<?php echo $value['nomor_transaksi'] ?>" class="btn btn-info text-light d-block" name="button"><?php echo $value['status_bayar'] ?></button>
                          <?php }elseif ($value['status_beli']=="diproses_apotek.png") {?>
                            <a href="editstatuspemesanan.php?nomor_transaksi=<?php echo $value['nomor_transaksi'] ?>" class="btn btn-info text-light d-block" name="button"><?php echo $value['status_bayar'] ?></button>
                          <?php }elseif ($value['status_beli']=="batal.png") {?>
                            <a href="editstatuspemesanan.php?nomor_transaksi=<?php echo $value['nomor_transaksi'] ?>" class="btn btn-danger text-light d-block" name="button"><?php echo $value['status_bayar'] ?></button>
                          <?php }elseif ($value['status_beli']=="pembayaran.png") {?>
                            <a href="editstatuspemesanan.php?nomor_transaksi=<?php echo $value['nomor_transaksi'] ?>" class="btn btn-warning text-light d-block" name="button"><?php echo $value['status_bayar'] ?></button>
                          <?php }elseif ($value['status_beli']=="diproses_apotek_second.png") {?>
                            <a href="editstatuspemesanan.php?nomor_transaksi=<?php echo $value['nomor_transaksi'] ?>" class="btn btn-success text-light d-block" name="button"><?php echo $value['status_bayar'] ?></button>
                          <?php }elseif ($value['status_beli']=="pengiriman.png") {?>
                            <a href="editstatuspemesanan.php?nomor_transaksi=<?php echo $value['nomor_transaksi'] ?>" class="btn btn-success text-light d-block" name="button"><?php echo $value['status_bayar'] ?></button>
                          <?php }elseif ($value['status_beli']=="sampai.png") {?>
                            <a href="editstatuspemesanan.php?nomor_transaksi=<?php echo $value['nomor_transaksi'] ?>" class="btn btn-primary text-light d-block" name="button"><?php echo $value['status_bayar'] ?></button>
                          <?php }elseif ($value['status_beli']=="selesai.png") {?>
                            <a href="editstatuspemesanan.php?nomor_transaksi=<?php echo $value['nomor_transaksi'] ?>" class="btn btn-secondary text-light d-block" name="button"><?php echo $value['status_bayar'] ?></button>
                          <?php } ?>
                        </td>
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

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

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
