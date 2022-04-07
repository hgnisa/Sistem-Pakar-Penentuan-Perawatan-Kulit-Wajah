<?php
include '../model/classGejala.php';
include '../koneksi.php';
$db = new Gejala();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$db->input($_POST['ID_Gejala'], $_POST['ketGejala'], $_POST['tanyaGejala']);
	header ("location:../gejala.php");
}elseif ($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header ("location:../gejala.php");
}elseif ($aksi == "edit") {
	$db->edit($_GET['id']);
	header ("location:../gejala.php");
}elseif ($aksi == "update") {
	$db->update($_POST['ID_Gejala'], $_POST['ketGejala'], $_POST['tanyaGejala']);
	header("location:../gejala.php");
}
?>