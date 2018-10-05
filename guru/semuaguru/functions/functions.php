<?php 
	require_once 'core/init.php';
 
	function viewdata(){
		GLOBAL $link;

		$query  = "SELECT tb_guru.* , tb_login.username FROM tb_guru 
				   JOIN tb_login ON tb_guru.`kode_login` = tb_login.`kode_login`
				   ORDER BY kode_guru";
		$hasil = mysqli_query($link , $query);
		if (mysqli_num_rows($hasil) > 0) {
			$i = 0;
			while ($data = mysqli_fetch_assoc($hasil)) {
				$i++;
				echo "

					<tr class='data-form'>
						<td>".$i."</td>
						<td>".$data['username']."</td>
						<td>".$data['nik']."</td>
						<td>".$data['nama_guru']."</td>
						<td>".$data['alamat_guru']."</td>
						<td>".$data['jk_guru']."</td>
						<td>".$data['notelp_guru']."</td>
						<td>".$data['email_guru']."</td>
						<td>
							<a class='btn-edit' href='guru-edit.php?kode_guru=".$data['kode_guru']."'>Edit</a>
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

