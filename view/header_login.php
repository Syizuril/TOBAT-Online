<header class="section-header">
  <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top">
    <a href="#" class="navbar-brand"> <img src="../images/tobattrans.png" alt="TOBAT Online" width="100"></a>
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
            <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
          </div>
        </li>
      </ul>
          <form class="navbar-form form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-light" type="submit"><i class="fa fa-search"></i></button>
          </form>
      <ul class="navbar-nav">
        <li class="dropdown">
          <img class="img img-responsive circle dropdown-toggle ml-2" width="30" data-toggle="dropdown" src="../images/avatars/<?php echo $_SESSION['user']['foto']?>" /><span class="caret"></span>
          <ul class="dropdown-menu dropdown-menu-right mt-2" style="width:1000">
              <li><p class="dropdown-item my-0 text-muted">Halo!</p><li>
              <li><p class="dropdown-item my-0"><?php echo $_SESSION['user']['nama']?></p><li>
              <li><a class="dropdown-item" href="#">Link 1</a><li>
              <li><a class="dropdown-item" href="#">Link 2</a><li>
              <li><a class="dropdown-item" href="../config/logout.php">Keluar</a><li>
         </ul>
        </li>
      </ul>
     </div>
    </div>
  </nav>
</header>
