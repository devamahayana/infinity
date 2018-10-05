<?php 
	require_once '../../view/header.php';
 ?>

 		<script type='text/javascript' src='../../javascript/urlmenu.js'></script>
 		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>Tambah akun user</h2>
					<p id="tanggal"></p>
				</div>
				<div class="form">
					<form action="user-tambahproses.php" method="post">
						<table>
							<tr>
								<td>
									<label class="label">Username</label><br>
									<input style="width: 50%;" class="input-text" type="text" name="username">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Password</label><br>
									<input style="width: 50%;" class="input-text" type="password" name="password">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Level</label><br>
									<select class="input-select" name="level">
										<option></option>
										<option value="Admin">Admin</option>
										<option value="Guru">Guru</option>
										<option value="Siswa">Siswa</option>
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2"> 
									<input style="border: none;" class="btn-edit tombol-edit" type="submit" name="submit" value="Tambah">
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



