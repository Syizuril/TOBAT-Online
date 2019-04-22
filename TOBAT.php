<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
    <link href="plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="css/ui.css" rel="stylesheet" type="text/css"/>
    <link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="js/script.js" type="text/javascript"></script>

    <title></title>
  </head>
  <body>
    <div class="container">
      <h1>My First Bootstrap Page</h1>
      <p>Ini adalah beberapa teks</p>
      <div class="row">
        <div class="col">.col</div>
        <div class="col">.col</div>
        <div class="col">.col</div>
      </div>
      <div class="row">
        <div class="col-sm-3">.col-sm-3</div>
        <div class="col-sm-3">.col-sm-3</div>
        <div class="col-sm-3">.col-sm-3</div>
        <div class="col-sm-3">.col-sm-3</div>
      </div>
      <div class="row">
        <div class="col-sm-4">.col-sm-4</div>
        <div class="col-sm-8">.col-sm-8</div>
      </div>
      <div class="container">
        <h2>Contextual Colors</h2>
        <p>Use the contextual classes to provide "meaning through colors":</p>
        <p class="text-muted">This text is muted.</p>
        <p class="text-primary">This text is important.</p>
        <p class="text-success">This text indicates success.</p>
        <p class="text-info">This text represents some information.</p>
        <p class="text-warning">This text represents a warning.</p>
        <p class="text-danger">This text represents danger.</p>
        <p class="text-secondary">Secondary text.</p>
        <p class="text-dark">This text is dark grey.</p>
        <p class="text-body">Default body color (often black).</p>
        <p class="text-light">This text is light grey (on white background).</p>
        <p class="text-white">This text is white (on white background).</p>
        <h2>Background Colors</h2>
        <p class="bg-primary text-white">Teks ini penting</p>
        <p class="bg-success text-white">Teks ini menandakan hal sukses</p>
        <p class="bg-info text-white">Teks ini menandakan sebuah informasi</p>
        <p class="bg-warning text-white">This text represents a warning.</p>
        <p class="bg-danger text-white">This text represents danger.</p>
        <p class="bg-secondary text-white">Secondary background color.</p>
        <p class="bg-dark text-white">Dark grey background color.</p>
        <p class="bg-light text-dark">Light grey background color.</p>
      </div>
      <div class="container">
        <h2>Basic Table</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Nama Pertama</th>
              <th>Nama Kedua</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
          </tbody>
        </table>
        <h2>Bordered Table</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama Pertama</th>
              <th>Nama Kedua</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
          </tbody>
        </table>
        <h2>Striped Table</h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nama Pertama</th>
              <th>Nama Kedua</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
          </tbody>
        </table>
        <h2>Hover Table</h2>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Nama Pertama</th>
              <th>Nama Kedua</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
          </tbody>
        </table>
        <h2>Dark Table</h2>
        <table class="table table-dark table-hover">
          <thead>
            <tr>
              <th>Nama Pertama</th>
              <th>Nama Kedua</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
          </tbody>
        </table>
        <h2>Dark Table Borderless</h2>
        <table class="table table-dark table-borderless">
          <thead>
            <tr>
              <th>Nama Pertama</th>
              <th>Nama Kedua</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
          </tbody>
        </table>
        <h2>Table Contextual</h2>
        <table class="table">
          <thead class="thead-dark">
            <tr class="table-primary">
              <th>Nama Pertama</th>
              <th>Nama Kedua</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-danger">
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr class="table-warning">
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
            <tr class="table-active">
              <td>John</td>
              <td>Doe</td>
              <td>John@example.com</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
                <th>City</th>
                <th>Country</th>
                <th>Sex</th>
                <th>Example</th>
                <th>Example</th>
                <th>Example</th>
                <th>Example</th>
                <th>Example</th>
                <th>Example</th>
                <th>Example</th>
                <th>Example</th>
                <th>Example</th>
                <th>Example</th>
                <th>Example</th>
                <th>Example</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Anna</td>
                <td>Pitt</td>
                <td>35</td>
                <td>New York</td>
                <td>USA</td>
                <td>Female</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
              </tr>
            </tbody>
          </table>
        </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <img src="images/RF/item-img01.jpg" alt="Rune Factory" class="img-thumbnail" width="304" height="236">
            <img src="images/RF/item-img01.jpg" alt="Rune Factory" class="float-right" width="304" height="236">
            <img src="images/RF/item-img01.jpg" alt="Rune Factory" class="mx-auto d-block" width="304" height="236">
            <img src="images/RF/item-img01.jpg" alt="Rune Factory" class="img-fluid mx-auto d-block" width="304" height="236">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="jumbotron">
          <h1>Bootstrap Tutorial</h1>
          <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
        </div>
      </div>
      <div class="alert alert-success">
        <strong>Success!</strong>Alert kotak ini mengidentifikasikan aksi positif atau sukses
      </div>
      <div class="alert alert-info">
        <strong>Info!</strong>Kotak Alert ini mengidentifikasikan aksi informasi perubahan atau aksi.
      </div>
      <div class="alert alert-warning">
        <strong>Mohon Maaf!</strong>Kamu harus membaca <a href="#" class="alert-link"> pesan berikut</a>
      </div>
      <div class="alert alert-success alert-dismissible">
        <button type="button" name="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong>Alert kotak ini mengidentifikasikan aksi positif atau sukses
      </div>
    </div>
    <div class="container">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> This alert box could indicate a successful or positive action.
      </div>
      <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
      </div>
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
      </div>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
      </div>
      <div class="alert alert-primary alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Primary!</strong> Indicates an important action.
      </div>
      <div class="alert alert-secondary alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Secondary!</strong> Indicates a slightly less important action.
      </div>
      <div class="alert alert-dark alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Dark!</strong> Dark grey alert.
      </div>
      <div class="alert alert-light alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Light!</strong> Light grey alert.
      </div>
    </div>
    <div class="container">
      <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> This alert box could indicate a successful or positive action.
      </div>
      <div class="alert alert-info alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
      </div>
      <div class="alert alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
      </div>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
      </div>
      <div class="alert alert-primary alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Primary!</strong> Indicates an important action.
      </div>
      <div class="alert alert-secondary alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Secondary!</strong> Indicates a slightly less important action.
      </div>
      <div class="alert alert-dark alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Dark!</strong> Dark grey alert.
      </div>
      <div class="alert alert-light alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Light!</strong> Light grey alert.
      </div>
    </div>
    <div class="container">
      <button type="button" name="button" class="btn">Basic</button>
      <button type="button" name="button" class="btn btn-primary">Button Primary</button>
      <button type="button" name="button" class="btn btn-secondary">Button Secondary</button>
      <button type="button" name="button" class="btn btn-success">Button Success</button>
      <button type="button" class="btn btn-info">Info</button>
      <button type="button" class="btn btn-warning">Warning</button>
      <button type="button" class="btn btn-danger">Danger</button>
      <button type="button" class="btn btn-dark">Dark</button>
      <button type="button" class="btn btn-light">Light</button>
      <button type="button" class="btn btn-link">Link</button>
      <a href="#" class="btn btn-info" role="button">Ini button</a>
    </div>
    <div class="container">
      <h1>Button Outline</h1>
      <button type="button" name="button" class="btn btn-outline-success">Primary Button</button>
      <button type="button" name="button" class="btn btn-outline-info">Info Button</button>
      <button type="button" name="button" class="btn btn-outline-warning">Warning Button</button>
      <button type="button" name="button" class="btn btn-outline-primary">Primary Button</button>
      <h1>Block Level Button</h1>
      <button type="button" name="button" class="btn btn-primary btn-block">Full Width Button</button>
      <h1>Active Deactive Button</h1>
      <button type="button" name="button" class="btn btn-primary active">Tombol Aktif</button>
      <button type="button" name="button" class="btn btn-warning" disabled>Tombol Nonaktif</button>
    </div>
  </body>
</html>
