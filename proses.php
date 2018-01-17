<?php 
ob_start();
include 'database.php';
$db = new database;

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['nama'],$_POST['alamat'],$_POST['usia'],$_POST['model'],$_POST['notlp'],$_POST['pencukur']);
	header('location:tampil.php');
}

 ?>