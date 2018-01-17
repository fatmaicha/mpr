<?php
 <head>
 <title>Pemesanan Tiket KA</title> <!--memberikan judul HTML-->
 </head>
 <body>
 <h1 align = "center">PT. Kereta Api Indonesia Persero.tbk</h1>
 
 <table align = "center", border = "2">
 <tr>
 <td align = 'center'><a href='tambah-tiket.php?id_tiket=$id_tiket'>Tambah Pemesan</a></td> <!--memberikan link untuk menambah pemesan tiket-->
 </tr>
 </table>
 
</html>
 <script language="javascript" type="text/javascript"> <!--Script javascript-->
 function deleteKereta(id_tiket){ <!--fungsi untuk menghapus kolom pemesan tiket-->
 if (confirm('Are you sure to delete this Ticket?')) { window.location.href = '?delete&id_tiket=' + id_tiket;
 } <!--mengkonfirmasikan apakah yakin mau hapus atau tidak-->
 }
 </script>
 
<?php
 
 include("koneksi.php"); //pemanggilan file "koneksi.php"
 
 if(isset($_GET['delete']) && isset($_GET['id_pemesanan'])){ // fungsi isset untuk menyatakan variable sudah diset atau tidak
 $sqldelete = 'DELETE FROM pemesanan WHERE id_pemesanan="'.$_GET['id_tiket'].'"';
 mysql_query($sqldelete) or die('Delete pemesanan failed. ' . mysql_error()); // pemberitahuan bahwa delete gagal
 echo "<script>window.location.href='indek.php';</script>";
 }
 
 $selectkereta = 'select *from pemesanan order by id_pemesanan asc'; // variabel untuk memanggil query select ke database
 $resultselectkereta = mysql_query($selectkereta) or die ('error, load data kereta failed.'.mysql_error()); // pemberitahuan error bahwa gagal membuka data
 
 if(mysql_num_rows($resultselectkereta)==0){echo "Data tidak tersedia";} // pengeccekan ketersediaan data
 
 else {
 echo "<table width='75%' align = 'center' border = '10'>
 <br></br>
 <td height = '40' colspan = '10' align = 'center' bgcolor = 'red'><font size = '5'><strong>Daftar Pemesanan Tiket Kereta Api</strong></td>
 <tr height = '30' >
 <td align = 'center' bgcolor = 'gray'= 'center'>Nama Pelanggan</td>
 <td align = 'center' bgcolor = 'gray'= 'center'>Alamat Pelanggan</td>
 <td align = 'center' bgcolor = 'gray'= 'center'>Jenis kelamin</td>
 <td align = 'center' bgcolor = 'gray'= 'center'>model rambut</td>
 <td align = 'center' bgcolor = 'gray'= 'center'>pencukur</td>
 <td align = 'center' bgcolor = 'gray'= 'center'>tanggal pemesanan</td>
 <td align = 'center' bgcolor = 'gray'= 'center' colspan = '2'>Action</td>
 </tr>";
 while($row = mysql_fetch_array($resultselectkereta)){ // mysql_fetch_array : fungsi untuk menyimpan data menjadi array
 extract($row); // extract() : mengkonversi nama array menjadi variabel
 echo
 "<tr>
 <td align = 'center' bgcolor = 'silver'>".$id_pemesanan."</td>
 <td align = 'center' bgcolor = 'silver'>".$nama_pelanggan."</td>
 <td align = 'center' bgcolor = 'silver'>".$alamat_pelanngan."</td>
 <td align = 'center' bgcolor = 'silver'>".$jenis_kelamin."</td>
 <td align = 'center' bgcolor = 'silver'>".$model_rambut."</td>
 <td align = 'center' bgcolor = 'silver'>".$pencukur."</td>
 <td align = 'center' bgcolor = 'silver'>".$tgl_pemesanan."</td>
 <td align = 'center' bgcolor = 'silver'><a href='edit-pemesanan.php?id_pemesanan=$id_pemesanan'>Update</a></td> 
 
 </tr>";
 }
 echo "</table>";
 }
?>
 </body>
</html