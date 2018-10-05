<?php 
 	require_once 'core/init.php';
 	if (isset($_POST['submit'])) {

 		$kode_matpel = $_POST['kode_matpel'];
 		$nama_matpel = $_POST['nama_matpel'] ;
 		$jumlah_jam = $_POST['jumlah_jam'] ;

 		
 		if (trim($nama_matpel) && trim($jumlah_jam)) {
 			$query = " UPDATE tb_matpel SET nama_matpel = '$nama_matpel' , jumlah_jam = '$jumlah_jam' WHERE kode_matpel =".$kode_matpel;
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
		 				location.href = 'matpel-edit.php?kode_matpel=".$kode_matpel."';
		 			</script>
		 		";
	 		}
 			
 		}else{
 			echo "
 				<script>
 					alert('Data tidak boleh kosong !');
 					location.href = 'matpel-edit.php?kode_matpel=".$kode_matpel."';
 				</script>
 			";
 		}



 	}

  ?>