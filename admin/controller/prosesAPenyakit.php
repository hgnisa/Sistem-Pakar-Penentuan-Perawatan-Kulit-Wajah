<?php
include '../model/classAPenyakit.php';
include '../koneksi.php';
$db = new AturanPenyakit();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$db->input($_POST['parent'], $_POST['pertanyaan'], $_POST['ya'], $_POST['tidak'], $_POST['ID_Penyakit']);
	header ("location:../aPenyakit.php");
}elseif ($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header ("location:../aPenyakit.php");
}elseif ($aksi == "edit") {
	$db->edit($_GET['id']);
	header ("location:../aPenyakit.php");
}
// elseif ($aksi == "update") {
// 	$db->update($_POST['ID_Penyakit'], $_POST['ketPenyakit'], $_POST['ID_HP'], $_POST['opsiTR']);
// 	header("location:../aPenyakit.php");
// }
?>