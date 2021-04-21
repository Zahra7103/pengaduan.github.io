<html>
<head>
	<title>Aplikasi Pengaduan Masyarakat</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">Aplikasi Pengaduan Masyarakat</h1>
		<h3 class="deskripsi">SMK NEGERI 1 PEDAN</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=masyarakat">Data Masyarakat</a></li>
			<li><a href="index.php?page=pengaduan">Data Pengaduan</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'masyarakat':
				include "input.php";
				break;
			case 'pengaduan':
				include "pengaduan.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>