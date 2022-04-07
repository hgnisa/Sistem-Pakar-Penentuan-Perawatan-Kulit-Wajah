<?php
include '../model/classPenyakit.php';
include '../koneksi.php';
$db = new Penyakit();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$db->input($_POST['ID_Penyakit'], $_POST['ketPenyakit'], $_POST['ID_HP'], $_POST['opsiTR']);
	header ("location:../penyakit.php");
}elseif ($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header ("location:../penyakit.php");
}elseif ($aksi == "edit") {
	$db->edit($_GET['id']);
	header ("location:../penyakit.php");
}elseif ($aksi == "update") {
	$db->update($_POST['ID_Penyakit'], $_POST['ketPenyakit'], $_POST['ID_HP'], $_POST['opsiTR']);
	header("location:../penyakit.php");
}
?>