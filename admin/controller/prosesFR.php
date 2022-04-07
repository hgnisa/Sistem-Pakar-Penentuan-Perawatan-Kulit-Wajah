<?php
include '../model/classFR.php';
include '../koneksi.php';
$db = new FaktorResiko();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$db->input($_POST['ID_FR'], $_POST['ketFR'], $_POST['tanyaFR']);
	header ("location:../faktorResiko.php");
}elseif ($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header ("location:../faktorResiko.php");
}elseif ($aksi == "edit") {
	$db->edit($_GET['id']);
	header ("location:../faktorResiko.php");
}elseif ($aksi == "update") {
	$db->update($_POST['ID_FR'], $_POST['ketFR'], $_POST['tanyaFR']);
	header("location:../faktorResiko.php");
}
?>