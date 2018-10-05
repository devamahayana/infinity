<?php 
	require_once 'core/init.php';
 
	function viewdata(){
		GLOBAL $link;

		$query  = "SELECT * FROM tb_login ORDER BY kode_login";
		$hasil = mysqli_query($link , $query);
		if (mysqli_num_rows($hasil) > 0) {
			$i = 0;
			
			while ($data = mysqli_fetch_assoc($hasil)) {
				$i++;
				echo "
					<tr class='data-form'>
						<td>".$i."</td>
						<td>".$data['username']."</td>
						<td>".$data['level']."</td>
						<td>
							<a class='btn-edit' href='user-edit.php?kode_login=".$data['kode_login']."'>Edit</a>
							<a class='btn-delete'href='user-delete.php?kode_login=".$data['kode_login']."'>Delete</a>
						</td>
					</tr>

				";
			}
		}else{
			echo "
				<tr>
					<td colspan='11'>
						<p align='center'>Data tidak ada!</p>
					</td>
				</tr>
			";
		}
		
	}
	function guru($username , $level){
		GLOBAL $link;
		$query = "SELECT * FROM tb_login WHERE username = '$username' AND level = '$level'";
		$hasil = mysqli_query($link , $query);
		$kode_login = mysqli_fetch_assoc($hasil)['kode_login'];
		$query_insert = "INSERT INTO  tb_guru VALUES ( null , $kode_login , 'Belum diisi' , 'Belum diisi' , 'Belum diisi' , 'Belum diisi' , 'Belum diisi' , 'Belum diisi' , 'Belum diisi' , 'Belum diisi' , 'Belum Diisi' , 'Belum Diisi')";

		if ($hasil = mysqli_query($link , $query_insert)) {
			return true;
		}else{
			return false;
		}
	}
	function siswa($username , $level){
		GLOBAL $link;
		$query = "SELECT * FROM tb_login WHERE username = '$username' AND level = '$level'";
		$hasil = mysqli_query($link , $query);
		$kode_login = mysqli_fetch_assoc($hasil)['kode_login'];
		$query_insert = "INSERT INTO  tb_siswa VALUES ( null , $kode_login , 'Belum diisi' , 'Belum diisi' , 'Belum diisi' , 'Belum diisi' , 'Belum diisi' , 'Belum diisi' , 'Belum diisi' , 'Belum diisi'  , 'Belum diisi'  , 'Belum diisi' , 'Belum diisi')";

		if ($hasil = mysqli_query($link , $query_insert)) {
			return true;
		}else{
			return false;
		}
	}
 ?>

