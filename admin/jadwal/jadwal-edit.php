<?php 
	require_once 'core/init.php';
	require_once '../../view/header.php';
 ?>
 		<!-- <script type='text/javascript' src='../../javascript/urlmenu.js'></script> -->
 		<?php 
 			$kode_jadwal = $_GET['kode_jadwal'];

 			$query  = "SELECT tb_jadwal.* , tb_matpel.nama_matpel  , tb_guru.nama_guru , tb_kelas.* FROM tb_jadwal 
				   JOIN tb_matpel ON tb_jadwal.`kode_matpel` = tb_matpel.`kode_matpel`
				   JOIN tb_guru ON tb_jadwal.`kode_guru` = tb_guru.`kode_guru` 
				   JOIN tb_kelas ON tb_jadwal.`kode_kelas` = tb_kelas.`kode_kelas` 
				   WHERE kode_jadwal = ".$kode_jadwal;
 			$hasil = mysqli_query($link , $query);
 			$data = mysqli_fetch_assoc($hasil);

 		 ?>
 		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>Tambah Jadwal</h2>
					<p id="tanggal"></p>
				</div>
				<div class="form">
					<form action="jadwal-editproses.php" method="post">
						<table>
							<tr>
								<td>
									<input type="hidden" name="kode_jadwal" value="<?php echo $data['kode_jadwal']; ?>">
									<label class="label">Mata Pelajaran</label><br>
									<select style="width: 90%;" class="input-select" name="kode_matpel">
										<option value="<?php echo $data['kode_matpel']; ?>"><?php echo $data['nama_matpel']; ?></option>
										<option>Pilih Mata Pelajaran</option>
										<?php 
											$query = "SELECT * FROM tb_matpel";
											$hasil = mysqli_query($link , $query);
											while ($d = mysqli_fetch_assoc($hasil)) {
												echo "<option value='".$d['kode_matpel']."'>".$d['nama_matpel']."</option>";
											}

										 ?>
									</select>
								</td>
								<td>
									<label class="label">Guru</label><br>
									<select style="width: 90%;" class="input-select" name="kode_guru">
										<option value="<?php echo $data['kode_guru']; ?>"><?php echo $data['nama_guru']; ?></option>
										<option>Pilih Guru</option>
										<?php 
											$query = "SELECT * FROM tb_guru";
											$hasil = mysqli_query($link , $query);
											while ($d = mysqli_fetch_assoc($hasil)) {
												echo "<option value='".$d['kode_guru']."'>".$d['nama_guru']."</option>";
											}

										 ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Hari</label><br>
									<select class="input-select" name="hari">
										<option value="<?php echo $data['hari']; ?>"><?php echo $data['hari']; ?></option>
										<option>Pilih Hari</option>
										<option value="Senin">Senin</option>
										<option value="Selasa">Selasa</option>
										<option value="Rabu">Rabu</option>
										<option value="Kamis">Kamis</option>
										<option value="Jumat">Jumat</option>
										<option value="Sabtu">Sabtu</option>
									</select>
									<input style="width: 15%; margin-left: 20px;" class="input-text" type="text" name="jam_mulai" placeholder="Jam Mulai" value="<?php echo $data['jam_mulai']; ?>">
									<input style="width: 18%; margin-left: 20px;" class="input-text" type="text" name="jam_selesai" placeholder="Jam Selesai" value="<?php echo $data['jam_selesai']; ?>">
								</td>
								<td>
									<label class="label">Kelas</label><br>
									<select style="width: 90%;" class="input-select" name="kode_kelas">
										<option value="<?php echo $data['kode_kelas']; ?>"><?php echo $data['tingkat_kelas']." ".$data['nama_kelas']; ?></option>
										<option>Pilih Kelas</option>
										<?php 
											$query = "SELECT * FROM tb_kelas";
											$hasil = mysqli_query($link , $query);
											while ($d = mysqli_fetch_assoc($hasil)) {
												echo "<option value='".$d['kode_kelas']."'>".$d['tingkat_kelas']." ".$d['nama_kelas']."</option>";
											}

										 ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<?php 
										$datenow = date('Y');
										$datenext = date('Y') + 1;

										$date = $datenow."/".$datenext;
									 ?>
									<label class="label">Tahun Ajaran</label><br>
									<input style="width: 20%;" class="input-text" type="text" name="tahun_ajaran" value="<?php echo $data['tahun_ajaran'];?> " readonly>
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



