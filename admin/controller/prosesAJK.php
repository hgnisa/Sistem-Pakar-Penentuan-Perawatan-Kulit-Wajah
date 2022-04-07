<?php
include '../model/classAJK.php';
include '../koneksi.php';
$db = new AturanJenisKulit();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$db->input($_POST['parent'], $_POST['pertanyaan'], $_POST['ya'], $_POST['tidak'], $_POST['ID_JK']);
	header ("location:../aJenisKulit.php");
}elseif ($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header ("location:../aJenisKulit.php");
}elseif ($aksi == "edit") {
	$db->edit($_GET['id']);
	header ("location:../aJenisKulit.php");
}
// }elseif ($aksi == "update") {
// 	$db->update($_POST['ID_ruleFR'], $_POST['parent'], $_POST['pertanyaan'], $_POST['ya'], $_POST['tidak'], $_POST['ID_JK']);
// 	header("location:../aJenisKulit.php");
// }
?>