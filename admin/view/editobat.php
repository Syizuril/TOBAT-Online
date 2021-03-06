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

  <title>Edit Obat - TOBAT Online</title>
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
            <a class="collapse-item" href="dataakun.php">Akun</a>
            <a class="collapse-item active" href="tablesobat.php">Obat</a>
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
                <li class="breadcrumb-item"><a href="tablesobat.php">Kelola Data Obat</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data Obat</li>
              </ol>
            </nav>
            <?php
              require("../config/editobat.php");
            ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <div class="col-6">
              <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
            </div>
            <div class="col-6">
              <a href="" data-toggle="modal" data-target="#confirm-delete" class="float-right btn btn-danger m-0">Hapus Obat</a>
            </div>
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
                  <img class="mx-auto d-block img-profile" style='width: 100%' src="../../images/items/<?php echo $data['foto_obat'] ?>">
                  <div class="form-group input-group my-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                      <input name="nama_obat" class="form-control" placeholder="Nama Obat" type="text" value="<?php echo $data['nama_obat'] ?>" required>
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
                  <h6 class="m-0 font-weight-bold text-primary">Data Obat</h6>
                </div>
                <div class="card-body">
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-book-medical"></i> </span>
                    </div>
                      <textarea name="deskripsi_obat" class="form-control" placeholder="Deskripsi Obat" required><?php echo $data['deskripsi_obat'] ?></textarea>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-stream"></i> </span>
                    </div>
                    <select class="custom-select" name="kategori">
                      <option value="<?php echo $data['kategori'] ?>"disabled selected hidden><?php echo $data['kategori'] ?></option>
                      <?php require("option_kategori.php") ?>
                    </select>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-bong"></i> </span>
                    </div>
                      <textarea name="komposisi" class="form-control" placeholder="Komposisi Obat" required><?php echo $data['komposisi'] ?></textarea>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-book-medical"></i> </span>
                    </div>
                      <textarea name="indikasi" class="form-control" placeholder="Indikasi Obat" required><?php echo $data['indikasi'] ?></textarea>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-notes-medical"></i> </span>
                    </div>
                      <input name="dosis" class="form-control" placeholder="Dosis" type="text" value="<?php echo $data['dosis'] ?>" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-clipboard-list"></i> </span>
                    </div>
                      <input name="penyajian" class="form-control" placeholder="Cara Penyajian" type="text" value="<?php echo $data['penyajian'] ?>" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-minus-square"></i> </span>
                    </div>
                      <input name="cara" class="form-control" placeholder="Cara Penyimpanan" type="text" value="<?php echo $data['cara'] ?>" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-info-circle"></i> </span>
                    </div>
                      <input name="perhatian" class="form-control" placeholder="Perhatian Obat" type="text" value="<?php echo $data['perhatian'] ?>"required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-question-circle"></i> </span>
                    </div>
                      <input name="efek" class="form-control" placeholder="Efek Samping" type="text" value="<?php echo $data['efek'] ?>" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-grip-horizontal"></i> </span>
                    </div>
                      <input name="kemasan" class="form-control" placeholder="Jumlah perkemasan" type="number" value="<?php echo $data['kemasan'] ?>" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-hospital"></i> </span>
                    </div>
                      <input name="pabrik" class="form-control" placeholder="Pabrik Obat" type="text" value="<?php echo $data['pabrik'] ?>" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-bookmark"></i> </span>
                    </div>
                      <input name="keterangan" class="form-control" placeholder="Keterangan Obat" type="text" value="<?php echo $data['keterangan'] ?>" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-calendar-check"></i> </span>
                    </div>
                      <input name="referensi" class="form-control" placeholder="Referensi Deskripsi Obat" type="text" value="<?php echo $data['referensi'] ?>" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fas fa-receipt"></i> </span>
                    </div>
                      <input name="harga" class="form-control" placeholder="Harga Obat" type="number" value="<?php echo $data['harga'] ?>" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-group mb-0">
                    <button type="submit" class="btn btn-success btn-block" name="edit"> Edit Obat </button>
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
          <a class="btn btn-danger" href="../config/deleteobat.php?id_obat=<?php echo $data['id_obat'] ?>&foto_obat=<?php echo $data['foto_obat'] ?>">Hapus</a>
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
