<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/success.css">
</head>
<body>
	<div class="wreaper">
		<div class="success">
			<img src="images/success.gif">
			<p>Success</p>
			<?php 
	
				require_once 'core/init.php';

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

				if ($d['level'] == "Admin") {
					echo "<a href='admin/dashboard/admin.php'>OK</a>";
				}elseif ($d['level'] == "Guru") {
					echo "<a href='guru/dashboard/guru.php'>OK</a>";
				}elseif ($d['level'] == "Siswa") {
					echo "<a href='siswa/dashboard/siswa.php'>OK</a>";
				}


			?>
		</div>
	</div>
</body>
</html>