<?php
  require_once("../config/auth.php");
  require_once("../config/config.php");
  require("../config/readriwayatno.php");
  require_once("../config/rp.php");
  require_once("../config/tgl_indo.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pemesanan - TOBAT Online</title>
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
           <li class="breadcrumb-item text-uppercase"><a href="#">Home</a></li>
           <li class="breadcrumb-item text-uppercase active text-success" aria-current="page">Riwayat Belanja</li>
       </ol>
       </nav>
       <div class="card mb-5">
         <div class="card-header">
             <h5>Riwayat Belanja</h5>
         </div>
         <?php
         if($data){
         foreach ($data as $value):?>
         <div class="card-body">
           <div class="card">
             <?php
             $no_transaksi=$value["nomor_transaksi"];
             require("../config/readriwayatdatano.php");
             $total=0;
             foreach ($data2 as $key) {
              $total = $total + ($key["jumlah"] * $key["harga"]);
             }?>
             <div class="card-header">
               <div class="row">
                 <div class="col-4">
                   <div class="row">
                    <div class="col-12 mb-0">
                      <label class="small text-secondary mt-0 mb-0">No.Tagihan</label>
                    </div>
                    <div class="col-12 mt-0 mb-0">
                      <label class="mt-0 mb-0">IVC-TBT-<?php echo $value["nomor_transaksi"] ?></label>
                    </div>
                    <div class="col-12 mt-0">
                      <label class="small text-secondary mt-0 mb-0"><?php echo tgl_indo($value["tanggal"]) ." ". $value["jam"] ?></label>
                    </div>
                   </div>
                 </div>
                 <div class="col-2">
                   <div class="row">
                    <div class="col-12 mb-0">
                       <label class="small text-secondary mt-0 mb-0">Total Tagihan</label>
                    </div>
                    <div class="col-12 mt-0">
                      <label class="mt-0"><?php echo rp($total) ?></label>
                    </div>
                   </div>
                 </div>
                 <div class="col-3">
                   <div class="row">
                    <div class="col-12 mb-0">
                      <label class="small text-secondary mt-0 mb-0">Status Tagihan</label>
                    </div>
                    <?php
                    if($value["status_bayar"]=="Menunggu Konfirmasi Pembatalan"){?>
                      <div class="col-12 mt-0 mb-0">
                        <a href="" class="btn btn-warning mt-0 mb-0 text-light"><?php echo $value["status_bayar"] ?></a>
                      </div>
                    <?php }else{?>
                      <div class="col-12 mt-0 mb-0">
                        <a href="" class="btn btn-info mt-0 mb-0"><?php echo $value["status_bayar"] ?></a>
                      </div>
                    <?php } ?>
                   </div>
                 </div>
                 <div class="col-3 d-flex justify-content-end">
                   <div class="row my-auto">
                     <div class="col-12">
                       <a href="detailpemesanan.php?nomor_transaksi=<?php echo $value["nomor_transaksi"] ?>" class="btn btn-outline-success mt-0 mb-0" href="">Lihat Detail</a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="card-body">
               <?php
               foreach ($data2 as $key) { ?>
               <div class="row">
                 <div class="col-4">
                   <figure class="media">
                     <div class="img-wrap"><img src="../images/items/<?php echo $key["foto_obat"] ?>" class="img-thumbnail img-sm"></div>
                     <figcaption class="media-body my-auto">
                       <a class="text-dark" href="detailobat.php?id_obat=<?php echo $key["id_obat"] ?>"><h6><?php echo $key["nama_obat"] ?></h6></a>
                     </figcaption>
                   </figure>
                 </div>
                 <div class="col-2 my-auto">
                   <div class="row">
                     <div class="col-12 mb-0">
                       <label class="small text-secondary mt-0 mb-0">Harga</label>
                     </div>
                     <div class="col-12 mt-0 mb-0">
                       <label class="mt-0 mb-0"><?php echo rp($key["jumlah"]*$key["harga"]) ?></label>
                     </div>
                   </div>
                 </div>
                 <div class="col-4 my-auto">
                   <div class="row">
                    <div class="col-12 mb-0">
                      <label class="small text-secondary mt-0 mb-0">Status Pembelian</label>
                    </div>
                    <div class="col-12 mt-0 mb-0">
                      <img width="75%" src="../images/status/<?php echo $key['status_beli'] ?>">
                    </div>
                   </div>
                 </div>
               </div>
             <?php } ?>
             </div>
           </div>
         </div>
         <?php
        endforeach;
        }else{ ?>
            <div class="card-body">
              <div class="col-5 mx-auto mt-5">
                <div class="text-center">
                  <img src="../images/icons/empty.svg" alt="Kosong" width="70%">
                  <h5 class="mt-3">Belum ada riwayat apapun dalam daftar belanja obat kamu</h5>
                  <p class="small text-secondary mt-4">Ayo mulai belanja di TOBAT Online dan nikmati kemudahannya</p>
                </div>
                <div class="center">
                  <a href="index-login.php" class="btn btn-success btn-block mb-5"> Ayo Mulai Belanja </a>
                </div>
              </div>
          </div>
        <?php } ?>
       </div>
     </div>
    </div>
    <?php
    require("section/footer.php");
    ?>
  </body>
</html>
