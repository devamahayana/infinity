<?php 
	require_once 'core/init.php';
	require_once '../../view/header.php';
 ?>
 		<?php 
 			$kode_matpel = $_GET['kode_matpel'];

 			$query = "SELECT * FROM tb_matpel WHERE kode_matpel = ".$kode_matpel;
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
					<form action="matpel-editproses.php" method="post">
						<table>
							<tr>
								<td>
									<label class="label">Nama Mata Pelajaran</label><br>
									<input style="width: 50%;" class="input-text" type="text" name="nama_matpel" value="<?php echo $data['nama_matpel'];?>">
									<input style="width: 50%;" class="input-text" type="hidden" name="kode_matpel" value="<?php echo $data['kode_matpel'];?>">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Jumlah Jam</label><br>
									<input style="width: 50%;" class="input-text" type="text" name="jumlah_jam" value="<?php echo $data['jumlah_jam'];?>">
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

 

