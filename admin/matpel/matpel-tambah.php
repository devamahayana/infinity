<?php 
	require_once '../../view/header.php';
 ?>
 		<script type='text/javascript' src='../../javascript/urlmenu.js'></script>
 		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>Tambah mata pelajaran</h2>
					<p id="tanggal"></p>
				</div>
				<div class="form">
					<form action="matpel-tambahproses.php" method="post">
						<table>
							<tr>
								<td>
									<label class="label">Nama Mata Pelajaran</label><br>
									<input style="width: 50%;" class="input-text" type="text" name="nama_matpel">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Jumlah jam</label><br>
									<input style="width: 10%;" class="input-text" type="text" name="jumlah_jam"><label>jam</label>
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



