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

  <title>Edit Admin - TOBAT Online</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.ico">
  <!-- Custom fonts-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
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
      if ($_SESSION['user']['email']!=$_GET['email']){
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
            <a class="collapse-item" href="tablepromosi.php">Promosi</a>
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
      require("navbar/toggle.php");
      }else{
      require("navbar/sidebrand.php");
      require("navbar/navitem1.php");
      require("navbar/navitem2.php");
      require("navbar/navitem3.php");?>

      <!-- Heading -->
      <div class="sidebar-heading">
        Tambahan
      </div>

      <?php
      require("navbar/navitem5.php");
      require("navbar/toggle.php");
      }?>
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

          <?php if ($_SESSION['user']['email']!=$_GET['email']){ ?>
          <!-- Page Heading -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="dataakun.php">Kelola Data</a></li>
                <li class="breadcrumb-item"><a href="tablesadmin.php">Kelola Data Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
              </ol>
            </nav>
            <?php
            }else{?>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
              </nav>
            <?php }
              require("../config/edituser.php");
            ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <div class="col-6">
              <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
            </div>
            <?php if ($_SESSION['user']['email']!=$_GET['email']): ?>
            <div class="col-6">
              <a href="" data-toggle="modal" data-target="#confirm-delete" class="float-right btn btn-danger m-0">Hapus Admin</a>
            </div>
            <?php endif; ?>
          </div>
          <form action="" method="POST" enctype="multipart/form-data" oninput='password2.setCustomValidity(password2.value != password.value ? "Password tidak sesuai." : "")'>
          <div class="row">
            <div class="col-md-3">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Foto</h6>
                </div>
                <div class="card-body">
                  <img class="mx-auto d-block circle"src="../../images/avatars/<?php echo $data['foto'] ?>">
                  <div class="form-group input-group my-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                      <input name="nama" class="form-control" placeholder="Nama Panjang" type="text" value="<?php echo $data['nama'] ?>" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <input class="input-group-text custom-file-input" style="width: 100%" type="file" name="image" onchange='$("#upload-file-info").html($(this).val());'>
                    <label class="custom-file-label text-secondary" for="customFile" id="upload-file-info">Unggah Foto</label>
                  </div> <!-- form-group// -->
                </div>
              </div>

            </div>
            <div class="col-md-9">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                </div>
                <div class="card-body">
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                      <input name="email" class="form-control" placeholder="Alamat Email" type="email" value="<?php echo $data['email'] ?>" readonly="readonly">
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <select class="custom-select" style="max-width: 120px;">
                      <option selected="">+62</option>
                    </select>
                      <input name="no_hp" class="form-control" placeholder="Nomor Telepon" type="number" value="<?php echo $data['no_hp'] ?>" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                    <input name="alamat" class="form-control" placeholder="Alamat" type="text" value="<?php echo $data['alamat'] ?>" required>
                  </div> <!-- form-group end.// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                      <input name="password" class="form-control" placeholder="Password" type="password" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                      <input name="password2" class="form-control" placeholder="Ulangi password" type="password" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group mb-0">
                    <button type="submit" class="btn btn-info btn-block" name="submit"> Edit Akun </button>
                  </div> <!-- form-group// -->
                </div>
              </div>

            </div>

          </div>
        </form>
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

  <!-- Delete Modal -->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Akun</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Data akun ini akan dihapus. Perlu diingat, tindakan ini tidak dapat dikembalikan.<br><br>
          Anda yakin ingin menghapus data akun ini ? </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="../config/deleteadmin.php?email=<?php echo $data['email'] ?>&foto=<?php echo $data['foto'] ?>">Hapus</a>
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
