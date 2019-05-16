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
  <title>Kelola Data User - Admin TOBAT Online</title>

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

        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <center>
        		<h2>DATA LAPORAN TRANSAKSI</h2>
        		<h4>PENJUALAN OBAT TOKO OBAT ONLINE</h4>
        	</center>
          <hr>
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Semua Pesanan Pemesanan</h1>
        
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
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

    <?php require("navbar/footer.php"); ?>


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
  <script>
		window.print();
	</script>
</body>

</html>
