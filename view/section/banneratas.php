<?php
require_once("../config/config.php");
require_once("../admin/config/readobat.php");
?>
<script type="text/javascript">// <![CDATA[
$(function(){
  $(".judul").each(function(i){
    len=$(this).text().length;
    if(len>80)
    {
      $(this).text($(this).text().substr(0,80)+'...');
    }
  });
});
// ]]></script>
<style media="screen">
	.judul {
	white-space: nowrap;
	width: 200px;
	overflow: hidden;
	text-overflow: ellipsis;
	}
	.fig_atas {
		z-index: 1;
		position: relative;
	}
	.fig_bawah {
		z-index: -1;
		position: relative;
	}
</style>
<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-y-sm">
<div class="container">
<div class="card">
	<div class="card-body">
<div class="row row-sm">
	<aside class="col-md-3">
<h5 class="text-uppercase">Ketegori</h5>
	<ul class="menu-category">
		<li> <a href="#">Food &amp Beverage </a></li>
		<li> <a href="#">Home Equipments </a></li>
		<li> <a href="#">Machinery Items </a></li>
		<li> <a href="#">Toys & Hobbies  </a></li>
		<li> <a href="#">Consumer Electronics  </a></li>
		<li> <a href="#">Beauty & Personal Care  </a></li>
		<li class="has-submenu"> <a href="#">More category  <i class="icon-arrow-right pull-right"></i></a>
			<ul class="submenu">
				<li> <a href="#">Food &amp Beverage </a></li>
				<li> <a href="#">Home Equipments </a></li>
				<li> <a href="#">Machinery Items </a></li>
				<li> <a href="#">Toys & Hobbies  </a></li>
				<li> <a href="#">Consumer Electronics  </a></li>
				<li> <a href="#">Home & Garden  </a></li>
				<li> <a href="#">Beauty & Personal Care  </a></li>
			</ul>
		</li>
	</ul>

	</aside> <!-- col.// -->
	<div class="col-md-6">
		<!-- 2-carousel bootstrap -->
	<div id="carousel2_indicator" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="../images/banners/slide1.jpg" alt="First slide">
				<article class="carousel-caption d-none d-md-block">
				<h5>First slide label</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt.</p>
			</article> <!-- carousel-caption .// -->
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="../images/banners/slide2.jpg" alt="Second slide">
				<article class="carousel-caption d-none d-md-block">
				<h5>Second slide label</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt.</p>
			</article> <!-- carousel-caption .// -->
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="../images/banners/slide3.jpg" alt="Third slide">
				<article class="carousel-caption d-none d-md-block">
				<h5>Third slide label</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt</p>
			</article> <!-- carousel-caption .// -->
			</div>
		</div>
		<a class="carousel-control-prev" href="#carousel2_indicator" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel2_indicator" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- ==================  2-carousel bootstrap.// ==================  -->

	</div> <!-- col.// -->
		<aside class="col-md-3">

		<h6 class="title-bg bg-success"> Rekomendasi Untukmu </h6>
		<div style="height:280px;">
			<?php
			shuffle($data);
			$i = 0;
			foreach ($data as $value): ?>
			<a href="#">
				<figure class="itemside has-bg border-bottom" style="height: 33%;">
					<img class="img-bg float-right fig_bawah" height="100%" src="../images/items/<?php echo $value['foto_obat']?>">
					<figcaption class="p-2 fig_atas">
						<h6 class="title judul text-dark"><?php echo $value['nama_obat'] ?></h6>
						<p href="#" class="font-weight-bold text-success"><?php echo rp($value['harga'])?></p>
					</figcaption>
				</figure>
			</a>
			<?php
			if (++$i == 3) break;
			endforeach; ?>
		</div>

		</aside>
		</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</div> <!-- card.// -->

<figure class="mt-3 banner p-3 bg-secondary">
	<div class="text-lg text-center white">Useful banner can be here</div>
</figure>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION MAIN END// ========================= -->
