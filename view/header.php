<header class="section-header">
  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
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
          <form class="form-inline" action="/action_page.php">
            <input class="form-control" type="search" placeholder="Search">
            <button class="btn btn-outline-light" type="submit"><i class="fa fa-search"></i></button>
          </form>
      <ul class="navbar-nav mx-1 py-1">
        <li class="dropdown">
          <button type="button" name="login" class="btn btn-outline-light dropdown-toggle btn-block" data-toggle="dropdown">Masuk</button>
          <ul class="dropdown-menu dropdown-menu-right mt-2 shadow">
            <li class="px-4 py-2">
              <a href="" class="float-right btn btn-outline-primary" data-toggle="modal" data-target="#daftar">Daftar</a>
              <h4 class="mb-4 mt-1">Masuk</h4>
              <p>
                <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i> &nbsp; Login via Twitter</a>
                <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> &nbsp; Login via facebook</a>
              </p>
              <hr>
              <form class="form-horizontal" action="" method="POST">
                <div class="form-group input-icon">
                  <i class="fa fa-user"></i>
                    <input name="email" class="form-control" placeholder="Email" type="email" required>
                </div> <!-- form-group// -->
                <div class="form-group input-icon">
                  <i class="fa fa-lock"></i>
                  <input name="password" class="form-control" placeholder="******" type="password" required>
                </div> <!-- form-group// -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mt-2">
                      <button name="login" type="submit" class="btn btn-success btn-block"> Masuk </button>
                    </div> <!-- form-group// -->
                  </div>
                  <div class="col-md-6 text-right">
                    <a class="small text-info" href="#" data-toggle="modal" data-target="#lupa">Lupa Password?</a>
                  </div>
                </div> <!-- .row// -->
              </form>
            </li>
          </ul>
        </li>
      </ul>
     </div>
    </div>
  </nav>
</header>
<div class="modal fade" id="daftar" role="dialog">
<div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content mr-auto">
    <div class="modal-header">
      <h5 class="modal-title">Buat Akun</h5>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <p>
        <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i> &nbsp; Login via Twitter</a>
        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> &nbsp; Login via facebook</a>
      </p>
      <p class="divider-text">
            <span>ATAU</span>
      </p>
      <form action="" method="post" oninput='password2.setCustomValidity(password2.value != password.value ? "Password tidak sesuai." : "")'>
        <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
            <input name="nama" class="form-control" placeholder="Nama Panjang" type="text" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
          </div>
            <input name="email" class="form-control" placeholder="Alamat Email" type="email" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
          </div>
          <select class="custom-select" style="max-width: 120px;">
            <option selected="">+62</option>
          </select>
            <input name="no_hp" class="form-control" placeholder="Nomor Telepon" type="number" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
          </div>
          <input name="alamat" class="form-control" placeholder="Alamat" type="text" required>
        </div> <!-- form-group end.// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
            <input name="password" class="form-control" placeholder="Password" type="password" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
          </div>
            <input name="password2" class="form-control" placeholder="Ulangi password" type="password" required>
        </div> <!-- form-group// -->
        </div>
        <div class="modal-footer">
        <ul class="row mr-auto mx-4">
            <li>
              <div class="col form-group">
                  <button type="submit" class="btn btn-success btn-block" name="register"> Buat Akun </button>
            </div> <!-- form-group// -->
          </li>
        </ul>
        <ul class="row mr-auto mx-4">
          <li>
            <p class="col">Sudah punya akun ? <a href="">Masuk</a> </p>
          </li>
        </ul>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="lupa" role="dialog">
<div class="modal-dialog modal-dialog-centered">
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Lupa Password</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p class="text-center">
        Masukkan Email dan Nomor Telepon Anda !
      </p>
      <form>
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
          </div>
            <input name="" class="form-control" placeholder="Alamat Email" type="email" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
          </div>
          <select class="custom-select" style="max-width: 120px;">
            <option selected="">+62</option>
          </select>
            <input name="" class="form-control" placeholder="Nomor Telepon" type="number">
        </div> <!-- form-group// -->
        </div>
        <div class="modal-footer">
        <ul class="row form-group">
            <li class="col">
              <button type="submit" class="btn btn-success btn-block"> Kirim Password </button>
            </li>
            <li class="col">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </li>
        </ul>
        </div>
      </form>
  </div>
</div>
</div>
