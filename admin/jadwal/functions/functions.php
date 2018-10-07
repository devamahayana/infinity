<?php 
	require_once 'core/init.php';
 
	function viewdata(){
		GLOBAL $link;

		$query  = "SELECT tb_jadwal.* , tb_matpel.nama_matpel  , tb_guru.nama_guru , tb_kelas.* FROM tb_jadwal 
				   JOIN tb_matpel ON tb_jadwal.`kode_matpel` = tb_matpel.`kode_matpel`
				   JOIN tb_guru ON tb_jadwal.`kode_guru` = tb_guru.`kode_guru` 
				   JOIN tb_kelas ON tb_jadwal.`kode_kelas` = tb_kelas.`kode_kelas` 
				   ORDER BY kode_jadwal";
		$hasil = mysqli_query($link , $query);
		if (mysqli_num_rows($hasil) > 0) {
			$i = 0;
			
			while ($data = mysqli_fetch_assoc($hasil)) {
				$i++;
				$kelas = $data['tingkat_kelas']." ".$data['nama_kelas'];
				echo "
					<tr class='data-form'>
						<td>".$i."</td>
						<td>".$data['nama_matpel']."</td>
						<td>".$data['nama_guru']."</td>
						<td>".$data['hari']."</td>
						<td>".$data['jam_mulai']."</td>
						<td>".$data['jam_selesai']."</td>
						<td>".$kelas."</td>
						<td>".$data['tahun_ajaran']."</td>
						<td>
							<a class='btn-edit' href='jadwal-edit.php?kode_jadwal=".$data['kode_jadwal']."'>Edit</a>
							<a class='btn-delete'href='jadwal-delete.php?kode_jadwal=".$data['kode_jadwal']."'>Delete</a>
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

