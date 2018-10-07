<?php 
	
	if (!isset($_SESSION['username'])) {
		echo "<script>
		alert('anda belum login !');
			location.href = '../../index.php';

		</script>";
	}
	$username = $_SESSION['username'];
	$query = "SELECT * FROM tb_login WHERE username = '$username'";
	$hasil = mysqli_query($link , $query);
	$d 	= mysqli_fetch_assoc($hasil);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sekolahku </title>
	<link rel="stylesheet" type="text/css" href="../../css/admin.css?v=2.0">
	<link rel="stylesheet" type="text/css" href="../../fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../fontawesome/css/solid.css">
	<link rel="stylesheet" type="text/css" href="../../fontawesome/css/regular.css">
	<link rel="stylesheet" type="text/css" href="../../fontawesome/css/brands.css">
	<meta name="viewport" content="width-device-width, initial-scale=1">
</head>
<body>
	<div class="wrapper">
		<div class="container-sidemenu">
			<button id="btn" onclick="closemenu()">
				<i class="fas fa-angle-left"></i>
			</button>
			<div class="section-atas">
				<h2>E-<b>School</b></h2>
				<i class="fas fa-home"></i>
				<i class="fas fa-envelope"></i>
			</div>
			<div class="img">
				<img src="" width="100%" >
			</div>
			<p style="text-align: center;">Selamat Datang</p>
			<p style="text-align: center; margin-top: -20px !important;">
				<a class="profil" href="#">
					<?php echo $d['username']; ?>
				</a>
			</p>
			<p style="text-align: center; margin-top: -15px !important;"><?php echo $d['level']; ?></p>
			<nav>
				<ul>
					<li>
						<?php 
							if ($d['level'] == "Admin") {
								echo "<a class='urlmenu' href='../../admin/dashboard/admin.php'><i class='fas fa-tachometer-alt'></i>&nbsp;Dashboard</a>";
							}elseif ($d['level'] == "Guru") {
								echo "<a class='urlmenu' href='../../guru/dashboard/guru.php'><i class='fas fa-tachometer-alt'></i>&nbsp;Dashboard</a>";
							}elseif ($d['level'] == "Siswa") {
								echo "<a class='urlmenu' href='../../siswa/dashboard/siswa.php'><i class='fas fa-tachometer-alt'></i>&nbsp;Dashboard</a>";
							}
						 ?>
					</li>
					<?php 
						if ($d['level'] == "Admin") {
					 ?>
					<li><a id="submenu1" onclick="opensubmenu1()"><i class="fas fa-users"></i>&nbsp;Admin</a>
						<ul id="list1" class="closesub">
							<li><a class="urlmenu" href="../../admin/user/index.php"><i class="fas fa-user"></i>&nbsp;User Admin</a></li>
							<li><a class="urlmenu" href="../../admin/matpel/index.php"><i class="fas fa-book"></i>&nbsp;Mata Pelajaran</a></li>
							<li><a class="urlmenu" href="../../admin/kelas/index.php"><i class="fas fa-copy"></i>&nbsp;Kelas</a></li>
						</ul>
					</li>
					<?php 
						}else{
							echo "";
						}
					 ?>
					<li><a id="submenu2" onclick="opensubmenu2()"><i class="fas fa-chalkboard-teacher"></i>&nbsp;Guru</a>
						<ul id="list2" class="closesub">
							<li><a class="urlmenu" href="../../guru/userguru/index.php">User Guru</a></li>
						</ul>
					</li>
					<li><a id="submenu3" onclick="opensubmenu3()"><i class="fas fa-user"></i>&nbsp;Siswa</a>
						<ul id="list3" class="closesub">
							<li><a class="urlmenu" href="../../siswa/semuasiswa/index.php">Semua siswa</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<div class="container-menu">
			<div class="section-kiri">
				<i class="fas fa-search"></i>
				<input type="text" name="" placeholder="Cari Data Disini ...">
			</div>

			<div class="section-kanan">
				<p>
					<?php 
						if ($d['level'] == 'Admin') {
							echo "<b>".$d['username']."</b>";
						}elseif ($d['level'] == 'Guru') {
							$kode_login = $d['kode_login'];
							$showguru = "SELECT * FROM tb_guru WHERE kode_login = $kode_login";
							$fetch = mysqli_query($link,$showguru);
							$show = mysqli_fetch_assoc($fetch);
							echo "<b>".$show['nama_guru']."</b>";
						}elseif ($d['level'] == 'Siswa') {
							$kode_login = $d['kode_login'];
							$showguru = "SELECT * FROM tb_siswa WHERE kode_login = $kode_login";
							$fetch = mysqli_query($link,$showguru);
							$show = mysqli_fetch_assoc($fetch);
							echo "<b>".$show['nama_siswa']."</b>";
						}

					 ?>
				</p>
				<i class="fas fa-caret-down"></i>
				<img src="../../images/profil.jpg" width="40px">
				<i class="fas fa-cog"></i>
				<a class="logout" href="../../logout.php"><i class="fas fa-sign-out-alt"></i></a>
			</div>

			<!-- <nav>
				<i class="fas fa-user"></i>
				<i class="far fa-calendar-alt"></i>
				<i class="fas fa-bell"></i>
				<a class="logout" href="logout.php">Keluar</a>
			</nav> -->
		</div>