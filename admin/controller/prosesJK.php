<?php
include '../model/classJK.php';
include '../koneksi.php';
$db = new JenisKulit();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$db->input($_POST['ID_JK'], $_POST['ketJK']);
	header ("location:../jenisKulit.php");
}elseif ($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header ("location:../jenisKulit.php");
}elseif ($aksi == "edit") {
	$db->edit($_GET['id']);
	header ("location:../jenisKulit.php");
}elseif ($aksi == "update") {
	$db->update($_POST['ID_JK'], $_POST['ketJK']);
	header("location:../jenisKulit.php");
}
?>