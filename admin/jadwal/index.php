<?php 
	require_once 'core/init.php';
	require_once '../../view/header.php';
 ?>

 		<!-- <script type='text/javascript' src='../../javascript/urlmenu.js'></script> -->
 		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>Daftar Jadwal Pelajaran</h2>
					<p id="tanggal"></p>
				</div>
				<div class="search">
					<input type="text" name="seacrh" placeholder="Search....">
				</div>
				<div class="form">
					<table cellpadding="10px"> 
						<tr class="judul-form">
							<th width="50px">No</th>
							<th>Mata Pelajaran</th>
							<th>Guru</th>
							<th>hari</th>
							<th>Mulai</th>
							<th>Selesai</th>
							<th>Kelas</th>
							<th>Tahun Ajaran</th>
							<th width="150px">Option</th>
						</tr>
						<?php viewdata(); ?>
						<tr class="bawah-form" style="background-color: #67b26f; ">
							<td colspan="9"><a class="btn-tambah" href="jadwal-tambah.php">Tambah</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>

 <?php 	require_once '../../view/footer.php';?>

 <script type="text/javascript" src="../../javascript/layout.js"></script>

