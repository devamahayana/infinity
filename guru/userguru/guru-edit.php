<?php 
	require_once 'core/init.php';
	require_once '../../view/header.php';
 ?>
 		<?php 
 			$kode_guru = $_GET['kode_guru'];

 			$query = "SELECT * FROM tb_guru WHERE kode_guru = ".$kode_guru;
 			$hasil = mysqli_query($link , $query);
 			$data = mysqli_fetch_assoc($hasil);

 		 ?>
 		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>Edit akun guru</h2>
					<p id="tanggal"></p>
				</div>
				<div class="form">
					<form action="guru-editproses.php" method="post">
						<table>
							<tr>
								<td>
									<label class="label">NIK</label><br>
									<input class="input-text" type="text" name="nik" value="<?php echo $data['nik'];?>">
									<input class="input-text" type="hidden" name="kode_guru" value="<?php echo $data['kode_guru'];?>">
								</td>
								<td>
									<label class="label">Nama Guru</label><br>
									<input class="input-text" type="text" name="nama_guru" value="<?php echo $data['nama_guru'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Alamat</label><br>
									<input class="input-text" type="text" name="alamat_guru" value="<?php echo $data['alamat_guru'];?>">
								</td>
								<td>
									<label class="label">Jenis Kelamin</label><br>
									<select name="jk_guru" style="width: 90%;" class="input-select">
										<option value="<?php echo $data['jk_guru']; ?>"><?php echo $data['jk_guru']; ?></option>
										<option></option>
										<option value="Lak-laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Tempat Lahir</label><br>
									<input class="input-text" type="text" name="tempatlahir_guru" value="<?php echo $data['tempatlahir_guru'];?>">
								</td>
								<td>
									<label class="label">Tanggal Lahir</label><br>
									<input class="input-text" type="text" name="tgllahir_guru" value="<?php echo $data['tgllahir_guru'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Agama</label><br>
									<input class="input-text" type="text" name="agama_guru" value="<?php echo $data['agama_guru'];?>">
								</td>
								<td>
									<label class="label">No Telp</label><br>
									<input class="input-text" type="text" name="notelp_guru" value="<?php echo $data['notelp_guru'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Email</label><br>
									<input class="input-text" type="text" name="email_guru" value="<?php echo $data['email_guru'];?>">
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

 

