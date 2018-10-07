<?php 
 	require_once 'core/init.php';
 	if (isset($_POST['submit'])) {

 		$kode_login = $_POST['kode_login'];
 		$username = $_POST['username'] ;
 		$password = $_POST['password'] ;
 		$level = "Siswa";
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

 		
 		if (trim($password) && trim($username) && trim($nis) && trim($nama_siswa) && trim($alamat_siswa) && trim($jk_siswa) && trim($tempatlahir_siswa) && trim($tgllahir_siswa) && trim($kelas_siswa) &&  trim($nama_ayah) && trim($notelp_ortu) && trim($agama_siswa)) {
 			$query = "SELECT * FROM tb_login WHERE username = '$username'";
 			$hasil = mysqli_query($link , $query);

 			if (mysqli_num_rows($hasil) == 0) { /*validasi data kembar*/
 				$query_tambahuser = "INSERT INTO tb_login VALUES($kode_login , '$username','$password','$level')";
 				$query_tambahsiswa = "INSERT INTO tb_siswa VALUES(null , '$kode_login','$nis','$nama_siswa' , '$agama_siswa','$alamat_siswa','$jk_siswa' , '$kelas_siswa','$tempatlahir_siswa','$tgllahir_siswa','$nama_ayah','$notelp_ortu','')";

 				if (mysqli_query($link , $query_tambahuser) && mysqli_query($link , $query_tambahsiswa)) {
		 			echo "
			 			<script>
			 				alert('Data siswa ditambahkan !');
			 				location.href = 'index.php ';
			 			</script>
			 		";
		 		}else{
		 			echo "
			 			<script>
			 				alert('Data siswa gagal ditambahkan !');
			 				location.href = 'index.php';
			 			</script>
			 		";	
 				}
 			}else{
 				echo "
	 				<script>
	 					alert('Username ".$username." sudah ada !');
	 					location.href = 'siswa-tambah.php';
	 				</script>
	 			";
 			}
 			
 		}else{
 			echo "
 				<script>
 					alert('Data tidak boleh kosong !');
 					location.href = 'siswa-tambah.php';
 				</script>
 			";
 		}



 	}

  ?>