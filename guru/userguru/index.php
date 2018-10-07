<?php 
	require_once 'core/init.php';
	require_once '../../view/header.php';
 ?>
 		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>User Guru</h2>
					<p id="tanggal"></p>
				</div>
				<div class="search">
					<input type="text" name="seacrh" placeholder="Search....">
				</div>
				<div class="form">
					<table cellpadding="10px"> 
						<tr class="judul-form">
							<th width="50px">No</th>
							<th>Username</th>
							<th>NIK</th>
							<th>Nama Guru</th>
							<th>Alamat</th>
							<th>Jenis Kelamin</th>
							<th>Telp</th>
							<th width="150px"> Option</th>
						</tr>
						<?php viewdata(); ?>
						<tr class="bawah-form" style="background-color: #67b26f; ">
							<td colspan="11">
								<a class="btn-tambah" href="guru-tambah.php">Tambah</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

 <?php 	require_once '../../view/footer.php';?>

 <script type="text/javascript" src="../../javascript/layout.js"></script>

