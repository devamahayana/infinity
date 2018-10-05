<?php 
	
	require_once 'core/init.php';
	if (isset($_SESSION['username'])) {
		echo "<script>
			location.href = 'admin.php';
		</script>";
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/solid.css">
	<meta name="viewport" content="width-device-width, initial-scale=1">
</head>
<body>
	<div class="wrapper">
		<div class="container-login">
			<div class="form-login">
				<div class="content-login">
					<h2>Hi guys !</h2>
					<p>Login dahulu untuk menggunakan website ini</p>
					<img src="images/images2.jpg">
					
				</div>
				<div id="order" class="content-login">
					
					<div class="login">
						<form action="index.php" method="post">
							<br>	
							<i class="fas fa-user"></i>
							<input class="input-text" type="text" name="username" placeholder="Username">
							<br>	
							<br>	
							<i class="fas fa-lock"></i>
							<input class="input-text" type="password" name="password" placeholder="Password"
							>
							<input class="btn-login" type="submit" name="submit" value="Login">
						</form>
					</div>	
				</div>

			</div>
		</div>
	</div>
</body>
</html>
<?php 
	

	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (trim($username) && trim($password)) {
			//query admin
			
			$query = "SELECT * FROM tb_login WHERE username = '$username' AND password = '$password'";
			$hasil = mysqli_query($link , $query);
			if (mysqli_num_rows($hasil) == 1) {
				$data = mysqli_fetch_assoc($hasil);
				if ($data['level'] == "admin") {
					$_SESSION['username'] = $data['username'];
					echo "
						<script>
							alert('Admin berhasil Login');
							location.href = 'admin.php';
						</script>
					";
				}elseif ($data['level'] == "guru") {
					$_SESSION['username'] = $data['username'];
					echo "
						<script>
							alert('Guru berhasil Login');
						</script>
					";
				}elseif ($data['level'] == "siswa") {
					$_SESSION['username'] = $data['username'];
					echo "
						<script>
							alert('Siswa berhasil Login');
						</script>
					";
				}
			}else{
				echo "
					<script>
						alert('Username atau Password tidak ada!');
					</script>
				";
			}
		}else{
			echo "
				<script>
					alert('Data tidak boleh kosong');
				</script>
			";
		}
	}

 ?>