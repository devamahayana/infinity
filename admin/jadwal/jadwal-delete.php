<?php 
	
	require_once 'core/init.php';
	$kode_jadwal = $_GET['kode_jadwal'];
	
	$query = "DELETE FROM tb_jadwal WHERE kode_jadwal =".$kode_jadwal;
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