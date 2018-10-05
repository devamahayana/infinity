<?php 
	require_once 'view/header.php';
 ?>
		<div class="container-data">
			<div class="wrap-data">
				<div class="judul">
					<h2>Edit data - Form 1</h2>
					<p id="tanggal"></p>
				</div>
				<div class="form">
					<form>
						<table>
							<tr>
								<td>
									<label class="label">Username</label><br>
									<input class="input-text" type="text" name="input">
								</td>
								<td>
									<label class="label">Username</label><br>
									<input class="input-text" type="text" name="input">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Username</label><br>
									<input class="input-text" type="text" name="input">
								</td>
								<td>
									<label class="label">Username</label><br>
									<input class="input-text" type="text" name="input">
								</td>
							</tr>
							<tr>
								<td>
									<label class="label">Username</label><br>
									<input class="input-text" type="text" name="input">
								</td>
								<td>
									<label class="label">Username</label><br>
									<input class="input-text" type="text" name="input">
								</td>
							</tr>
							<tr>
								<td colspan="2"> 
									<a class="btn-edit tombol-edit" href="#">Edit data</a>
									<a href="#">kembali </a>
									<button class="btn-reset">Reset</button>

								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	<?php require_once 'view/footer.php';?>
	<script type="text/javascript">
		var btn = document.getElementById('btn');
		var sidemenu = document.getElementsByClassName('container-sidemenu')[0];
		var logo = document.getElementsByTagName('i')[0];
		var data = document.getElementsByClassName('wrap-data')[0];
		var tanggal = document.getElementById('tanggal');

		function openmenu() {
			btn.setAttribute('onclick','closemenu()');
			sidemenu.style.marginLeft = '0px';
			logo.className = "fas fa-times";
			data.style.width = '70%';

		}
		function closemenu() {
			btn.setAttribute('onclick','openmenu()');
			sidemenu.style.marginLeft = '-200px';
			logo.className = "fas fa-bars";
			data.style.width = '';
		}

		var bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
		var date = new Date();
		var yy = date.getYear();
		var year = (yy < 1000) ? yy + 1900 : yy;

		document.getElementById('tanggal').innerHTML = date.getDate() + ' ' + bulan[date.getMonth()]+' '+year ;
		

	</script>
</body>
</html>