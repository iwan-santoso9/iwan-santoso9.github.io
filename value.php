<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crc-32</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="top-bar">
		
	</div>
	<div class="container">
		<div class="header">
			<h1 class="judul">CRC-32</h1>
		</div>
		<div class="hero"></div>
		<div class="content cf">
			<div class="main">
				<form name="enkripsi" method="post">
					<label>Isi Teks</label>
					<textarea name="plain" required type="text" class="form-control" rows="5" cols="76" placeholder="Masukkan teks disini..." value="<?= $_POST['plain'] ?>"></textarea>
					<button type="submit" class="btn btn-primary" name="submit" style="width: 100%">Ubah ke Heksa</button>
				</form>
				<p>
					<input type="text" value="<?php if (isset($_POST['submit'])){ 
					$checksum = crc32($_POST['plain']);
					printf("%x\n", $checksum);
				} ?>">
				</p>
			</div>
			<div class="sidebar">
				<h3></h3>
				<img src="img/iwan.jpg" alt="IwanSantoso">
				<p>
					<table>
						<tr>
							<td>Nama</td>
							<td>&nbsp;:&nbsp;</td>
							<td>Iwan Santoso</td>
						</tr>
						<tr>
							<td>Nim</td>
							<td>&nbsp;:&nbsp;</td>
							<td>1814321037</td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td>&nbsp;:&nbsp;</td>
							<td>D Malam</td>
						</tr>
					</table>
				</p>
			</div>
		</div>
		<div class="footer">
			<p class="copy">Copyright 2020. Iwan Santoso.</p>
		</div>
	</div>
</body>
</html>