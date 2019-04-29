<?php
require_once("../config/config.php");
require_once("../config/readobatvitamin.php");
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
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y-sm bg">
<div class="container">

<header class="section-heading heading-line">
	<h4 class="title-section bg">Obat Batuk dan Pilek</h4>
</header>

<div class="card">
<div class="row no-gutters">
	<div class="col-md-3">

  <article href="#" class="card-banner h-100 bg2">
  	<div class="card-body zoom-wrap">
  		<h5 class="title">Obat Batuk dan Pilek</h5>
  		<p>Consectetur adipisicing elit, sed do eiusmod
  		tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, cLorem ipsum dolor sit amet, cLorem ipsum dolor sit amet, cLorem ipsum dolor sit amet, c</p>
  		<a href="#" class="btn btn-warning">Explore</a>
  		<img src="../images/items/item-sm.png" height="200" class="img-bg zoom-in">
  	</div>
  </article>

	</div> <!-- col.// -->
	<div class="col-md-9">
    <?php
    shuffle($data);
    $i = 0;
    foreach ($data as $value): ?>
    <ul class="row no-gutters border-cols">
      <?php
      shuffle($data);
      $j = 0;
      foreach ($data as $value): ?>
    	<li class="col-6 col-md-3">
        <a href="#" class="itembox">
        	<div class="card-body">
        		<p class="word-limit title text-dark"><?php echo $value['nama_obat'] ?><br>
            <span class="font-weight-bold text-success"><?php echo rp($value['harga'])?></span></p>
        		<img class="img-sm" src="../images/items/<?php echo $value['foto_obat']?>">
        	</div>
        </a>
    	</li>
      <?php
			if (++$j == 4) break;
			endforeach; ?>
    </ul>
    <?php
    if (++$i == 2) break;
    endforeach; ?>
	</div> <!-- col.// -->
</div> <!-- row.// -->

</div> <!-- card.// -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
