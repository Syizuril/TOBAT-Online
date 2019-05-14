<?php
  require_once("../config/auth.php");
  require_once("../config/config.php");
  require("../config/detailbelanja.php");
  require_once("../config/rp.php");
  require_once("../config/tgl_indo.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detail Belanja - TOBAT Online</title>
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
           <li class="breadcrumb-item text-uppercase"><a href="index.php">Home</a></li>
           <li class="breadcrumb-item text-uppercase"><a href="pemesanan.php">Riwayat Belanja</a></li>
           <li class="breadcrumb-item text-uppercase active text-success" aria-current="page">IVC-TBT-<?php echo $_GET["nomor_transaksi"] ?></li>
       </ol>
       </nav>
       <div class="row">
         <div class="col-md-4">
           <div class="card">
             <div class="card-body">
               <div class="row">
                 <div class="col-12 mb-0">
                   <label class="small text-secondary mt-0 mb-0">No.Tagihan</label>
                 </div>
                 <div class="col-12 mt-0 mb-0">
                   <label class="mt-0 mb-0">IVC-TBT-<?php echo $data["nomor_transaksi"] ?></label>
                   <hr>
                 </div>
                 <div class="col-12 mb-0">
                   <label class="small text-secondary mt-0 mb-0">Status Tagihan</label>
                 </div>
                 <div class="col-12 mt-0 mb-0">
                   <label class="mt-0 mb-0"><?php echo $data["status_bayar"] ?></label>
                   <hr>
                 </div>
                 <?php
                 if($data["status_bayar"]!=(("Menunggu Konfirmasi Admin")&&("Menunggu Konfirmasi Pembatalan"))){?>
                   <div class="col-12 mb-0">
                     <label class="small text-secondary mt-0 mb-0">Metode Pembayaran</label>
                   </div>
                   <div class="col-12 mt-0 mb-0">
                     <label class="mt-0 mb-0">Cara Membayar</label>
                     <hr>
                   </div>
                 <?php }
                 $no_transaksi=$data["nomor_transaksi"];
                 require("../config/readriwayatdatano.php");
                 $total=0;
                 foreach ($data2 as $key) {
                  $total = $total + ($key["jumlah"] * $key["harga"]);
                 }
                  ?>
                  <div class="col-12 mb-0">
                    <label class="small text-secondary mt-0 mb-0">Total Pembayaran</label>
                  </div>
                  <div class="col-12 mt-0 mb-0">
                    <label class="mt-0 mb-0"><?php echo rp($total) ?></label>
                    <hr>
                  </div>
                  <div class="col-12 mb-0">
                    <label class="small text-secondary mt-0 mb-0">Alamat Pengiriman</label>
                  </div>
                  <div class="col-12 mt-0 mb-0">
                    <label class="mt-0 mb-0 font-weight-bold"><?php echo $data['nama']?></label><br>
                    <label class="mt-0 mb-0"><?php echo $data['alamat']?></label><br>
                    <label class="mt-0 mb-0">Telephone/Handphone: +62<?php echo $data['no_hp']?></label>
                  </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-md-8">
           <div class="card mb-4">
             <div class="card-header">
               <div class="row">
                 <div class="col-6 my-auto">
                  <h5>Detail Belanja Obat</h5>
                 </div>
                 <div class="col-6 d-flex justify-content-end">
                   <?php
                   if($data["status_bayar"]=="Menunggu Konfirmasi Pembatalan"){?>
                     <button class="btn btn-warning mt-0 mb-0 text-light" disabled>Pesanan Akan Dibatalkan</button>
                   <?php }else{?>
                     <a href="detailpemesanan.php?nomor_transaksi=<?php echo $key["nomor_transaksi"]."&batalkan" ?>" class="btn btn-danger mt-0 mb-0">Batalkan Pesanan</a>
                   <?php } ?>
                 </div>
               </div>
             </div>
             <div class="card-body">
               <div class="card">
                 <?php require("../config/readriwayatdatano.php");
                   $total=0;
                   foreach ($data2 as $key) {
                   $total = $key["jumlah"] * $key["harga"];?>
                 <div class="card-header">
                   <div class="row">
                     <div class="col-6">
                       <div class="row">
                         <figure class="media">
                           <div class="img-wrap"><img src="../images/items/<?php echo $key["foto_obat"] ?>" class="img-thumbnail img-sm"></div>
                           <figcaption class="media-body my-auto">
                             <a class="text-dark mt-0 mb-0" href="detailobat.php?id_obat="><h6><?php echo $key["nama_obat"] ?></h6></a>
                             <label class="small text-secondary mt-0 mb-0">Jumlah : <?php echo $data["jumlah"]?></label>
                           </figcaption>
                         </figure>
                       </div>
                     </div>
                     <div class="col-3">
                       <div class="row">
                         <div class="col-12 mt-3">
                           <label class="small text-secondary mt-0 mb-0">Harga Satuan</label>
                         </div>
                         <div class="col-12 mt-0 mb-0">
                           <label class="mt-0 mb-0"><?php echo rp($key["harga"]) ?></label>
                         </div>
                       </div>
                     </div>
                     <div class="col-3">
                       <div class="row">
                        <div class="col-12 mt-3">
                           <label class="small text-secondary mt-0 mb-0">Harga Total</label>
                        </div>
                        <div class="col-12 mt-0">
                          <label class="mt-0"><?php echo rp($total) ?></label>
                        </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="card-body">
                   <div class="row">
                     <div class="col-6">
                       <div class="row">
                        <div class="col-12 mb-0">
                          <label class="small text-secondary mt-0 mb-0">Status Pembelian</label>
                        </div>
                        <div class="col-12 mt-0 mb-0">
                          <?php if ($key['status_beli']=="menunggu_konfirmasi.png"){?>
                            <img width="100%" src="../images/status/menunggu_konfirmasi_lg.png">
                          <?php }elseif ($key['status_beli']=="diproses_apotek.png"){ ?>
                            <img width="100%" src="../images/status/diproses_apotek_lg.png">
                          <?php }elseif ($key['status_beli']=="batal.png"){ ?>
                            <img width="100%" src="../../images/status/batal_lg.png">
                          <?php }?>
                          <hr>
                        </div>
                        <div class="col-12 mb-0">
                          <?php if(!empty($data['id_apotek'])){ ?>
                          <label class="small text-secondary mt-0 mb-0">Apotek</label><br>
                          <?php
                          $id_apotek=$data['id_apotek'];
                          $stmt = $db->prepare("SELECT * FROM user WHERE level=2 AND id=$id_apotek");
                          $stmt->execute();
                          $data3 = $stmt->fetch();?>
                          <label class="text-success font-weight-bold mt-0 mb-0 h5"><?php echo $data3['nama'] ?></label>
                          <?php
                           }?>
                        </div>
                       </div>
                     </div>
                     <div class="col-6">
                       <div class="col-12 d-flex justify-content-end mt-4">
                         <a href="detailobat.php?id_obat=<?php echo $key["id_obat"] ?>" class="btn btn-secondary mt-0 mb-0">Beli Lagi</a>
                       </div>
                     </div>
                     <div class="col-4 my-auto">
                     </div>
                   </div>
                 </div>
                <?php } ?>
               </div>
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
