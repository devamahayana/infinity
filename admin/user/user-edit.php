<?php 
	require_once 'core/init.php';
	require_once '../../view/header.php';
 ?>
 		<!-- <script type='text/javascript' src='../../javascript/urlmenu.js'></script> -->
 		<?php 
 			$kode_login = $_GET['kode_login'];

 			$query = "SELECT * FROM tb_login WHERE kode_login = ".$kode_login;
 			$hasil = mysqli_query($link , $query);
 			$data = mysqli_fetch_assoc($hasil);

 		 ?>
 		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>Edit User Admin</h2>
					<p id="tanggal"></p>
				</div>
				<div class="form">
					<form action="user-editproses.php" method="post">
						<table>
							<tr>
								<td>
									<label class="label">Username</label><br>
									<input style="width: 50%;" class="input-text" type="text" name="username" value="<?php echo $data['username'];?>">
									<input style="width: 50%;" class="input-text" type="hidden" name="kode_login" value="<?php echo $data['kode_login'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Password</label><br>
									<input style="width: 50%;" class="input-text" type="password" name="password" value="<?php echo $data['password'];?>">
								</td>
							</tr>
							<!-- <tr>
								<td>
									<label class="label">Level</label><br>
									<select class="input-select" name="level">
										<option value="<?php echo $data['level'];?>"><?php echo $data['level'];?></option>
										<option></option>
										<option value="Admin">Admin</option>
										<option value="Guru">Guru</option>
										<option value="Siswa">Siswa</option>
									</select>
								</td>
							</tr> -->
							<tr>
								<td colspan="2"> 
									<input style="border: none;" class="btn-edit tombol-edit" type="submit" name="submit" value="Edit">
									<a href="index.php">kembali </a>
									<button class="btn-reset">Reset</button>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>

 <?php 	require_once '../../view/footer.php';?>

 <script type="text/javascript" src="../../javascript/layout.js"></script>

 

