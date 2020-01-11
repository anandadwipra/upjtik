<!DOCTYPE html>
<html>
<head>
	<title>Seleksi Beasiswa</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="dashboard.css">
	
</head>
<body>


<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">



	<a class="navbar-brand col-sm-4 col-md-2 mr-0" href="#">
		<b>UPJ-TIK Nega</b>
	</a>

	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
			<a class="nav-link" href="#">Log out</a>
		</li>
	</ul>
</nav>

<div class="container-fluid">
	<div class="row">
		<nav class="col-md-2 d-none d-md-block bg-light sidebar">
			<div class="sidebar-sticky">
				<?php
					include 'view/menu.php';
			 	?>
			 </div>
		</nav>
	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<main role="main" class="container">
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
			 ?>
		</main>
	</main>
		
	</div>
</div>
</body>
</html>