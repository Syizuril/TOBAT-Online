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
    table{
    table-layout: fixed;
    }
    td{
    word-wrap:break-word
    }
  </style>
</head>

<body id="page-top">

        <!-- Begin Page Content -->
        <div class="container-fluid mt-5">

          <center>
        		<h2>DATA LAPORAN AKUN TERDAFTAR</h2>
        		<h4>PENJUALAN OBAT TOKO OBAT ONLINE</h4>
        	</center>
          <hr>
          <!-- Page Heading -->
          <h1 class="h4 mb-2">Akun Terdaftar</h1>
          <div class="small">
            <div class="table-responsive">
              <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                  <th>Id Obat</th>
                  <th>Nama Obat</th>
                  <th>Kategori</th>
                  <th>Komposisi</th>
                  <th>Deskripsi</th>
                </thead>
                <tbody>
                  <?php
                  $total=0;
                  $stmt = $db->prepare("SELECT * FROM obat GROUP BY id_obat");
                  $stmt->execute();
                  $data = $stmt->fetchAll();
                  foreach ($data as $value): ?>
                  <tr>
                      <td><?php echo $value['id_obat'] ?></td>
                      <td><?php echo $value['nama_obat'] ?></td>
                      <td><?php echo $value['kategori'] ?></td>
                      <td><?php echo $value['komposisi'] ?></td>
                      <td><?php echo $value['deskripsi_obat'] ?></td>
                      <?php $total++ ?>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <th colspan="4">Total</th>
                  <th><?php echo ($total) ?> Obat Terdaftar</th>
                </tfoot>
              </table>
              <?php
              date_default_timezone_set('Asia/Jakarta');
               ?>
            <label class="small text-secondary font-italic">Data ini diambil pada : <?php echo date('l, d-m-Y  h:i:s a') ?></label>
          </div>

    <?php require("navbar/footer.php"); ?>
  <script>
		window.print();
    window.location.replace('javascript:history.back(-1)');
	</script>

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
  <!-- <script>
		window.print();
	</script> -->
</body>

</html>
