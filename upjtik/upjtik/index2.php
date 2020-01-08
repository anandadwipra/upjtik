<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pemantauan BTS Nega</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="simple-sidebar.css" rel="stylesheet">

</head>
<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="bg-dark sidebar-heading shadow">UPJ-TIK Nega</div>
      <div class="bg-success list-group list-group-flush">
        
        <a href="index.php?view=tambah_data_upjtik" class="list-group-item list-group-item-action bg-light">Tambah Data</a>

        <a href="index.php?view=lihat_data_upjtik" class="list-group-item list-group-item-action bg-light">Lihat Data</a>
        <a href="index.php?view=edit_data_upjtik" class="list-group-item list-group-item-action bg-light">Overview</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom shadow">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>
      <?php 
      switch ($_GET['view']) {
        case 'tambah_data_upjtik':
        echo 'Tambah Data Disini';
        include 'view/tambah_data.php';
          break;
        case 'lihat_data_upjtik':
        echo 'Lihat Data Disini';
        include 'view/lihat_data.php';
          break;

        case 'edit_data_upjtik':
        echo 'Edit Data Disini';
        include 'view/edit_data.php';
          break;

        default:
          echo 'Kadal Was Here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quo, illum mollitia aliquid provident. Sunt, aperiam voluptas minus. Placeat, odit.';
          include 'view/lihat_data.php';
          break;
       } 
       ?></p>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>