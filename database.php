
<?php
class database{
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "pesanan";
	var $con;
	function __construct(){
		$this->con = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		
		// Check connection
		/*
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		} else
			echo "Koneksi berhasil<br />";*/
	}
	function tampil_data(){
		$data = mysqli_query($this->con,"select * from tbl_pemesanan");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
	}
	function input($nama,$alamat,$usia,$model,$notlp,$pencukur){
		mysqli_query($this->con,"insert into tbl_pemesanan values('','$nama','$alamat','$usia','$model','$notlp','$pencukur')") or die(mysqli_error($this->con));
	}
}
?>