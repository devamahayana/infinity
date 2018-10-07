<?php 
 	require_once 'core/init.php';
 	if (isset($_POST['submit'])) {

 		$kode_login = $_POST['kode_login'];
 		$username = $_POST['username'] ;
 		$password = $_POST['password'] ;

 		
 		if (trim($username) && trim($password) ) {
 			$query = " UPDATE tb_login SET username = '$username' , password = '$password' WHERE kode_login =".$kode_login;
	 		if ($hasil = mysqli_query($link , $query) ){
	 			echo "
	 				<script>
		 				alert('Data berhasil diedit !');
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