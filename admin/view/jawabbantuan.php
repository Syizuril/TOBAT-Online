<?php
  require_once("../../config/config.php");
  require("../config/auth.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Jawab Bantuan - TOBAT Online</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
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
            <a class="collapse-item active" href="dataakun.php">Akun</a>
            <a class="collapse-item" href="tablesobat.php">Obat</a>
          </div>
        </div>
      </li>
      <?php require("navbar/navitem3.php") ?>

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

          <!-- Page Heading -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="tablebantuan.php">Daftar Bantuan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Jawab Bantuan</li>
              </ol>
            </nav>
            <?php
              require("../config/editbantuan.php");
            ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <div class="col-6">
              <h1 class="h3 mb-0 text-gray-800">Jawab Bantuan</h1>
            </div>
          </div>
          <form action="" method="POST">
          <div class="row">
            <div class="col-md-12">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Bantuan Pelayanan</h6>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label class="small text-secondary">Judul Permasalahan</label>
                    <p class="h5"><?php echo $data['nama'] ?></p>
                  </div>
                  <div class="form-group">
                    <label class="small text-secondary">Judul Permasalahan</label>
                    <p class="h5" name="judul"><?php echo $data['judul'] ?></p>
                  </div>
                  <div class="form-group">
                    <label class="small text-secondary">
                        Isi Permasalahan
                    </label>
                    <br/>
                    <p class="h5" name="isipermasalahan"><?php echo $data['isi'] ?></p>
                  </div>
                  <?php if (empty($data['jawaban'])){ ?>
                  <div class="form-group">
                    <label class="small text-secondary" for="mytextbox">
                        Jawaban Permasalahan (Maks 255 karakter.)
                        <span class="text-muted" id="characterlimit">255</span><span class="text-muted"> karakter tersisa</span>
                    </label>
                    <br/>
                    <textarea name="isijawaban" class="form-control" id="mytextbox" rows="5" cols="40" onkeyup="numberOfCharacters('mytextbox',255,'characterlimit');"></textarea>
                  </div>
                  <div class="form-group input-group mb-0">
                    <input type="hidden" name="id_bantuan" value="<?php echo $data['id_bantuan'] ?>">
                    <button type="submit" class="btn btn-success btn-block" name="submit"> Jawab Bantuan </button>
                  </form>
                <?php }else{ ?>
                  <div class="form-group">
                    <label class="small text-secondary" for="mytextbox">
                        Jawaban Permasalahan
                    </label>
                    <br/>
                    <p class="h5" name="isijawaban" class="form-control"><?php echo $data['jawaban'] ?></p>
                  </div>
                  <div class="form-group">
                    <label class="small text-secondary" for="mytextbox">
                        Penjawab
                    </label>
                    <br/>
                    <?php
                    $id_admin=$data['id_admin'];
                    $stmt = $db->prepare("SELECT * FROM user WHERE level=1 AND id=$id_admin");
                    $stmt->execute();
                    $data4 = $stmt->fetch();
                     ?>
                    <p class="h5" name="nama" class="form-control"><?php echo $data4['nama'] ?></p>
                  </div>
                  <div class="form-group input-group mb-0">
                    <input type="hidden" name="id_bantuan" value="<?php echo $data['id_bantuan'] ?>">
                    <button type="button" class="btn btn-info btn-block" name="button"><?php echo $data['status'] ?></button>
                    <button data-toggle="modal" data-target="#confirm-delete" type="button" class="btn btn-danger btn-block"> Hapus Pesanan </button>
                  </div> <!-- form-group// -->
                <?php } ?>
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

  <!-- Delete Modal -->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Pertanyaan</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Data bantuan ini akan dihapus. Perlu diingat, tindakan ini tidak dapat dikembalikan.<br><br>
          Anda yakin ingin menghapus data bantuan ini ? </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="../config/deleteuser.php?email=<?php echo $data['email'] ?>&foto=<?php echo $data['foto'] ?>">Hapus</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
