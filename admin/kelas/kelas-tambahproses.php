<?php 
	require_once 'core/init.php';
 	
 	if (isset($_POST['submit'])) {

 		$nama_kelas = $_POST['nama_kelas'] ;
 		$tingkat_kelas = $_POST['tingkat_kelas'] ;
 		$ruangan_kelas = $_POST['ruangan_kelas'] ;

 		
 		if (trim($nama_kelas) && trim($tingkat_kelas) && trim($ruangan_kelas)) {
 			$query = "SELECT * FROM tb_kelas WHERE nama_kelas = '$nama_kelas'";
 			$hasil = mysqli_query($link , $query);

 			if (mysqli_num_rows($hasil) == 0) { /*validasi data kembar*/
 				$query = "INSERT INTO tb_kelas VALUES(null,'$nama_kelas', '$tingkat_kelas' , '$ruangan_kelas')";
 				if ($hasil = mysqli_query($link , $query)) {
 					echo "
		 				<script>
		 					alert('Data berhasil ditambahkan');
		 					location.href = 'index.php';
		 				</script>
		 			";
 				}
 			}else{
 				echo "
	 				<script>
	 					alert('Kelas ".$nama_kelas." sudah ada !');
	 					location.href = 'kelas-tambah.php';
	 				</script>
	 			";
 			}
 		}else{
 			echo "
 				<script>
 					alert('Data tidak boleh kosong !');
 					location.href = 'kelas-tambah.php';
 				</script>
 			";
 		}



 	}

  ?>