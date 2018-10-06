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
				
				<div id="order" class="content-login">
					<h2>LOGIN</h2>
					<img src="images/1.png" width="40px" class="icon1">
					<img src="images/3.png" width="40px" class="icon2">
					<img src="images/4.png" width="70px" class="icon3">
					<img src="images/5.png" width="50px" class="icon4">
					<img src="images/6.png" width="30px" class="icon5">
					<img src="images/7.png" width="30px" class="icon6">
					<div class="login">
						<form action="index.php" method="post">
							<br>
							<label>Username</label>	
							<!-- <i class="fas fa-user"></i> -->

							<input class="input-text" type="text" name="username" placeholder="">
							
								
							
							<label>Password</label>		
							<!-- <i class="fas fa-lock"></i> -->
							<input class="input-text" type="password" name="password" placeholder="" class="checkbox" 
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
				if ($data['level'] == "Admin") {
					$_SESSION['username'] = $data['username'];
					echo "
						<script>
							location.href = 'success.php';
						</script>
					";
				}elseif ($data['level'] == "Guru") {
					$_SESSION['username'] = $data['username'];
					echo "
						<script>
							location.href = 'success.php';
						</script>
					";
				}elseif ($data['level'] == "Siswa") {
					$_SESSION['username'] = $data['username'];
					echo "
						<script>
							location.href = 'success.php';
						</script>
					";
				}
			}else{
				echo "
					<script>
						location.href = 'error.php';
					</script>
				";
			}
		}else{
			echo "
				<script>
					location.href = 'error1.php';
				</script>
			";
		}
	}

 ?>