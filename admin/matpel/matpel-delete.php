<?php 

	require_once 'core/init.php';
	$kode_matpel = $_GET['kode_matpel'];
	
	$query = "DELETE FROM tb_matpel WHERE kode_matpel =".$kode_matpel;
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