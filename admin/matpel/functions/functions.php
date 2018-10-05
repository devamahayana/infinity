<?php 
	require_once 'core/init.php';
 
	function viewdata(){
		GLOBAL $link;

		$query  = "SELECT * FROM tb_matpel ORDER BY kode_matpel";
		$hasil = mysqli_query($link , $query);
		if (mysqli_num_rows($hasil) > 0) {
			$i = 0;
			
			while ($data = mysqli_fetch_assoc($hasil)) {
				$i++;
				echo "
					<tr class='data-form'>
						<td>".$i."</td>
						<td>".$data['nama_matpel']."</td>
						<td>".$data['jumlah_jam']."</td>
						<td>
							<a class='btn-edit' href='matpel-edit.php?kode_matpel=".$data['kode_matpel']."'>Edit</a>
							<a class='btn-delete'href='matpel-delete.php?kode_matpel=".$data['kode_matpel']."'>Delete</a>
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

