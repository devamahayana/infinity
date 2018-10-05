<?php 
	require_once 'core/init.php';
 
	function viewdata(){
		GLOBAL $link;

		$query  = "SELECT * FROM tb_kelas ORDER BY kode_kelas";
		$hasil = mysqli_query($link , $query);
		if (mysqli_num_rows($hasil) > 0) {
			$i = 0;
			
			while ($data = mysqli_fetch_assoc($hasil)) {
				$i++;
				echo "
					<tr class='data-form'>
						<td>".$i."</td>
						<td>".$data['nama_kelas']."</td>
						<td>".$data['tingkat_kelas']."</td>
						<td>".$data['ruangan_kelas']."</td>
						<td>
							<a class='btn-edit' href='kelas-edit.php?kode_kelas=".$data['kode_kelas']."'>Edit</a>
							<a class='btn-delete'href='kelas-delete.php?kode_kelas=".$data['kode_kelas']."'>Delete</a>
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

