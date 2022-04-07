<?php
include '../model/classHP.php';
include '../koneksi.php';
$db = new Home ();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$db->input($_POST['ID_HP'], $_POST['ketHP']);
	header ("location:../homeProduct.php");
}elseif ($aksi == "hapus") {
	$db->hapus($_GET['id']);
	header ("location:../homeProduct.php");
}elseif ($aksi == "edit") {
	$db->edit($_GET['id']);
	header ("location:../homeProduct.php");
}elseif ($aksi == "update") {
	$db->update($_POST['ID_HP'], $_POST['ketHP']);
	header("location:../homeProduct.php");
}
?>