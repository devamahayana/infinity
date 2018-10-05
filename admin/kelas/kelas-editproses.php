<?php 
 	require_once 'core/init.php';
 	if (isset($_POST['submit'])) {

 		$kode_kelas = $_POST['kode_kelas'];
 		$nama_kelas = $_POST['nama_kelas'] ;
 		$tingkat_kelas = $_POST['tingkat_kelas'] ;
 		$ruangan_kelas = $_POST['ruangan_kelas'] ;

 		
 		if (trim($nama_kelas) && trim($tingkat_kelas) && trim($ruangan_kelas)) {
 			$query = " UPDATE tb_kelas SET nama_kelas = '$nama_kelas' , tingkat_kelas = '$tingkat_kelas' , ruangan_kelas = '$ruangan_kelas' WHERE kode_kelas =".$kode_kelas;
	 		if ($hasil = mysqli_query($link , $query) ){
	 			echo "
	 				<script>
		 				alert('Data berhasil ditambahkan !');
		 				location.href = 'index.php';
		 			</script>
				";
	 		}else{
	 			echo "
	 				<script>
	 					alert('Data gagal ditambahkan !');
		 				location.href = 'kelas-edit.php?kode_kelas=".$kode_kelas."';
		 			</script>
		 		";
	 		}
 			
 		}else{
 			echo "
 				<script>
 					alert('Data tidak boleh kosong !');
 					location.href = 'kelas-edit.php?kode_kelas=".$kode_kelas."';
 				</script>
 			";
 		}



 	}

  ?>