<?php
require_once("../config/config.php");
require_once("../config/readobat.php");
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
	width: 150px;
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
<!-- ========================= SECTION ITEMS ========================= -->
<section class="section-request bg padding-y-sm">
<div class="container">
<header class="section-heading heading-line">
	<h4 class="title-section bg">Lebih Banyak Rekomendasi Untukmu</h4>
</header>
<div class="row-sm">
  <?php
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
  if (++$i == 12) break;
  endforeach; ?>
</div><!-- container // -->
</section>
<!-- ========================= SECTION ITEMS .END// ========================= -->
