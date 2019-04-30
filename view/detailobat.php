<?php
  require_once("../config/config.php");
  require("../config/auth.php");
  require_once("../config/detailobat.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $data['nama_obat'] ?> - TOBAT Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

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
    <script type="text/javascript">
    $(function(){
      $(".judul").each(function(i){
        len=$(this).text().length;
        if(len>80)
        {
          $(this).text($(this).text().substr(0,80)+'...');
        }
      });
    });
    </script>
    <style media="screen">
    .judul {
    	white-space: nowrap;
    	width: 10px;
    	overflow: hidden;
    	text-overflow: ellipsis;
  	}
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
    require("header_login.php");?>
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
    <div class="col-xl-10 col-md-9 col-sm-12">


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
    		<div class="col-sm-12">
    			<dl class="dlist-inline">
    			  <dt>Quantity: </dt>
    			  <dd>
    			  	<select class="form-control form-control-sm" style="width:70px;">
                <?php
                for($i=1;$i<100;$i++){?>
                <option><?php echo $i ?></option>
                <?php } ?>
    			  	</select>
    			  </dd>
    			</dl>  <!-- item-property .// -->
    		</div> <!-- col.// -->
    	</div> <!-- row.// -->
    	<hr>
    	<a href="#" class="btn  btn-outline-success"> <i class="fa fa-envelope"></i> Tanyakan Produk Ini </a>
    	<a href="#" class="btn  btn-success"> Beli Obat </a>
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
    <aside class="col-xl-2 col-md-3 col-sm-12">
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
        				<a href="detailobat.php?id_obat=<?php echo $value['id_obat'] ?>" class="title judul text-dark font-weight-normal"><?php echo $value['nama_obat']?></a>
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



    </div><!-- container // -->
    </section>
    <!-- ========================= SECTION CONTENT .END// ========================= -->

    <?php
    require("section/footer.php");?>
  </footer>
  </body>
</html>
