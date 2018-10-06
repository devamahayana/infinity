<?php 
	require_once 'core/init.php';
	require_once '../../view/header.php';
 ?>
 		<!-- <script type='text/javascript' src='../../javascript/urlmenu.js'></script> -->
 		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>Tambah Ruangan Kelas</h2>
					<p id="tanggal"></p>
				</div>
				<div class="form">
					<form action="kelas-tambahproses.php" method="post">
						<table>
							<tr>
								<td>
									<label class="label">Nama Kelas</label><br>
									<input style="width: 50%;" class="input-text" type="text" name="nama_kelas">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Tingkat</label><br>
									<select class="input-select" name="tingkat_kelas">
										<option>Pilih tingkatan</option>
										<option value="X">X</option>
										<option value="XI">XI</option>
										<option value="XII">XII</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Ruangan</label><br>
									<input style="width: 50%;" class="input-text" type="text" name="ruangan_kelas">
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



