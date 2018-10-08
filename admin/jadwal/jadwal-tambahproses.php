<?php 
	require_once 'core/init.php';
 	
 	if (isset($_POST['submit'])) {

 		$kode_matpel = $_POST['kode_matpel'] ;
 		$kode_guru = $_POST['kode_guru'] ;
 		$hari = $_POST['hari'] ;
 		$jam_mulai = $_POST['jam_mulai'] ;
 		$jam_selesai = $_POST['jam_selesai'] ;
 		$kode_kelas = $_POST['kode_kelas'] ;
 		$tahun_ajaran = $_POST['tahun_ajaran'] ;

 		
 		if (trim($kode_matpel) && trim($kode_guru) && trim($hari) && trim($jam_mulai) && trim($jam_selesai) && trim($kode_kelas) && trim($tahun_ajaran)) {
 			/*$query = "SELECT * FROM tb_kelas WHERE nama_kelas = '$nama_kelas'";
 			$hasil = mysqli_query($link , $query);

 			if (mysqli_num_rows($hasil) == 0) { validasi data kembar*/
 				$query = "INSERT INTO tb_jadwal VALUES(null,$kode_matpel, $kode_guru , '$hari' , '$jam_mulai' , '$jam_selesai' , $kode_kelas , '$tahun_ajaran')";
 				if ($hasil = mysqli_query($link , $query)) {
 					echo "
		 				<script>
		 					alert('Data berhasil ditambahkan');
		 					location.href = 'index.php';
		 				</script>
		 			";
 				}else{
 					echo "
		 				<script>
		 					alert('Gagal tambah data !');
		 					location.href = 'jadwal-tambah.php';
		 				</script>
		 			";
 				}
 			/*}else{
 				echo "
	 				<script>
	 					alert('Kelas ".$nama_kelas." sudah ada !');
	 					location.href = 'kelas-tambah.php';
	 				</script>
	 			";
 			}*/
 		}else{
 			echo "
 				<script>
 					alert('Data tidak boleh kosong !');
 					location.href = 'jadwal-tambah.php';
 				</script>
 			";
 		}



 	}

  ?>