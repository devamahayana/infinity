<?php 
 	require_once 'core/init.php';
 	if (isset($_POST['submit'])) {

 		$kode_siswa = $_POST['kode_siswa'];
 		$nis = $_POST['nis'];
 		$nama_siswa = $_POST['nama_siswa'];
 		$alamat_siswa = $_POST['alamat_siswa'];
 		$jk_siswa = $_POST['jk_siswa'];
 		$kelas_siswa = $_POST['kelas_siswa'];
 		$tempatlahir_siswa = $_POST['tempatlahir_siswa'];
 		$tgllahir_siswa = $_POST['tgllahir_siswa'];
 		$nama_ayah = $_POST['nama_ayah'];
 		$notelp_ortu = $_POST['notelp_ortu'];
 		$agama_siswa = $_POST['agama_siswa'];

 		
 		if (trim($nis) && trim($nama_siswa) && trim($alamat_siswa) && trim($jk_siswa) && trim($tempatlahir_siswa) && trim($tgllahir_siswa) && trim($kelas_siswa) &&  trim($nama_ayah) && trim($notelp_ortu) && trim($agama_siswa)) {
 			$query = " UPDATE tb_siswa SET 
 			nis = '$nis' , 
 			nama_siswa = '$nama_siswa' , 
 			alamat_siswa = '$alamat_siswa' , 
 			jk_siswa = '$jk_siswa' , 
 			kelas_siswa = '$kelas_siswa' , 
 			tempatlahir_siswa = '$tempatlahir_siswa' , 
 			tgllahir_siswa = '$tgllahir_siswa' , 
 			nama_ayah = '$nama_ayah' , 
 			notelp_ortu = '$notelp_ortu' , 
 			agama_siswa = '$agama_siswa' 
 			WHERE kode_siswa =".$kode_siswa;
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
		 				location.href = 'index.php';
		 			</script>
		 		";
	 		}
 			
 		}else{
 			echo "
 				<script>
 					alert('Data tidak boleh kosong !');
 				</script>
 			";
 		}



 	}

  ?>