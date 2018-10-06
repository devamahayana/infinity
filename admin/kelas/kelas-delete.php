<?php 
	
	require_once 'core/init.php';
	$kode_kelas = $_GET['kode_kelas'];
	
	$query = "DELETE FROM tb_kelas WHERE kode_kelas =".$kode_kelas;
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


 ?>