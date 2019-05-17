<?php
  require_once("../config/config.php");
  require("config/auth.php");
  require_once("../config/rp.php");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard-TOBAT Online</title>
  <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style media="screen">
  .circle {
    height:200px;
    width:200px;
    border-radius:50%;
    background-image: url('../images/cover.jpg');
    background-position:center; background-size:cover;
  }
  </style>
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand mx-auto">
          <img src="../images/TOBATtrans.png" width="100">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Kelola
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Kelola Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelola Data:</h6>
            <a class="collapse-item" href="view/dataakun.php">Akun</a>
            <a class="collapse-item" href="view/tablesobat.php">Obat</a>
          </div>
        </div>
      </li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-cash-register"></i>
          <span>Pemesanan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pemesanan:</h6>
            <a class="collapse-item" href="view/tabletransaksi.php">Pesanan Masuk</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Tambahan
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="view/tablebantuan.php">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Bantuan Pelayanan</span></a>
      </li>
      <?php
      require("view/navbar/toggle.php")
      ?>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link" href="view/tablebantuan.php" >
                <i class="fas fa-envelope fa-fw"></i>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user']['nama']?></span>
                <img class="img-profile circle" src="../images/avatars/<?php echo $_SESSION['user']['foto'] ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="view/editadmin.php?email=<?php echo $_SESSION['user']['email'] ?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <?php
                      $total=0;
                      $status='Selesai';
                      $stmt = $db->prepare("SELECT transaksi.*,obat.*,user.* FROM transaksi,obat,user WHERE transaksi.id_user=user.id AND transaksi.id_obat=obat.id_obat AND transaksi.status_bayar=:status AND transaksi.tgl_bayar BETWEEN :start_date AND :end_date GROUP BY transaksi.id_transaksi");
                      $params = array (
                        ":status"=>$status,
                        ":start_date"=>strtotime("-1 month"),
                        ":end_date"=>date('Ymd')
                      );
                      $stmt->execute($params);
                      $data = $stmt->fetchAll();
                      foreach ($data as $value){
                      $total=$total+($value['jumlah']*$value['harga']);
                      } ?>
                      <div class="text-xs font-weight-bold text-primary mb-1">PENGHASILAN (BULANAN)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo rp($total); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <?php
                      $total=0;
                      $status='Selesai';
                      $stmt = $db->prepare("SELECT transaksi.*,obat.*,user.* FROM transaksi,obat,user WHERE transaksi.id_user=user.id AND transaksi.id_obat=obat.id_obat AND transaksi.status_bayar=:status GROUP BY transaksi.id_transaksi");
                      $params = array (
                        ":status"=>$status,
                      );
                      $stmt->execute($params);
                      $data = $stmt->fetchAll();
                      foreach ($data as $value){
                      $total=$total+($value['jumlah']*$value['harga']);
                      } ?>
                      <div class="text-xs font-weight-bold text-success mb-1">PENGHASILAN TOTAL</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo rp($total); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <?php
                      $i=0;
                      $status='Selesai';
                      $stmt = $db->prepare("SELECT transaksi.*,obat.*,user.* FROM transaksi,obat,user WHERE transaksi.status_bayar=:status  GROUP BY transaksi.nomor_transaksi");
                      $params = array (
                        ":status"=>$status,
                      );
                      $stmt->execute($params);
                      $data = $stmt->fetchAll();
                      foreach ($data as $value){
                      $i++;
                      } ?>
                      <div class="text-xs font-weight-bold text-info mb-1">TOTAL TRANSAKSI</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($i); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <?php
                      $i=0;
                      $status='selesai.png';
                      $stmt = $db->prepare("SELECT transaksi.*,obat.*,user.* FROM transaksi,obat,user WHERE transaksi.status_beli!=:status  GROUP BY transaksi.nomor_transaksi");
                      $params = array (
                        ":status"=>$status,
                      );
                      $stmt->execute($params);
                      $data = $stmt->fetchAll();
                      foreach ($data as $value){
                      $i++;
                      } ?>
                      <div class="text-xs font-weight-bold text-warning mb-1">PESANAN YANG BELUM SELESAI</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo ($i); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php require("view/navbar/footer.php"); ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mau keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" dibawah ini untuk mengakhiri sesi Anda.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" name="logout" href="config/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
