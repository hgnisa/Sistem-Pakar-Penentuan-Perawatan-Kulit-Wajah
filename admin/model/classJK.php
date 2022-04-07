<?php

error_reporting(0);

class JenisKulit {
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "sispakestetika";
	var $con;

	function __construct () {
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}
	
	function tampil_kode_JK () {
		$data = mysqli_query($this->con, "SELECT substr((max(ID_JK)), 3, 3) as maxKode FROM jeniskulit");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['maxKode'];
			$hasil = $hasil + 1;
			
			if ($hasil < 10){
				$char = "JK00". $hasil;
			}
			else{
				$char = "JK0". $hasil;
			}
		}
		return $char;
	}
	
	function tampilJK () {
		$data = mysqli_query($this->con, "SELECT * FROM jeniskulit");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function input ($ID_JK, $ketJK) {
		mysqli_query($this->con, "INSERT INTO jeniskulit(ID_JK, ketJK)VALUES('$ID_JK','$ketJK')");
	}
	
	
	function hapus ($id) {
		mysqli_query($this->con, "DELETE FROM jeniskulit WHERE ID_JK='$id'");
	}
	
	
	function edit ($id){
		$data = mysqli_query($this->con, "SELECT * FROM jeniskulit WHERE ID_JK='$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update ($ID_JK, $ketJK) {
		mysqli_query ($this->con, "UPDATE jeniskulit SET  ketJK = '$ketJK' where ID_JK = '$ID_JK'");
	}
}
?>