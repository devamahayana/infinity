<?php 
	require_once 'core/init.php';
 	
 	if (isset($_POST['submit'])) {

 		$username = $_POST['username'] ;
 		$password = $_POST['password'] ;
 		/*$level = $_POST['level'] ;*/
 		$level = "Admin";

 		
 		if (trim($username) && trim($password) && trim($level)) {
 			$query = "SELECT * FROM tb_login WHERE username = '$username' AND level = '$level'";
 			$hasil = mysqli_query($link , $query);

 			if (mysqli_num_rows($hasil) == 0) { /*validasi data kembar*/
 				$query_tambahuser = "INSERT INTO tb_login VALUES(null , '$username','$password','$level')";
 				if ($level == "Admin") {
 					if ($hasil_user = mysqli_query($link , $query_tambahuser)) {
 						echo "
			 				<script>
			 					alert('Data Admin disimpan !');
			 					location.href = 'index.php ';
			 				</script>
			 			";
 					}else{
 						echo "
			 				<script>
			 					alert('Data Admin gagal disimpan !');
			 					location.href = 'index.php ';
			 				</script>
			 			";
 					}
 				}/*elseif ($level == "Guru") {
 					if ($hasil_user = mysqli_query($link , $query_tambahuser) && guru($username , $level)){ 
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
 					
 				}elseif ($level == "Siswa") {
 					if ($hasil_user = mysqli_query($link , $query_tambahuser) && siswa($username , $level)){ 
		 				echo "
			 				<script>
			 					alert('Data Siswa ditambahkan !');
			 					location.href = 'index.php ';
			 				</script>
			 			";
		 			}else{
		 				echo "
			 				<script>
			 					alert('Data Siswa gagal ditambahkan !');
			 					location.href = 'index.php';
			 				</script>
			 			";
		 			}
 					
 				}*/
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