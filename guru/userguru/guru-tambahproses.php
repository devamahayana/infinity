<?php 
	require_once 'core/init.php';

	if (isset($_POST['submit'])) {

 		$username = $_POST['username'] ;
 		$password = $_POST['password'] ;
 		$level = "Guru";
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
 		$kode_login = $_POST['kode_login'];

 		
 		if (trim($username) && trim($password) && trim($level)) {
 			$query = "SELECT * FROM tb_login WHERE username = '$username'";
 			$hasil = mysqli_query($link , $query);

 			if (mysqli_num_rows($hasil) == 0) { /*validasi data kembar*/
 				$query_tambahuser = "INSERT INTO tb_login VALUES($kode_login , '$username','$password','$level')";
 				$query_tambahguru = "INSERT INTO tb_guru VALUES(null , '$kode_login','$nik','$nama_guru' , '$alamat_guru','$jk_guru','$tempatlahir_guru' , '$tgllahir_guru','$agama_guru','$notelp_guru','$email_guru','')";

 				if (mysqli_query($link , $query_tambahuser) && mysqli_query($link , $query_tambahguru)) {
		 			echo "
			 			<script>
			 				alert('Data Guru ditambahkan !');
			 				location.href = 'index.php ';
			 			</script>
			 		";
		 		}else{
		 			echo "
			 			<script>
			 				alert('Data Guru gagal ditambahkan !');
			 				location.href = 'index.php';
			 			</script>
			 		";	
 				}
 			}else{
 				echo "
	 				<script>
	 					alert('Username ".$username." sudah ada !');
	 					location.href = 'user-tambah.php';
	 				</script>
	 			";
 			}
 		}else{
 			echo "
 				<script>
 					alert('Data tidak boleh kosong !');
 					location.href = 'user-tambah.php';
 				</script>
 			";
 		}
 	}

 ?>