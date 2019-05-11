<?php
  session_start();
  require_once("../config/config.php");
  require_once("../config/rp.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TOBAT Online - Situs Penjualan Obat Online</title>
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
           <li class="breadcrumb-item text-uppercase active text-success" aria-current="page">Keranjang Belanja</li>
       </ol>
       </nav>
       <div class="card">
         <div class="card-header">
             <h5>Detail Pemesanan</h5>
         </div>
         <div class="card-body">
           <?php
           if(!empty($_SESSION["keranjang"])){ ?>
         <div class="card">
           <div class="card-body">
             <?php require("../config/preparepesanan.php"); ?>
             <form action="" method="post">
             <table class="table table-hover shopping-cart-wrap">
               <thead class="text-muted">
                 <tr class="text-center">
                   <th width="40%">Nama Obat</th>
                   <th width="10%">Jumlah</th>
                   <th width="20%" class="text-right">Harga Obat</th>
                   <th width="20%" class="text-right">Harga</th>
                 </tr>
               </thead>
               <tbody>
                    <tr>
                      <td>
                        <figure class="media">
                          <div class="img-wrap"><img src="../images/items/<?php echo $values["foto_obat"] ?>" class="img-thumbnail img-sm"></div>
                          <figcaption class="media-body my-auto">
                            <a class="text-dark" href="detailobat.php?id_obat=<?php echo $values["id_obat"] ?>"><h6><?php echo $values["nama_obat"] ?></h6></a>
                          </figcaption>
                        </figure>
                      </td>
                      <td>
                        <select class="form-control mt-4" name="jumlah" disabled>
                          <option><?php echo $values["jumlah"] ?></option>
                        </select>
                      </td>
                      <td>
                        <p class="text-success text-right mt-4 pt-2"><?php echo rp($values["harga"]) ?></p>
                        <input type="hidden" name="harga" value="<?php echo rp($values["harga"]) ?>">
                      </td>
                      <td>
                        <p class="text-success text-right mt-4 pt-2"><?php echo rp($values["jumlah"] * $values["harga"]) ?></p>
                      </td>
                      <?php
                      $total = $total + ($values["jumlah"] * $values["harga"]);
                      ?>
                  </tr>
                  <tr>
                    <td align="right" colspan="2">Total:</td>
                    <td class="text-right text-success" colspan="2"><strong><?php echo rp($total) ?></strong></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row mt-3 d-flex justify-content-center">
            <div class="col-3">
              <a href="index.php" class="btn btn-info float-left"> Kembali Berbelanja </a>
            </div>
            <div class="col-3">
              <?php
              if(isset($_SESSION['user'])) {?>
              <button type="submit" href="index.php" class="btn btn-success float-right" name="pesan"> Lanjut Ke Pesanan </button>
              <?php
              }else{
              ?>
              <button type="button" class="btn btn-info float-right" name="button" ></button>
            </div>
          </div>
        </form>
        </div>
        </div>
        </div>
        <?php
        }
        else { ?>
          <div class="card">
            <div class="card-body">
              <div class="col-5 mx-auto mt-5">
                <div class="text-center">
                  <img src="../images/icons/belanja.svg" alt="Daftar Belanja" width="70%">
                  <h5 class="mt-3">Belum ada obat di dalam keranjang belanja kamu</h5>
                  <p class="small text-secondary mt-4">Ayo mulai belanja di TOBAT Online dan nikmati kemudahannya</p>
                </div>
                <div class="center">
                  <a href="index.php" class="btn btn-success btn-block mb-5"> Ayo Mulai Belanja </a>
                </div>
              </div>
              <?php
            } ?>
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
