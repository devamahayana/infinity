<?php 
	require_once 'core/init.php';
 
	function viewdata(){
		GLOBAL $link;

		$query  = "SELECT * FROM tb_guru ORDER BY kode_guru";
		$hasil = mysqli_query($link , $query);
		if (mysqli_num_rows($hasil) > 0) {
			$i = 0;
			$i++;
			while ($data = mysqli_fetch_assoc($hasil)) {
				echo "

					<tr class='data-form'>
						<td>".$i."</td>
						<td>".$data['nik']."</td>
						<td>".$data['nama_guru']."</td>
						<td>".$data['alamat_guru']."</td>
						<td>".$data['jk_guru']."</td>
						<td>".$data['tempatlahir_guru']."</td>
						<td>".$data['tgllahir_guru']."</td>
						<td>".$data['agama_guru']."</td>
						<td>".$data['notelp_guru']."</td>
						<td>".$data['email_guru']."</td>
						<td>
							<a class='btn-edit' href='edit.html'>Edit</a>
							<a class='btn-delete' href='#'>Delete</a>
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

