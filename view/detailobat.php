<?php
  session_start();
  require_once("../config/config.php");
  require_once("../config/detailobat.php");
  $modal=false;
  require("../config/keranjang.php");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $data['nama_obat'] ?> - TOBAT Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">

    <!-- jQuery -->
    <script src="../js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="../js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="../fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="../plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
    <link href="../plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

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
    .carousel {
    	margin: 50px auto;
    	padding: 0 70px;
    }
    .carousel .item {
    	min-height: 330px;
        text-align: center;
    	overflow: hidden;
    }
    .carousel .item .img-box {
    	height: 160px;
    	width: 100%;
    	position: relative;
    }
    .carousel .item img {
    	max-width: 100%;
    	max-height: 100%;
    	display: inline-block;
    	position: absolute;
    	bottom: 0;
    	margin: 0 auto;
    	left: 0;
    	right: 0;
    }
    .carousel .item h4 {
    	font-size: 18px;
    	margin: 10px 0;
    }
    .carousel .item .btn {
    	color: #333;
        border-radius: 0;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #ccc;
        padding: 5px 10px;
        margin-top: 5px;
        line-height: 16px;
    }
    .carousel .item .btn:hover, .carousel .item .btn:focus {
    	color: #fff;
    	background: #000;
    	border-color: #000;
    	box-shadow: none;
    }
    .carousel .item .btn i {
    	font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }
    .carousel .thumb-wrapper {
    	text-align: center;
    }
    .carousel .thumb-content {
    	padding: 15px;
    }
    .carousel .carousel-control {
    	height: 100px;
        width: 40px;
        background: none;
        margin: auto 0;
        background: rgba(0, 0, 0, 0.2);
    }
    .carousel .carousel-control i {
        font-size: 30px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin: -16px 0 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: none;
        font-weight: bold;
    }
    .carousel .carousel-control.left i {
    	margin-left: -3px;
    }
    .carousel .carousel-control.left i {
    	margin-right: -3px;
    }
    .carousel .carousel-indicators {
    	bottom: -50px;
    }
    .carousel-indicators li, .carousel-indicators li.active {
    	width: 10px;
    	height: 10px;
    	margin: 4px;
    	border-radius: 50%;
    	border-color: transparent;
    }
    .carousel-indicators li {
    	background: rgba(0, 0, 0, 0.2);
    }
    .carousel-indicators li.active {
    	background: rgba(0, 0, 0, 0.6);
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
        <li class="breadcrumb-item text-uppercase"><a href="#"><?php echo $data['kategori'] ?></a></li>
        <li class="breadcrumb-item text-uppercase active text-success" aria-current="page"><?php echo $data['nama_obat'] ?></li>
    </ol>
    </nav>

    <div class="row">
    <div class="col-xl-9 col-md-9 col-sm-12">

    <main class="card">
    	<div class="row no-gutters">
    		<aside class="col-sm-6 border-right">
          <article class="gallery-wrap">
          <div class="img-big-wrap">
            <div> <a href="../images/items/<?php echo $data['foto_obat'] ?>" data-fancybox=""><img src="../images/items/<?php echo $data['foto_obat'] ?>"></a></div>
          </div> <!-- slider-product.// -->
          </article> <!-- gallery-wrap .end// -->
    		</aside>
    		<aside class="col-sm-6">
        <article class="card-body">
        <!-- short-info-wrap -->
        	<h3 class="title mb-3"><?php echo $data['nama_obat'] ?></h3>
        <div class="mb-3">
        	<var class="price h3 text-warning">
        		<span class="currency text-success"><?php echo rp($data['harga']) ?></span>
        	</var>
        	<span>/per barang</span>
        </div> <!-- price-detail-wrap .// -->
        <dl>
          <dt>Desksripsi</dt>
          <dd><p><?php echo $data['deskripsi_obat'] ?></p></dd>
        </dl>
        <dl class="row">
          <dt class="col-sm-3">Kategori</dt>
          <dd class="col-sm-9"><?php echo $data['kategori'] ?></dd>

          <dt class="col-sm-3">Indikasi</dt>
          <dd class="col-sm-9"><?php echo $data['indikasi'] ?></dd>

          <dt class="col-sm-3">Perhatian</dt>
          <dd class="col-sm-9"><?php echo $data['perhatian'] ?></dd>
        </dl>
        <hr>
        	<div class="row">
            <form method="POST" action="detailobat.php?id_obat=<?php echo $data['id_obat'] ?>&beli=tambah">
        		<div class="col-sm-12">
        			<dl class="dlist-inline">
        			  <dt>Jumlah: </dt>
        			  <dd>
        			  	<select class="form-control form-control-sm" style="width:70px;" name="jumlah">
                    <option value="1">1</option>
        			  	</select>
        			  </dd>
        			</dl>  <!-- item-property .// -->
        		</div> <!-- col.// -->
        	</div> <!-- row.// -->
        	<hr>
          <input type="hidden" name="hidden_nama_obat" value="<?php echo $data["nama_obat"]; ?>" />
          <input type="hidden" name="hidden_harga" value="<?php echo $data["harga"]; ?>" />
          <input type="hidden" name="hidden_foto_obat" value="<?php echo $data["foto_obat"]; ?>" />
        	<a href="#" class="btn btn-outline-success"> <i class="fa fa-envelope"></i> Tanyakan Produk Ini </a>
        	<button class="btn btn-success" name="beli" type="submit" > Beli Obat </button>
          </form>
        <!-- short-info-wrap .// -->
        </article> <!-- card-body.// -->
    		</aside> <!-- col.// -->
    	</div> <!-- row.// -->
    </main> <!-- card.// -->

    <!-- PRODUCT DETAIL -->
    <article class="card mt-3">
    	<div class="card-body">
    		<h4>Keterangan Lebih Detail</h4><hr>
        <dl class="row">
          <dt class="col-sm-3">Nama Obat</dt>
          <dd class="col-sm-9"><?php echo $data['nama_obat'] ?></dd>

          <dt class="col-sm-3">Deskipsi</dt>
          <dd class="col-sm-9"><?php echo $data['deskripsi_obat'] ?></dd>

          <dt class="col-sm-3">Kategori</dt>
          <dd class="col-sm-9"><?php echo $data['kategori'] ?></dd>

          <dt class="col-sm-3">Komposisi</dt>
          <dd class="col-sm-9"><?php echo $data['komposisi'] ?></dd>

          <dt class="col-sm-3">Indikasi Penggunaan</dt>
          <dd class="col-sm-9"><?php echo $data['indikasi'] ?></dd>

          <dt class="col-sm-3">Dosis Penggunaan</dt>
          <dd class="col-sm-9"><?php echo $data['dosis'] ?></dd>

          <dt class="col-sm-3">Cara Penyajian</dt>
          <dd class="col-sm-9"><?php echo $data['cara'] ?></dd>

          <dt class="col-sm-3">Perhatian</dt>
          <dd class="col-sm-9"><?php echo $data['perhatian'] ?></dd>

          <dt class="col-sm-3">Efek Samping</dt>
          <dd class="col-sm-9"><?php echo $data['efek'] ?></dd>

          <dt class="col-sm-3">Jumlah Perkemasan</dt>
          <dd class="col-sm-9"><?php echo $data['kemasan'] ?> item</dd>

          <dt class="col-sm-3">Pabrik</dt>
          <dd class="col-sm-9"><?php echo $data['pabrik'] ?></dd>

          <dt class="col-sm-3">Referensi</dt>
          <dd class="col-sm-9"><?php echo $data['referensi'] ?></dd>

          <dt class="col-sm-3">Keterangan</dt>
          <dd class="col-sm-9"><?php echo $data['keterangan'] ?></dd>
        </dl>
    	</div> <!-- card-body.// -->
    </article> <!-- card.// -->

    <!-- PRODUCT DETAIL .// -->

    </div> <!-- col // -->
    <aside class="col-xl-3 col-md-3 col-sm-12">
      <div class="card">
      	<div class="card-header">
      	    Barang Terkait
      	</div>
      	<div class="card-body row">
          <?php
            $kategori=$data['kategori'];
            $stmt = $db->prepare("SELECT * FROM obat WHERE kategori='$kategori'");
            $stmt->execute();
            $data = $stmt->fetchAll();

            shuffle($data);
            $i = 0;
            foreach ($data as $value):
           ?>
          <div class="col-md-12 col-sm-3">
          	<figure class="item border-bottom mb-3">
          			<a href="detailobat.php?id_obat=<?php echo $value['id_obat'] ?>" class="img-wrap"> <img src="../images/items/<?php echo $value['foto_obat'] ?>" class="img-md"></a>
          			<figcaption class="info-wrap">
          				<a class="title text-dark" href="detailobat.php?id_obat=<?php echo $value['id_obat'] ?>"> <span><?php echo $value['nama_obat']?></span></a>
          				<div class="price-wrap mb-3">
          					<span class="price-new text-success"><?php echo rp($value['harga'])?></del>
          				</div> <!-- price-wrap.// -->
          			</figcaption>
          	</figure> <!-- card-product // -->
          </div> <!-- col.// -->
          <?php
    			if (++$i == 5) break;
    			endforeach; ?>
      </div> <!-- card.// -->
    </aside> <!-- col // -->
    </div> <!-- row.// -->
    <header class="section-heading heading-line">
    	<h4 class="title-section bg mt-3">Rekomendasi Buat Kamu</h4>
    </header>
    <div id="ObatCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#ObatCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#ObatCarousel" data-slide-to="1"></li>
				<li data-target="#ObatCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
            <?php
            require_once("../config/readobat.php");
            shuffle($data);
            $i = 0;
            foreach ($data as $value): ?>
            <div class="col-md-2">
              <figure class="card card-product">
                <div class="img-wrap"> <img src="../images/items/<?php echo $value['foto_obat']?>"></div>
                <figcaption class="info-wrap">
                  <h6 class="title judul"><a href="detailobat.php?id_obat=<?php echo $value['id_obat'] ?>" class="text-dark font-weight-normal"><?php echo $value['nama_obat'] ?></a></h6>

                  <div class="price-wrap">
                    <span class="price-new font-weight-bold text-success"><?php echo rp($value['harga'])?></span>
                  </div> <!-- price-wrap.// -->

                </figcaption>
              </figure> <!-- card // -->
            </div> <!-- col // -->
            <?php
            if (++$i == 6) break;
            endforeach; ?>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
            <?php
            require_once("../config/readobat.php");
            shuffle($data);
            $i = 0;
            foreach ($data as $value): ?>
            <div class="col-md-2">
              <figure class="card card-product">
                <div class="img-wrap"> <img src="../images/items/<?php echo $value['foto_obat']?>"></div>
                <figcaption class="info-wrap">
                  <h6 class="title judul"><a href="detailobat.php?id_obat=<?php echo $value['id_obat'] ?>" class="text-dark font-weight-normal"><?php echo $value['nama_obat'] ?></a></h6>

                  <div class="price-wrap">
                    <span class="price-new font-weight-bold text-success"><?php echo rp($value['harga'])?></span>
                  </div> <!-- price-wrap.// -->

                </figcaption>
              </figure> <!-- card // -->
            </div> <!-- col // -->
            <?php
            if (++$i == 6) break;
            endforeach; ?>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
            <?php
            require_once("../config/readobat.php");
            shuffle($data);
            $i = 0;
            foreach ($data as $value): ?>
            <div class="col-md-2">
              <figure class="card card-product">
                <div class="img-wrap"> <img src="../images/items/<?php echo $value['foto_obat']?>"></div>
                <figcaption class="info-wrap">
                  <h6 class="title judul"><a href="detailobat.php?id_obat=<?php echo $value['id_obat'] ?>" class="text-dark font-weight-normal"><?php echo $value['nama_obat'] ?></a></h6>

                  <div class="price-wrap">
                    <span class="price-new font-weight-bold text-success"><?php echo rp($value['harga'])?></span>
                  </div> <!-- price-wrap.// -->

                </figcaption>
              </figure> <!-- card // -->
            </div> <!-- col // -->
            <?php
            if (++$i == 6) break;
            endforeach; ?>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control left carousel-control-prev" href="#ObatCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right carousel-control-next" href="#ObatCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
    </div><!-- container // -->
    </section>
    <!-- ========================= SECTION CONTENT .END// ========================= -->
    <?php
    require("section/footer.php");?>
    <?php if ($modal==true) { ?>
      <script>
      $(function() {
        $("#beli").modal();//if you want you can have a timeout to hide the window after x seconds
      });
      </script>
    <!-- ============================ MODAL ========================= -->
    <div class="modal fade" id="beli" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Keranjang Belanja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row center">
            <div class="col">
              <div class="card">
                <table class="table table-hover shopping-cart-wrap">
                  <thead class="text-muted">
                    <tr class="text-center">
                      <th width="40%">Nama Obat</th>
                      <th width="10%">Jumlah</th>
                      <th width="20%">Harga Obat</th>
                      <th width="20%" class="text-right">Harga</th>
                      <th width="10%" class="text-right">Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(!empty($_SESSION["keranjang"])){
                      $total = 0;
                      foreach($_SESSION["keranjang"] as $keys => $values){
                    ?>
                    <tr>
                      <td>
                        <figure class="media">
                          <div class="img-wrap"><img src="../images/items/<?php echo $values["foto_obat"] ?>" class="img-thumbnail img-sm"></div>
                          <figcaption class="media-body my-auto">
                            <h6><?php echo $values["nama_obat"] ?></h6>
                          </figcaption>
                        </figure>
                      </td>
                      <td>
                        <select class="form-control mt-4">
                          <option><?php echo $values["jumlah"] ?></option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </td>
                      <td>
                          <p class="text-success text-right mt-4 pt-2"><?php echo rp($values["harga"]) ?></p>
                      </td>
                      <td>
                          <p class="text-success text-right mt-4 pt-2"><?php echo rp($values["jumlah"] * $values["harga"]) ?></p>
                      </td>
                      <td class="text-right">
                        <a href="detailobat.php?id_obat=<?php echo $values["id_obat"] ?>&beli=hapus" class="btn btn-outline-danger mt-4"> <i class="fas fa-times-circle"></i> </a>
                      </td>
                      <?php
                      $total = $total + ($values["jumlah"] * $values["harga"]);
                      }
                      ?>
                    </tr>
                    <tr>
                      <td align="right" colspan="2">Total:</td>
                      <td class="text-right text-success" colspan="2"><strong><?php echo rp($total) ?></strong></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div> <!-- card.// -->
            </div>
          </div>
        <div class="modal-footer">
          <div class="center">
            <a href="index.php" class="btn btn-success btn-block"> Ayo Mulai Belanja </a>
          </div>
        </div>
        </div>
        <?php
        }
        else { ?>
          <div class="modal-body">
            <div class="text-center">
              <img src="../images/icons/belanja.svg" alt="Daftar Belanja" width="70%">
              <h5 class="mt-3">Belum ada obat di dalam keranjang belanja kamu</h5>
              <p class="small text-secondary mt-2 mb-0">Ayo mulai belanja di TOBAT Online dan nikmati kemudahannya</p>
            </div>
          </div>
          <div class="modal-footer">
            <div class="center">
              <a href="index.php" class="btn btn-success btn-block"> Ayo Mulai Belanja </a>
            </div>
          </div>
          </div>
        <?php
          }
        } ?>
  </body>
</html>
