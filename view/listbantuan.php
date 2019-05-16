<?php
  require_once("../config/config.php");
  require("../config/auth.php");
  require("../config/listbantuan.php");
  require("../config/tgl_indo.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Daftar Bantuan - TOBAT Online</title>
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
           <li class="breadcrumb-item text-uppercase active text-success" aria-current="page">Daftar Pertanyaan</li>
       </ol>
       </nav>
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
            foreach ($data as $value):
            ?>
            <div class="col-12">
              <div class="card my-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col-4">
                       <div class="col-12 mb-0">
                         <label class="small text-secondary mt-0 mb-0">No.Bantuan</label>
                       </div>
                       <div class="col-12 mt-0 mb-0">
                         <label class="mt-0 mb-0"><?php echo $value["id_bantuan"] ?></label>
                       </div>
                       <div class="col-12 mt-0">
                         <label class="small text-secondary mt-0 mb-0"><?php echo tgl_indo($value["tanggal"]) ?></label>
                       </div>
                    </div>
                    <div class="col-4">
                         <div class="col-12 mb-0">
                           <label class="small text-secondary mt-0 mb-0">Judul Permasalahan</label>
                         </div>
                         <div class="col-12 mt-0 mb-0">
                           <label class="mt-0 mb-0"><?php echo $value["judul"] ?></label>
                         </div>
                    </div>
                    <div class="col-2">
                       <div class="col-12 mb-0">
                         <label class="small text-secondary mt-0 mb-0">Status</label>
                       </div>
                       <?php if($value['status']!='Sudah Terjawab'){ ?>
                       <div class="col-12 mt-0 mb-0">
                         <a href="lihatbantuan.php?id_bantuan=<?php echo $value['id_bantuan'] ?>" class="btn btn-info mt-0 mb-0"><?php echo $value["status"] ?></a>
                       </div>
                     <?php }else{ ?>
                       <div class="col-12 mt-0 mb-0">
                         <a href="lihatbantuan.php?id_bantuan=<?php echo $value['id_bantuan'] ?>" class="btn btn-secondary mt-0 mb-0"><?php echo $value["status"] ?></a>
                       </div>
                     <?php } ?>
                    </div>
                    <div class="col-2 my-auto d-flex justify-content-end">
                         <a href="lihatbantuan.php?id_bantuan=<?php echo $value['id_bantuan'] ?>" class="btn btn-outline-success mt-0 mb-0"> Lihat Data </a>
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
                    <img src="../images/icons/empty2.svg" alt="Daftar Belanja" width="70%">
                    <h5 class="mt-3">Hebat ! Kamu sama sekali belum mengirimkan pertanyaan apapun. Jika ada masalah dengan senang hati kami membantu Anda.</h5>
                    <p class="small text-secondary mt-4">Ayo mulai belanja di TOBAT Online dan nikmati kemudahannya</p>
                  </div>
                  <div class="center">
                    <a href="index-login.php" class="btn btn-success btn-block mb-5"> Ayo Mulai Belanja </a>
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
   </div>
   <?php
    require("section/footer.php");
    ?>
  </body>
</html>
