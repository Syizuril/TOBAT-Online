<?php
  require_once("../../config/config.php");
  require("../config/auth.php");
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
  <title>Kelola Data User - Admin TOBAT Online</title>

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="../../css/bootstrap-select.min.css">
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

  <!-- Latest compiled and minified JavaScript -->
  <script src="../../js/bootstrap-select.min.js"></script>

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
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
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
              <li class="breadcrumb-item"><a href="tabletransaksi.php">Pemesanan</a></li>
              <li class="breadcrumb-item active">Detail Pemesanan</li>
            </ol>
          </nav>
          <?php require("../config/editstatuspemesanan.php"); ?>
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Kelola Pemesanan</h1>
          <div class="row">
            <div class="col-md-4">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 mb-0">
                          <label class="small text-secondary mt-0 mb-0">No.Tagihan</label>
                        </div>
                        <div class="col-12 mt-0 mb-0">
                          <label class="mt-0 mb-0">IVC-TBT-<?php echo $data["nomor_transaksi"] ?></label>
                          <hr>
                        </div>
                        <div class="col-12 mb-0">
                          <label class="small text-secondary mt-0 mb-0">Status Tagihan</label>
                        </div>
                        <div class="col-12 mt-0 mb-0">
                          <label class="btn btn-info text-light mt-0 mb-0"><?php echo $data["status_bayar"] ?></label>
                          <hr>
                        </div>
                        <?php
                        if($data["status_bayar"]!=(("Menunggu Konfirmasi Admin")&&("Menunggu Konfirmasi Pembatalan"))){?>
                          <div class="col-12 mb-0">
                            <label class="small text-secondary mt-0 mb-0">Metode Pembayaran</label>
                          </div>
                          <div class="col-12 mt-0 mb-0">
                            <label class="mt-0 mb-0">Cara Membayar</label>
                            <hr>
                          </div>
                        <?php }
                        $no_transaksi=$data["nomor_transaksi"];
                        require("../config/readtransaksidata.php");
                        $total=0;
                        foreach ($data2 as $key) {
                         $total = $total + ($key["jumlah"] * $key["harga"]);
                        }
                         ?>
                         <div class="col-12 mb-0">
                           <label class="small text-secondary mt-0 mb-0">Total Pembayaran</label>
                         </div>
                         <div class="col-12 mt-0 mb-0">
                           <label class="mt-0 mb-0"><?php echo rp($total) ?></label>
                           <hr>
                         </div>
                         <div class="col-12 mb-0">
                           <label class="small text-secondary mt-0 mb-0">Alamat Pengiriman</label>
                         </div>
                         <div class="col-12 mt-0 mb-0">
                           <label class="mt-0 mb-0 font-weight-bold"><?php echo $data['nama']?></label><br>
                           <label class="mt-0 mb-0"><?php echo $data['alamat']?></label><br>
                           <label class="mt-0 mb-0">Telephone/Handphone: +62<?php echo $data['no_hp']?></label>
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 mt-4">
                  <div class="card">
                    <div class="card-header">
                      Proses Pemesanan
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                          <form action="#" method="post">
                          <label class="small text-secondary mt-0 mb-0">Pilih Apotek yang Dituju</label>
                          <div class="form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"> <i class="fas fa-stream"></i> </span>
                            </div>
                            <select class="selectpicker" name="id_apotek" data-live-search="true" width:auto required>
                              <option value="">Ketikkan Nama Kota Apotik</option>
                              <?php
                                $stmt3 = $db->prepare("SELECT * FROM user WHERE level=2");
                                $stmt3->execute();
                                $data3 = $stmt3->fetchAll();
                                foreach ($data3 as $apotik) {?>
                                  <option value="<?php echo $apotik['id'] ?>" data-tokens="<?php echo $apotik['alamat'] ?>"><?php echo $apotik['nama'] ?></option>
                                <?php }
                               ?>
                            </select>
                          </div> <!-- form-group// -->
                          <input type="hidden" name="nomor_transaksi" value="<?php echo $data['nomor_transaksi'] ?>">
                          <div class="form-group input-group mb-0">
                            <button type="submit" class="btn btn-success btn-block" name="proses"> Kirim Permohonan Apotik </button>
                          </div> <!-- form-group// -->
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-4">
                <div class="card-header">
                  <div class="row">
                    <div class="col-6 my-auto">
                     <h5>Detail Belanja Obat</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                      <?php
                      if($data["status_bayar"]=="Menunggu Konfirmasi Pembatalan"){?>
                        <button class="btn btn-warning mt-0 mb-0 text-light" disabled>Pesanan Akan Dibatalkan</button>
                      <?php }?>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="card">
                    <?php require("../config/readtransaksidata.php");
                      $total=0;
                      foreach ($data2 as $key) {
                      $total = $key["jumlah"] * $key["harga"];?>
                    <div class="card-header">
                      <div class="row">
                        <div class="col-6">
                          <div class="row">
                            <figure class="media my-auto">
                              <img width=100px src="../../images/items/<?php echo $key["foto_obat"] ?>" class="img-thumbnail img-sm">
                              <div class="my-auto ml-2">
                                <a class="text-dark" href="detailobat.php?id_obat="><h6><?php echo $key["nama_obat"] ?></h6></a>
                                <label class="small text-secondary">Jumlah : <?php echo $data["jumlah"]?></label>
                              </div>
                            </figure>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="row my-auto">
                            <div class="col-12 mt-3">
                              <label class="small text-secondary mt-0 mb-0">Harga Satuan</label>
                            </div>
                            <div class="col-12 mt-0 mb-0">
                              <label class="mt-0 mb-0"><?php echo rp($key["harga"]) ?></label>
                            </div>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="row">
                           <div class="col-12 mt-3">
                              <label class="small text-secondary mt-0 mb-0">Harga Total</label>
                           </div>
                           <div class="col-12 mt-0">
                             <label class="mt-0"><?php echo rp($total) ?></label>
                           </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <div class="row">
                           <div class="col-12 mb-0">
                             <label class="small text-secondary mt-0 mb-0">Status Pembelian</label>
                           </div>
                           <div class="col-12 mt-0 mb-0">
                             <?php if ($key['status_beli']=="menunggu_konfirmasi.png"):?>
                               <img width="100%" src="../../images/status/menunggu_konfirmasi_lg.png">
                             <?php endif; ?>
                           </div>
                           <div class="col-12 mb-0">
                             <label class="small text-secondary mt-0 mb-0">Apotek</label><br>
                             <?php
                             if (empty($data["id_apotek"])) {?>
                               <label class="text-warning mt-0 mb-0">Apotek Belum Dipilih</label>
                             <?php }
                              ?>
                           </div>
                          </div>
                        </div>
                      </div>
                    </div>
                   <?php } ?>
                  </div>
                </div>
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


</body>

</html>
