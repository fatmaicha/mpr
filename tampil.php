<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<center>
<?php 
include 'database.php';
$db = new database();
 ?>
 <table border="0">
 	<tr>
 		<th>No</th>
 		<th>Nama</th>
 		<th>Alamat</th>
 		<th>Jenis Kelamin</th>
 		<th>Model Rambut</th>
 		<th>No. Telp</th>
 		<th>Pencukur</th>
 	</tr>
 	<?php 
 	$no = 1;
 	foreach($db->tampil_data() as $x){
 	?>
 	<tr>
 		<td><?php echo $no++; ?></td>
 		<td><?php echo $x['nama']; ?></td>
 		<td><?php echo $x['alamat'] ?></td>
 		<td><?php echo $x['jeniskelamin'] ?></td>
 		<td><?php echo $x['model'] ?></td>
 		<td><?php echo $x['notlp'] ?></td>
 		<td><?php echo $x['pencukur'] ?></td>
 	</tr>
 	<?php } 
 	?>
 </table>
 </center>
</div>
</body>
</html>