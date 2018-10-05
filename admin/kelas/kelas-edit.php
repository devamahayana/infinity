<?php 
	require_once '../../view/header.php';
 ?>
 		<script type='text/javascript' src='../../javascript/urlmenu.js'></script>
 		<?php 
 			$kode_kelas = $_GET['kode_kelas'];

 			$query = "SELECT * FROM tb_kelas WHERE kode_kelas = ".$kode_kelas;
 			$hasil = mysqli_query($link , $query);
 			$data = mysqli_fetch_assoc($hasil);

 		 ?>
 		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>Edit Mata Pelajaran</h2>
					<p id="tanggal"></p>
				</div>
				<div class="form">
					<form action="kelas-editproses.php" method="post">
						<table>
							<tr>
								<td>
									<label class="label">Nama Kelas</label><br>
									<input style="width: 50%;" class="input-text" type="text" name="nama_kelas" value="<?php echo $data['nama_kelas'];?>">
									<input style="width: 50%;" class="input-text" type="hidden" name="kode_kelas" value="<?php echo $data['kode_kelas'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Tingkat</label><br>
									<select class="input-select" name="tingkat_kelas">
										<option value="<?php echo $data['tingkat_kelas']; ?>"><?php echo $data['tingkat_kelas']; ?></option>
										<option></option>
										<option value="X">X</option>
										<option value="XI">XI</option>
										<option value="XII">XII</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Ruangan</label><br>
									<input style="width: 50%;" class="input-text" type="text" name="ruangan_kelas" value="<?php echo $data['ruangan_kelas'];?>">
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

 

