<?php 

	require_once 'core/init.php';
	$kode_login = $_GET['kode_login'];
	$username   = $_SESSION['username'];

	$query = "SELECT * FROM tb_login WHERE username = '$username' AND kode_login = $kode_login";
	$hasil = mysqli_query($link , $query);

	if (mysqli_num_rows($hasil) == 0) {
		$query = "DELETE FROM tb_login WHERE kode_login =".$kode_login;
		$hasil = mysqli_query($link , $query);

		if ($hasil) {
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
	}else{
		echo "
		 		<script>
		 			alert('Anda tidak bisa menghapus diri anda sendiri !');
		 			location.href = 'index.php';
		 		</script>
		 	";
	}


 ?>