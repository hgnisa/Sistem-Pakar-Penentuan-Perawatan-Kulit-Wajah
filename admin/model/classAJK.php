<?php

error_reporting(0);

class AturanJenisKulit {
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "sispakestetika";
	var $con;

	function __construct () {
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}
	
	// function tampil_kode_JK () {
	// 	$data = mysqli_query($this->con, "SELECT substr((max(ID_JK)), 3, 3) as maxKode FROM jeniskulit");
	// 	while ($d = mysqli_fetch_array($data)) {
	// 		$hasil = $d['maxKode'];
	// 		$hasil = $hasil + 1;
			
	// 		if ($hasil < 10){
	// 			$char = "JK00". $hasil;
	// 		}
	// 		else{
	// 			$char = "JK0". $hasil;
	// 		}
	// 	}
	// 	return $char;
	// }
	
	function tampilAturanJK () {
		$data = mysqli_query($this->con, "SELECT * FROM rulefr");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function input ($parent, $pertanyaan, $ya, $tidak, $ID_JK) {
		mysqli_query($this->con, "INSERT INTO rulefr(parent, pertanyaan, ya, tidak, ID_JK)VALUES('$parent','$pertanyaan','$ya','$tidak','$ID_JK')");
	}
	
	
	function hapus ($id) {
		mysqli_query($this->con, "DELETE FROM rulefr WHERE ID_ruleFR='$id'");
	}
	
	
	function edit ($id){
		$data = mysqli_query($this->con, "SELECT * FROM rulefr WHERE ID_ruleFR='$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	// function update ($ID_ruleFR, $parent, $pertanyaan, $ya, $tidak, $ID_JK) {
	// 	mysqli_query ($this->con, "UPDATE rulefr SET  parent = '$parent', pertanyaan = '$pertanyaan', ya = '$ya', tidak = '$tidak', ID_JK = '$ID_JK' where ID_ruleFR = '$ID_ruleFR'");
	// }
}
?>