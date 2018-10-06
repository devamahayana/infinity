<?php 
	require_once 'core/init.php';
	require_once '../../view/header.php';
 ?>
 		<?php 
 			$kode_siswa = $_GET['kode_siswa'];

 			$query = "SELECT * FROM tb_siswa WHERE kode_siswa = ".$kode_siswa;
 			$hasil = mysqli_query($link , $query);
 			$data = mysqli_fetch_assoc($hasil);

 		 ?>
 		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>Edit akun siswa</h2>
					<p id="tanggal"></p>
				</div>
				<div class="form">
					<form action="siswa-editproses.php" method="post">
						<table>
							<tr>
								<td>
									<label class="label">NIS</label><br>
									<input class="input-text" type="text" name="nis" value="<?php echo $data['nis'];?>">
									<input class="input-text" type="hidden" name="kode_siswa" value="<?php echo $data['kode_siswa'];?>">
								</td>
								<td>
									<label class="label">Nama Siswa</label><br>
									<input class="input-text" type="text" name="nama_siswa" value="<?php echo $data['nama_siswa'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Alamat Siswa</label><br>
									<input class="input-text" type="text" name="alamat_siswa" value="<?php echo $data['alamat_siswa'];?>">
								</td>
								<td>
									<label class="label">Jenis Kelamin</label><br>
									<select name="jk_siswa" style="width: 90%;" class="input-select">
										<option value="<?php echo $data['jk_siswa']; ?>"><?php echo $data['jk_siswa'];?></option>
										<option></option>
										<option value="Lak-laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Kelas Siswa</label><br>
									<input class="input-text" type="text" name="kelas_siswa" value="<?php echo $data['kelas_siswa'];?>">
								</td>
								<td>
									<label class="label">Nama Ayah</label><br>
									<input class="input-text" type="text" name="nama_ayah" value="<?php echo $data['nama_ayah'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Tempat Lahir</label><br>
									<input class="input-text" type="text" name="tempatlahir_siswa" value="<?php echo $data['tempatlahir_siswa'];?>">
								</td>
								<td>
									<label class="label">Tanggal Lahir</label><br>
									<input class="input-text" type="text" name="tgllahir_siswa" value="<?php echo $data['tgllahir_siswa'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">No Telp Ortu</label><br>
									<input class="input-text" type="text" name="notelp_ortu" value="<?php echo $data['notelp_ortu'];?>">
								</td>
								<td>
									<label class="label">Agama</label><br>
									<input class="input-text" type="text" name="agama_siswa" value="<?php echo $data['agama_siswa'];?>">
								</td>
							</tr>
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

 

