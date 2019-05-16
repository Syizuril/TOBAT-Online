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
  <title>Daftar Bantuan Pertanyaan - Admin TOBAT Online</title>
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
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
      <?php
      require("navbar/sidebrand.php");
      require("navbar/navitem1.php");?>
      <!-- Heading -->
      <div class="sidebar-heading">
        Kelola
      </div>
      <?php
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
          <?php   require("../config/readbantuan.php"); ?>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Daftar Pertanyaan</li>
            </ol>
          </nav>

          <h1 class="h3 mb-2 text-gray-800">Kelola Daftar Bantuan</h1>
          <p class="mb-4">Berikut adalah tampilan data dari daftar bantuan, Anda dapat mengaturnya seperti mengedit hingga menghapus data tersebut.</p>

          <div class="card mb-4">
           <div class="card-header">
             <div class="row">
               <div class="col-6">
                 <h1 class="h5 mt-1 text-gray-800">Daftar Permasalahan</h1>
               </div>
               <div class="col-6 d-flex justify-content-end">
                   <a href="bantuan.php" class="btn btn-success">Buat Pertanyaan</a>
               </div>
             </div>
           </div>
           <div class="card-body">
             <div class="row">
               <?php
               if($data){
               foreach ($data as $value): ?>
               <div class="col-12">
                 <div class="card my-2">
                   <div class="card-body">
                     <div class="row">
                       <div class="col-4">
                          <div class="col-12 my-0">
                            <label class="small text-secondary mt-0 mb-0">No.Bantuan</label>
                          </div>
                          <div class="col-12 my-0">
                            <label class="mt-0 mb-0"><?php echo $value["id_bantuan"] ?></label>
                          </div>
                          <div class="col-12 my-0">
                            <label class="small text-secondary mt-0 mb-0"><?php echo tgl_indo($value["tanggal"]) ?></label>
                          </div>
                       </div>
                       <div class="col-3">
                            <div class="col-12 mb-0">
                              <label class="small text-secondary mt-0 mb-0">Judul Permasalahan</label>
                            </div>
                            <div class="col-12 mt-0 mb-0">
                              <label class="mt-0 mb-0"><?php echo $value["judul"] ?></label>
                            </div>
                       </div>
                       <div class="col-3">
                          <div class="col-12 mb-0">
                            <label class="small text-secondary mt-0 mb-0">Status</label>
                          </div>
                          <?php if($value['status']!='Sudah Terjawab'){ ?>
                          <div class="col-12 mt-0 mb-0">
                            <a href="editbantuan.php?id_bantuan=<?php echo $value['id_bantuan'] ?>" class="btn btn-info mt-0 mb-0"><?php echo $value["status"] ?></a>
                          </div>
                        <?php }else{ ?>
                          <div class="col-12 mt-0 mb-0">
                            <a href="editbantuan.php?id_bantuan=<?php echo $value['id_bantuan'] ?>" class="btn btn-secondary mt-0 mb-0"><?php echo $value["status"] ?></a>
                          </div>
                        <?php } ?>
                       </div>
                       <div class="col-2 my-auto d-flex justify-content-end">
                            <a href="editbantuan.php?id_bantuan=<?php echo $value['id_bantuan'] ?>" class="btn btn-outline-success mt-0 mb-0"> Lihat Data </a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             <?php endforeach;
             }else{ ?>
               <div class="col-12">
                 <div class="card-body">
                   <div class="col-5 mx-auto mt-5">
                     <div class="text-center">
                       <img src="../../images/icons/empty2.svg" alt="Daftar Belanja" width="70%">
                       <h5 class="mt-3">Hebat ! Kamu sama sekali belum mengirimkan pertanyaan apapun. Jika ada masalah dengan senang hati kami membantu Anda.</h5>
                       <p class="small text-secondary mt-4">Ada yang mengganjal di kepalamu ?</p>
                     </div>
                     <div class="center">
                       <a href="bantuan.php" class="btn btn-success btn-block mb-5"> Ayo Buat Pertanyaan </a>
                     </div>
                   </div>
                 </div>
               </div>
             <?php }
             ?>
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
