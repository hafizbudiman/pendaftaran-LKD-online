<?php 
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Peserta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
	<link rel="shortcut icon"
	href="img/logo-ipa.jpg"
	type="image/x-icon">
	<script>
		window.print();
	</script>
</head>
<body>

	<h2>Laporan Calon Peserta LKD</h2><br><br>
	<table class="table" border="1">
		<thead>
			<tr>
				<th>NO</th>
				<th>Id Pendaftaran</th>
				<th>Tahun Ajaran</th>
				<th>Asal Sekolah</th>
				<th>Nama</th>
				<th>Tempat, Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Alamat</th>
				<th>Kelurahan</th>
				<th>Kecamatan</th>
				<th>Kabupaten</th>
				<th>Nomor Telepon</th>
				<th>Riwayat Penyakit</th>
			</tr>
		</thead>
			<tbody>
				<?php 
				$no = 1;
				$list_peserta = mysqli_query($conn, "SELECT * FROM
				tb_pendaftaran");
				while ($row = mysqli_fetch_array($list_peserta)){ 	
				?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['id_pendaftaran'] ?></td>
				<td><?php echo $row['th_ajaran'] ?></td>
				<td><?php echo $row['asl_sekolah'] ?></td>
				<td><?php echo $row['nm_peserta'] ?></td>
				<td><?php echo $row['tmp_lahir']. ', '.$row['tgl_lahir'] ?></td>
				<td><?php echo $row['jk'] ?></td>
				<td><?php echo $row['agama'] ?></td>
				<td><?php echo $row['almt_peserta'] ?></td>
				<td><?php echo $row['kelurahan'] ?></td>
				<td><?php echo $row['kecamatan'] ?></td>
				<td><?php echo $row['kabupaten'] ?></td>
				<td><?php echo $row['no_telpon'] ?></td>
				<td><?php echo $row['rwyt_penyakit'] ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>