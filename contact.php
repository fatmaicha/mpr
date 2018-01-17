<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact - Madura Pangkas Rambut</title>
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
        <a href="contact.php">Pesan</a>
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
		<h1><span>pesan</span></h1>
		<form action="contact.html">
		<div style="margin-top: 20px;">
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/pemesan')?>"> Pemesan</a>
          <a class="menu_admin text-center" id="katagori-tersentuh" href="<?php echo base_url('primefurniture/produkpesanan')?>"> Produk Pesanan</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/perpesanan')?>"> Perpesanan</a>
          <a class="menu_admin text-center" href="<?php echo base_url('primefurniture/proseskerja')?>"> Proses Keja</a>
        </div>
      </div>
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 warna batas-main-kiri " id="margin_menu_admin">
      <p id="title-main-halaman-utama"><span class="glyphicon glyphicon-arrow-right"></span> Halaman Pemesan</p>
      <h4 class="text-center">Pembeli</h4>
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <tr>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Propinsi</td>
            <td>Kabupaten</td>
            <td>Kecamatan</td>
            <td>Desa</td>
            <td>Rt/Rw</td>
            <td>Nomor Hp</td>
            <td>Email</td>
            <td>Kode</td>
            <td>Waktu</td>
          </tr>
          <?php foreach ($pemesan as $item_pemesan) {?>
            <tr>
              <td><?php echo $item_pemesan['nama']; ?></td>
              <td><?php echo $item_pemesan['j_kelamin']; ?></td>
              <td><?php echo $item_pemesan['propinsi']; ?></td>
              <td><?php echo $item_pemesan['kabupaten']; ?></td>
              <td><?php echo $item_pemesan['kecamatan']; ?></td>
              <td><?php echo $item_pemesan['desa']; ?></td>
              <td><?php echo $item_pemesan['rt_rw']; ?></td>
              <td><?php echo $item_pemesan['no_hp']; ?></td>
              <td><?php echo $item_pemesan['email']; ?></td>
              <td><?php echo $item_pemesan['kode']; ?></td>
              <td><?php echo $item_pemesan['tanggal']; ?></td>
            </tr>
          <?php } ?>
        </table>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-2 col-md-offset-3 col-lg-offset-3">
        <h4 class="text-center">Hapus Data Pembeli</h4>
        <form method="post" action="<?php echo base_url('primefurniture/hapusdatapembeli'); ?>">
          <div class="form-group">
            <label for="email" class="warna">Pilih Email: </label>
            <select name="email" class="form-control">
              <?php foreach ($pemesan as $item_pemesan) {?>
                <option value="<?php echo $item_pemesan['email']; ?>"><?php echo $item_pemesan['email']; ?></option>
              <?php }; ?>
            </select>
          </div>
          <center><button type="submit" class="btn btn-danger batas-bawah">Hapus</button></center>
        </form>
      </div>
    </div>
  </div>
</div>

			"twitter">twitter</a>
				</li>
				<li>
					<a href="" id="facebook">facebook</a>
				</li>
				<li>
					<a href="" id="googleplus">googleplus</a>
				</li>
				<li>
					<a href="" id="pinterest">pinterest</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
