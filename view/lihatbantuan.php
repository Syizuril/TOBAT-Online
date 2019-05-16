<?php
  require_once("../config/config.php");
  require("../config/auth.php");
  require("../config/tampilbantuan.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bantuan Masalah - TOBAT Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">

    <!-- jQuery -->
    <script src="../js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="../js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="../fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="../plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
    <script src="../plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- custom style -->
    <link href="../css/ui.css" rel="stylesheet" type="text/css"/>
    <link href="../css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="../js/script.js" type="text/javascript"></script>
    <script type="text/javascript">
      function numberOfCharacters(textbox,limit,indicator) {
        chars = document.getElementById(textbox).value.length;
        document.getElementById(indicator).innerHTML = limit-chars;
      }
    </script>
    <style media="screen">
    .dropdown-toggle_a::after {
      display: none;
    }
    .dropdown_a:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }
    .circle {
      height:35px;
      width:35px;
      border-radius:50%;
      background-image: url('../images/cover.jpg');
      background-position:center; background-size:cover;
    }
    </style>
  </head>
  <body>
    <?php
      if(!isset($_SESSION["user"])) {
        require("header.php");
      }else{
        require("header_login.php");
      }
     ?>
       <!-- ========================= SECTION CONTENT ========================= -->
       <section class="section-content bg padding-y-sm ">
       <div class="container">
       <nav class="mb-3">
         <ol class="breadcrumb">
           <li class="breadcrumb-item text-uppercase"><a href="index-login.php">Home</a></li>
           <li class="breadcrumb-item text-uppercase"><a href="listbantuan.php">Daftar Pertanyaan</a></li>
           <li class="breadcrumb-item text-uppercase active text-success" aria-current="page">Bantuan Masalah</li>
       </ol>
       </nav>
       <div class="card mb-4">
        <div class="card-header">
             <h1 class="h3 mb-0 text-gray-800">Bantuan Permasalahan</h1>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <form action="#" method="get">
              <div class="form-group">
                <label class="small text-secondary">Judul Permasalahan</label>
                <p name="judul"><?php echo $data['judul'] ?></p>
              </div>
              <div class="form-group">
                <label class="small text-secondary" for="mytextbox">
                    Isi Permasalahan
                </label>
                <br/>
                <p name="isipermasalahan"><?php echo $data['isi'] ?></p>
              </div>
              <?php
                if(empty($data['jawaban'])){?>
                  <button type="button" class="btn btn-info btn-block" disabled>Belum ada jawaban dari admin</button>
                <?php }else{?>
                  <hr>
                  <label class="small text-secondary" for="mytextbox">
                      Isi Permasalahan
                  </label>
                  <br/>
                  <p name="isipermasalahan"><?php echo $data['jawaban'] ?></p>
                  <div class="row">
                    <div class="col-6 mx-3">
                      <button type="button" class="btn btn-secondary btn-block" disabled>Selesai</button>
                    </div>
                    <div class="col-6 mx-3">
                      <button type="button" class="btn btn-success btn-block" disabled>Buat Pertanyaan Baru</button>
                    </div>
                  </div>
               <?php } ?>
            </form>
            </div>
          </div>
        </div>
       </div>
     </div>
   </div>
   <?php
    require("section/footer.php");
    ?>
  </body>
</html>
