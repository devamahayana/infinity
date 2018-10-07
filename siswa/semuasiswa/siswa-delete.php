<?php 

	require_once 'core/init.php';
	$kode_login = $_GET['kode_login'];
	$kode_siswa  = $_GET['kode_siswa'];


		$queryuser = "DELETE FROM tb_login WHERE kode_login =".$kode_login;
		if (mysqli_query($link , $queryuser)) {
			echo "
		 		<script>
		 			alert('Data berhasil dihapus !');
		 			location.href = 'index.php';
		 		</script>
		 	";
		}else{
			echo "
		 		<script>
		 			alert('Data gagal dihapus !');
		 			location.href = 'index.php';
		 		</script>
		 	";
		}


 ?>