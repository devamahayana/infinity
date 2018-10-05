<?php 
 	require_once 'core/init.php';
 	if (isset($_POST['submit'])) {

 		$kode_guru = $_POST['kode_guru'];
 		$nik = $_POST['nik'];
 		$nama_guru = $_POST['nama_guru'];
 		$alamat_guru = $_POST['alamat_guru'];
 		$jk_guru = $_POST['jk_guru'];
 		$tempatlahir_guru = $_POST['tempatlahir_guru'];
 		$tgllahir_guru = $_POST['tgllahir_guru'];
 		$agama_guru = $_POST['agama_guru'];
 		$notelp_guru = $_POST['notelp_guru'];
 		$email_guru = $_POST['email_guru'];

 		
 		if (trim($nik) && trim($nama_guru) && trim($alamat_guru) && trim($jk_guru) && trim($tempatlahir_guru) && trim($tgllahir_guru) && trim($agama_guru) && trim($notelp_guru) && trim($email_guru)) {
 			$query = " UPDATE tb_guru SET nik = '$nik' , nama_guru = '$nama_guru' , alamat_guru = '$alamat_guru' , jk_guru = '$jk_guru' , tempatlahir_guru = '$tempatlahir_guru' , tgllahir_guru = '$tgllahir_guru' , agama_guru = '$agama_guru' , notelp_guru = '$notelp_guru' , email_guru = '$email_guru' WHERE kode_guru =".$kode_guru;
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