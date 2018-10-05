<?php 
	require_once 'core/init.php';
	if (!isset($_SESSION['username'])) {
		echo "<script>
			location.href = 'index.php';
		</script>";
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sekolahku <?php echo $_SESSION['username']; ?> </title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/solid.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/regular.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/brands.css">
	<meta name="viewport" content="width-device-width, initial-scale=1">
</head>
<body>
	<div class="wrapper">
		<div class="container-sidemenu">
			<div class="img"></div>
			<p style="text-align: center;"><a class="profil" href="#">Admin</a></p>
			<nav>
				<ul>
					<li><a class="urlmenu" href="admin.php">Dashboard</a></li>
					<li><a id="submenu1" onclick="opensubmenu1()">Admin</a>
						<ul id="list1" class="closesub">
							<li><a class="urlmenu" href="admin/user/index.php">User</a></li>
						</ul>
					</li>
					<li><a id="submenu2" onclick="opensubmenu2()">Guru</a>
						<ul id="list2" class="closesub">
							<li><a class="urlmenu" href="guru/semuaguru/index.php">Semua Guru</a></li>
						</ul>
					</li>
					<li><a id="submenu3" onclick="opensubmenu3()">Murid</a>
						<ul id="list3" class="closesub">
							<li><a href="#">test</a></li>
							<li><a href="#">test</a></li>
							<li><a href="#">test</a></li>
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