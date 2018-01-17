<!DOCTYPE html>
<html>
<head>
	<title>Pesanan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Madura Pangkas Rambut</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
	<div id="header">
		<a href="index.html" class="logo">
			<img src="images/logo2.jpg" alt="">
		</a>
		<ul id="navigation">
			<li>
				<a href="home.php">Beranda</a>
			</li>
			<li>
				<a href="gallery.php">Galeri</a>
			</li>
			<li>
				<a href="blog.php">Blog</a>
			</li>
			<li>
				<a href="pemesanan.php">Pemesanan</a>
			</li>
			<li>
				<a href="about.php">Tentang</a>
			</li>
			<li>
				<a href="index.php">Logout</a>
			</li>
		</ul>
	</div>
<div id="body">
<h1> Pemesan </h1>
<form action="proses.php?aksi=tambah" method="post">
<table>
	<tr>
		<td><h3>Nama:</h3></td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td><h3>Alamat:</h3></td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td><h3>Jenis Kelamin:</h3></td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
	<tr>
		<td><h3>Model Rambut:</h3></td>
		<td><input type="text" name="model"></td>
	</tr>
	<tr>
	<tr>
		<td><h3>Nomer Tlp:</h3></td>
		<td><input type="text" name="notlp"></td>
	</tr>
	<tr>
	<tr>
		<td><h3>Pencukur:</h3></td>
		<td><input type="text" name="pencukur"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>	
</form>

</div>
</body>
</html>