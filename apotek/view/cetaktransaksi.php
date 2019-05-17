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
        		<h2>DATA LAPORAN TRANSAKSI</h2>
        		<h4>PENJUALAN OBAT TOKO OBAT ONLINE</h4>
        	</center>
          <hr>
          <!-- Page Heading -->
          <h1 class="h4 mb-2">Pesanan Terselesaikan</h1>
          <p class="small text-secondary font-italic">Periode waktu : <?php echo tgl_indo($_GET['tglawal']) ?> hingga <?php echo tgl_indo($_GET['tglakhir']) ?></p>
              <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <th>Nomor Transaksi</th>
                    <th>Nama Pemesan</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Nama Obat</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Nama Apotek</th>
                  </thead>
                  <tbody>
                    <?php
                    $total=0;
                    $status='Selesai';
                    $stmt = $db->prepare("SELECT transaksi.*,obat.*,user.* FROM transaksi,obat,user WHERE transaksi.id_user=user.id AND transaksi.id_obat=obat.id_obat AND transaksi.status_bayar=:status AND transaksi.tgl_bayar BETWEEN :start_date AND :end_date GROUP BY transaksi.id_transaksi");
                    $params = array (
                      ":status"=>$status,
                      ":start_date"=>$_GET['tglawal'],
                      ":end_date"=>$_GET['tglakhir']
                    );
                    $stmt->execute($params);
                    $data = $stmt->fetchAll();
                    foreach ($data as $value): ?>
                    <tr>
                        <td>IVC-TBT-<?php echo $value['nomor_transaksi'] ?></a></td>
                        <td><?php echo $value['nama'] ?></td>
                        <td><?php echo tgl_indo($value['tanggal']) ?></td>
                        <?php
                        $id_obat=$value['id_obat'];
                        $stmt = $db->prepare("SELECT * FROM obat WHERE id_obat=$id_obat");
                        $stmt->execute();
                        $data2 = $stmt->fetch();?>
                        <td><?php echo $data2['nama_obat'] ?></td>
                        <td><?php echo $value['jumlah'] ?></td>
                        <td><?php echo rp($value['harga'])?></td>
                        <td><?php echo rp($value['jumlah']*$value['harga'])?></td>
                        <?php
                        $id_apotek=$value['id_apotek'];
                        $stmt = $db->prepare("SELECT * FROM user WHERE level=2 AND id=$id_apotek");
                        $stmt->execute();
                        $data3 = $stmt->fetch();?>
                        <td><?php echo $data3['nama'] ?></td>
                        <?php $total=$total+($value['jumlah']*$value['harga']) ?>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <th colspan="5">Total</th>
                    <th colspan="3"><?php echo rp($total) ?></th>
                  </tfoot>
                </table>

          <!-- Page Heading -->
          <h1 class="h4 mb-2">Pesanan yang Belum Terselesaikan</h1>
          <p class="small text-secondary font-italic">Periode waktu : <?php echo tgl_indo($_GET['tglawal']) ?> hingga <?php echo tgl_indo($_GET['tglakhir']) ?></p>
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <th>Nomor Transaksi</th>
                    <th>Nama Pemesan</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Nama Obat</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Status</th>
                  </thead>
                  <tbody>
                    <?php
                    $total=0;
                    $status='selesai.png';
                    $stmt = $db->prepare("SELECT transaksi.*,obat.*,user.* FROM transaksi,obat,user WHERE transaksi.id_user=user.id AND transaksi.id_obat=obat.id_obat AND transaksi.status_beli!=:status AND transaksi.tanggal BETWEEN :start_date AND :end_date GROUP BY transaksi.id_transaksi");
                    $params = array (
                      ":status"=>$status,
                      ":start_date"=>$_GET['tglawal'],
                      ":end_date"=>$_GET['tglakhir']
                    );
                    $stmt->execute($params);
                    $data = $stmt->fetchAll();
                    foreach ($data as $value): ?>
                    <tr>
                        <td>IVC-TBT-<?php echo $value['nomor_transaksi'] ?></a></td>
                        <td><?php echo $value['nama'] ?></td>
                        <td><?php echo tgl_indo($value['tanggal']) ?></td>
                        <?php
                        $id_obat=$value['id_obat'];
                        $stmt = $db->prepare("SELECT * FROM obat WHERE id_obat=$id_obat");
                        $stmt->execute();
                        $data2 = $stmt->fetch();?>
                        <td><?php echo $data2['nama_obat'] ?></td>
                        <td><?php echo $value['jumlah'] ?></td>
                        <td><?php echo rp($value['harga'])?></td>
                        <td><?php echo rp($value['jumlah']*$value['harga'])?></td>
                        <td><?php echo $value['status_bayar'] ?></td>
                        <?php $total=$total+($value['jumlah']*$value['harga']) ?>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <th colspan="5">Total</th>
                    <th colspan="3"><?php echo rp($total) ?></th>
                  </tfoot>
                </table>
                <?php
                date_default_timezone_set('Asia/Jakarta');
                 ?>
          <label class="small text-secondary font-italic">Data ini diambil pada : <?php echo date('l, d-m-Y  h:i:s a') ?></label>
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
