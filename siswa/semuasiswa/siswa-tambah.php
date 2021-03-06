<?php 
	require_once 'core/init.php';
	require_once '../../view/header.php';
 ?>
 		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>Tambah Akun Siswa</h2>
					<p id="tanggal"></p>
				</div>
				<div class="form">
					<form action="siswa-tambahproses.php" method="post">
						<table>
							<tr>
								<td>
									<label class="label">Username</label><br>
									<input class="input-text" type="text" name="username" >
									<input class="input-text" type="hidden" name="kode_login" value="<?php echo time();?>">
								</td>
								<td>
									<label class="label">Password</label><br>
									<input class="input-text" type="password" name="password" >
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">NIS</label><br>
									<input class="input-text" type="text" name="nis" >
									<input class="input-text" type="hidden" name="kode_siswa" >
								</td>
								<td>
									<label class="label">Nama Siswa</label><br>
									<input class="input-text" type="text" name="nama_siswa" >
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Alamat Siswa</label><br>
									<input class="input-text" type="text" name="alamat_siswa" >
								</td>
								<td>
									<label class="label">Jenis Kelamin</label><br>
									<select name="jk_siswa" style="width: 90%;" class="input-select">
										
										<option></option>
										<option value="Lak-laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Kelas Siswa</label><br>
									<input class="input-text" type="text" name="kelas_siswa" >
								</td>
								<td>
									<label class="label">Nama Ayah</label><br>
									<input class="input-text" type="text" name="nama_ayah" >
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Tempat Lahir</label><br>
									<input class="input-text" type="text" name="tempatlahir_siswa">
								</td>
								<td>
									<label class="label">Tanggal Lahir</label><br>
									<input class="input-text" type="text" name="tgllahir_siswa">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">No Telp Ortu</label><br>
									<input class="input-text" type="text" name="notelp_ortu" >
								</td>
								<td>
									<label class="label">Agama</label><br>
									<input class="input-text" type="text" name="agama_siswa" >
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

 

