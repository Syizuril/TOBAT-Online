<header class="section-header">
  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <a href="index-login.php" class="navbar-brand"> <img src="../images/tobattrans.png" alt="TOBAT Online" width="100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item dropdown dropdown_a">
          <a class="nav-link dropdown-toggle dropdown-toggle_a" href="#" id="navbardrop" data-toggle="dropdown">
            Kategori <i class="fas fa-chevron-circle-down"></i>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Antiseptik dan Desinfektan Kulit</a>
            <a class="dropdown-item" href="#">Vitamin dan Mineral</a>
            <a class="dropdown-item" href="#">Dekongestan Nasal dan Preparat Nasal Lain</a>
            <a class="dropdown-item" href="#">Suplemen dan Terapi Penunjang</a>
            <a class="dropdown-item" href="#">Obat Batuk dan Pilek</a>
            <a class="dropdown-item" href="#">Antasid, Obat Antirefluks & Antiulserasi</a>
            <a class="dropdown-item" href="#">Preparat Mulut/Tenggorokan</a>
            <a class="dropdown-item" href="#">Alat Kesehatan Medis</a>
            <a class="dropdown-item" href="#">Obat Kulit Lain</a>
            <a class="dropdown-item" href="#">Analgesik (Non Opiat) dan Antipiretik</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav mx-1 py-1">
        <form class="form-inline navbar-nav" action="/action_page.php">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-light" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </ul>
      <ul class="navbar-nav mx-2">
        <a href="keranjangbelanja.php" class="btn btn-outline-light"><i class="fas fa-cart-plus"></i></a>
      </ul>
      <ul class="navbar-nav">
        <li class="dropdown">
          <img class="img img-responsive circle dropdown-toggle ml-2" width="30" data-toggle="dropdown" src="../images/avatars/<?php echo $_SESSION['user']['foto']?>" /><span class="caret"></span>
          <ul class="dropdown-menu dropdown-menu-right mt-2" style="width:1000">
              <li><p class="dropdown-item my-0 text-muted">Halo!</p><li>
              <li><a href="profile.php?email=<?php echo $_SESSION['user']['email'] ?>"class="dropdown-item"><?php echo $_SESSION['user']['nama']?></a><li>
              <li><a class="dropdown-item" href="pemesanan.php">Riwayat Belanja</a><li>
              <li><a class="dropdown-item" href="listbantuan.php">Bantuan</a><li>
              <li><a class="dropdown-item" href="../config/logout.php">Keluar</a><li>
         </ul>
        </li>
      </ul>
     </div>
    </div>
  </nav>
</header>
