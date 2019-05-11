<?php
  session_start();
  require_once("../config/config.php");
  require("../config/register.php");
  require("../config/login.php");
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
           <li class="breadcrumb-item text-uppercase active text-success" aria-current="page">Keranjang Belanja</li>
       </ol>
       </nav>
       <div class="card mb-5">
         <div class="card-header">
             <h5>Keranjang Belanja</h5>
         </div>
         <div class="card-body">
           <?php
           if(!empty($_SESSION["keranjang"])){ ?>
         <div class="card">
           <div class="card-body">
             <?php require("../config/preparepesanan.php"); ?>
             <form method="post">
             <table class="table table-hover shopping-cart-wrap">
               <thead class="text-muted">
                 <tr class="text-center">
                   <th width="40%">Nama Obat</th>
                   <th width="10%">Jumlah</th>
                   <th width="20%" class="text-right">Harga Obat</th>
                   <th width="20%" class="text-right">Harga</th>
                   <th width="10%" class="text-right">Hapus</th>
                 </tr>
               </thead>
               <tbody><?php
                  $total = 0;
                  foreach($_SESSION["keranjang"] as $keys => $values){
                    ?>
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
                      <td class="text-right">
                        <a name="id_obat" href="detailobat.php?id_obat=<?php echo $values["id_obat"] ?>&beli=hapus" class="btn btn-outline-danger mt-4"> <i class="fas fa-times-circle"></i> </a>
                        <input type="hidden" name="id_obat" value="<?php echo $values["id_obat"] ?>">
                      </td>
                      <?php
                      $total = $total + ($values["jumlah"] * $values["harga"]);
                      require("../config/pesanan.php");
                    }
                    ?>
                  </tr>
                  <tr>
                    <td align="right" colspan="3">Total:</td>
                    <td class="text-right text-success"><strong><?php echo rp($total) ?></strong></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
              <div class="form-control">
                <?php
                if(isset($_SESSION["user"])){?>
                <textarea class="form-control d-block" name="alamat" required><?php echo $_SESSION["user"]["alamat"] ?></textarea>
                <?php }else{ ?>
                <textarea class="form-control d-block" name="alamat" placeholder="Masukkan Alamat Lengkap Pengiriman Anda" required></textarea>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="row mt-3 d-flex justify-content-center">
            <div class="col-3">
              <a href="index.php" class="btn btn-info float-left"> Kembali Berbelanja </a>
            </div>
            <div class="col-3">
              <?php
              if(!isset($_SESSION["user"])) {?>
                <a href="#" data-toggle="modal" data-target="#masuk2" class="btn btn-success float-right masuk" > Lanjut Ke Pesanan </a>
              <?php
              }else{
              ?>
                <button type="submit" class="btn btn-success float-right" name="pesan"> Lanjut Ke Pesanan </button>
              <?php } ?>
            </div>
          </div>
        </form>
        </div>
        </div>
        </div>
        <?php
        }
        else { ?>
          <div class="card mb-5">
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
          </div>
         </div>
       </div>
     </div>
   </div>
   <?php
       }
    require("section/footer.php");
    ?>
  </body>
  <div class="modal fade" id="masuk2" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Silahkan Login untuk Melanjutkan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <div class="col-7 mx-auto mt-5">
              <div class="text-center">
                <img src="../images/icons/login.svg" alt="Daftar Belanja" width="70%">
                <h5 class="small text-secondary mt-4">Yuk segera login, obatmu sudah menunggumu lho.. !</h5>
              </div>
                <form class="form-horizontal" action="index.php" method="POST">
                  <div class="form-group input-icon">
                    <i class="fa fa-user"></i>
                      <input name="email" class="form-control" placeholder="Email" type="email" required>
                  </div> <!-- form-group// -->
                  <div class="form-group input-icon">
                    <i class="fa fa-lock"></i>
                    <input name="password" class="form-control" placeholder="******" type="password" required>
                  </div> <!-- form-group// -->
            </div>
        </div>
       </div>
    </div>
    <div class="modal-footer">
      <div class="container">
        <div class="row">
          <div class="col text-center">
              <button name="login" type="submit" class="btn btn-success btn-block"> Masuk </button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</html>
