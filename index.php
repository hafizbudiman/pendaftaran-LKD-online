<?php 
	include 'koneksi.php';

	if(isset($_POST['submit'])){

		// ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter aja dari sebelah kanan
		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM 
			tb_pendaftaran");
		$d = mysqli_fetch_object($getMaxId);
		$generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);

		// proses insert
		$insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
				'".$generateId."',
				'".date('Y-m-d')."',
				'".$_POST['th_ajaran']."',
				'".$_POST['asal_sekolah']."',
				'".$_POST['nm']."',
				'".$_POST['tmp_lahir']."',
				'".$_POST['tgl_lahir']."',
				'".$_POST['jk']."',
				'".$_POST['agama']."',
				'".$_POST['alamat']."',
				'".$_POST['kelurahan']."',
				'".$_POST['kecamatan']."',
				'".$_POST['kabupaten']."',
				'".$_POST['no_telpon']."',
				'".$_POST['rwyt_penyakit']."'
			)");

		if($insert){
			echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
		}else{
			echo 'huft '.mysqli_error($conn);
		}
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PLKD Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
	<link rel="shortcut icon"
	href="img/logo-ipa.jpg"
	type="image/x-icon">

</head>
<body>

	<!-- bagian box formulir -->
	<section class="box-formulir">
		
		<h2>Pendaftaran Peserta LKD IPA Kab Labuhanbatu</h2>

		<!-- bagian form -->
		<form action="" method="post">
			
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>
							<input type="text" name="th_ajaran" class="input-control" value="2022/2023" readonly>
						</td>
					</tr>
					<tr>
						<td>Asal Sekolah</td>
						<td>:</td>
						<td>
							<input type="text" name="asal_sekolah" class="input-control">
						</td>
					</tr>
				</table>
			</div>

			<h3>Data Diri Calon Peserta LKD</h3>

				<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td>
							<input type="text" name="nm" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>
							<input type="text" name="tmp_lahir" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>
							<input type="date" name="tgl_lahir" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<input type="radio" name="jk" class="input-control" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;
							<input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
						</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>
							<select class="input-control" name="agama">
								<option value="">--pili--</option>
								<option value="Islam">Islam</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Alamat Lengkap</td>
						<td>:</td>
						<td>
							<textarea class="input-control" name="alamat"></textarea>
						</td>
					</tr>
					<tr>
						<td>Kelurahan</td>
						<td>:</td>
						<td>
							<input type="text" name="kelurahan" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Kecamatan</td>
						<td>:</td>
						<td>
							<input type="text" name="kecamatan" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Kabupaten</td>
						<td>:</td>
						<td>
							<input type="text" name="kabupaten" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Nomor Telepon</td>
						<td>:</td>
						<td>
							<input type="text" name="no_telpon" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Riwayat Penyakit</td>
						<td>:</td>
						<td>
							<input type="text" name="rwyt_penyakit" class="input-control">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
						</td>
					</tr>
				</table>
			</div> 

		</form>

	</section>

</body>
</html>