<?php 
	require_once 'core/init.php';
 	
 	if (isset($_POST['submit'])) {

 		$nama_matpel = $_POST['nama_matpel'] ;
 		$jumlah_jam = $_POST['jumlah_jam'] ;

 		
 		if (trim($nama_matpel) && trim($jumlah_jam)) {
 			$query = "SELECT * FROM tb_matpel WHERE nama_matpel = '$nama_matpel'";
 			$hasil = mysqli_query($link , $query);

 			if (mysqli_num_rows($hasil) == 0) { /*validasi data kembar*/
 				$query = "INSERT INTO tb_matpel VALUES(null,'$nama_matpel', $jumlah_jam)";
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
	 					alert('Username ".$nama_matpel." sudah ada !');
	 					location.href = 'matpel-tambah.php';
	 				</script>
	 			";
 			}
 		}else{
 			echo "
 				<script>
 					alert('Data tidak boleh kosong !');
 					location.href = 'matpel-tambah.php';
 				</script>
 			";
 		}



 	}

  ?>