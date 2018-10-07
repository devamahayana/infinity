<?php 
	require_once 'core/init.php';
 
	function viewdata(){
		GLOBAL $link;

		$query  = "SELECT tb_siswa.* , tb_login.username FROM tb_siswa 
				   JOIN tb_login ON tb_siswa.`kode_login` = tb_login.`kode_login`
				   ORDER BY kode_siswa";
		$hasil = mysqli_query($link , $query);
		if (mysqli_num_rows($hasil) > 0) {
			$i = 0;
			while ($data = mysqli_fetch_assoc($hasil)) {
				$i++;
				echo "

					<tr class='data-form'>
						<td>".$i."</td>
						<td>".$data['username']."</td>
						<td>".$data['nama_siswa']."</td>
						<td>".$data['alamat_siswa']."</td>
						<td>".$data['agama_siswa']."</td>
						<td>".$data['jk_siswa']."</td>
						<td>".$data['kelas_siswa']."</td>
						<td>".$data['nama_ayah']."</td>
						<td>".$data['notelp_ortu']."</td>
						<td>
							<a class='btn-edit' href='siswa-edit.php?kode_siswa=".$data['kode_siswa']."&kode_login=".$data['kode_login']."'>Edit</a>
							<a class='btn-delete' href='siswa-delete.php?kode_siswa=".$data['kode_siswa']."&kode_login=".$data['kode_login']."'>Delete</a>
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
 ?>

