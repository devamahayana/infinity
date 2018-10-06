<?php 
	require_once 'core/init.php';
	if (!isset($_SESSION['username'])) {
		echo "<script>
		alert('anda belum login !');
			location.href = 'index.php';

		</script>";
	}
	/*$username = $_SESSION['username'];
	$query = "SELECT * FROM tb_login WHERE username = '$username'";
	$hasil = */
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sekolahku </title>
	<link rel="stylesheet" type="text/css" href="css/admin.css?v=2.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/solid.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/regular.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/brands.css">
	<meta name="viewport" content="width-device-width, initial-scale=1">
</head>
<body>
	<div class="wrapper">
		<div class="container-sidemenu">
			<div class="section-atas">
				<h2>E-<b>School</b></h2>
				<i class="fas fa-home"></i>
				<i class="fas fa-envelope"></i>
			</div>
			<div class="img">
				<img src="" width="100%" >
			</div>
			<p style="text-align: center;">Selamat Datang</p>
			<p style="text-align: center; margin-top: -20px !important;"><a class="profil" href="#">Deva Mahayana</a></p>
			<p>Admin</p>
			<nav>
				<ul>
					<li><a class="urlmenu" href="admin.php">Dashboard</a></li>
					<li><a id="submenu1" onclick="opensubmenu1()">Admin</a>
						<ul id="list1" class="closesub">
							<li><a class="urlmenu" href="admin/user/index.php">User</a></li>
							<li><a class="urlmenu" href="admin/matpel/index.php">Mata Pelajaran</a></li>
							<li><a class="urlmenu" href="admin/kelas/index.php">Kelas</a></li>
						</ul>
					</li>
					<li><a id="submenu2" onclick="opensubmenu2()">Guru</a>
						<ul id="list2" class="closesub">
							<li><a class="urlmenu" href="guru/semuaguru/index.php">Semua Guru</a></li>
						</ul>
					</li>
					<li><a id="submenu3" onclick="opensubmenu3()">Siswa</a>
						<ul id="list3" class="closesub">
							<li><a class="urlmenu" href="siswa/semuasiswa/index.php">Semua siswa</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<div class="container-menu">
			<button id="btn" onclick="openmenu()">
				<i class="fas fa-bars"></i>
			</button>
			<nav>
				<i class="fas fa-user"></i>
				<i class="far fa-calendar-alt"></i>
				<i class="fas fa-bell"></i>
				<a class="logout" href="logout.php">Keluar</a>
			</nav>
		</div>