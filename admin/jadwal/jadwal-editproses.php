<?php 
 	require_once 'core/init.php';
 	if (isset($_POST['submit'])) {

 		$kode_jadwal = $_POST['kode_jadwal'];
 		$kode_matpel = $_POST['kode_matpel'] ;
 		$kode_guru = $_POST['kode_guru'] ;
 		$hari = $_POST['hari'] ;
 		$jam_mulai = $_POST['jam_mulai'] ;
 		$jam_selesai = $_POST['jam_selesai'] ;
 		$kode_kelas = $_POST['kode_kelas'] ;
 		$tahun_ajaran = $_POST['tahun_ajaran'] ;


 		
 		if (trim($kode_matpel) && trim($kode_guru) && trim($hari) && trim($jam_mulai) && trim($jam_selesai) && trim($kode_kelas) && trim($tahun_ajaran)) {
 			$query = " UPDATE tb_jadwal SET 
 			kode_matpel = $kode_matpel , 
 			kode_guru = '$kode_guru' , 
 			hari = '$hari' , 
 			jam_mulai = '$jam_mulai',
 			jam_selesai = '$jam_selesai',
 			kode_kelas = '$kode_kelas',
 			tahun_ajaran = '$tahun_ajaran'
 			WHERE kode_jadwal =".$kode_jadwal;
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
		 				location.href = 'jadwal-edit.php?kode_jadwal=".$kode_jadwal."';
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