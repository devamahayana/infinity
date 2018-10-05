<?php 
 	require_once 'core/init.php';
 	if (isset($_POST['submit'])) {

 		$kode_login = $_POST['kode_login'];
 		$username = $_POST['username'] ;
 		$password = $_POST['password'] ;
 		$level = $_POST['level'] ;

 		
 		if (trim($username) && trim($password) && trim($level)) {
 			$query = " UPDATE tb_login SET username = '$username' , password = '$password' , level = '$level' WHERE kode_login =".$kode_login;
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