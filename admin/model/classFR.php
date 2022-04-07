<?php

error_reporting(0);

class FaktorResiko {
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "sispakestetika";
	var $con;

	function __construct () {
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}
	
	function tampil_kode_FR () {
		$data = mysqli_query($this->con, "SELECT substr((max(ID_FR)), 3, 3) as maxKode FROM faktorresiko");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['maxKode'];
			$hasil = $hasil + 1;
			
			if ($hasil < 10){
				$char = "FR00". $hasil;
			}
			else{
				$char = "FR0". $hasil;
			}
		}
		return $char;
	}
	
	function tampilFR () {
		$data = mysqli_query($this->con, "SELECT * FROM faktorresiko");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function input ($ID_FR, $ketFR, $tanyaFR) {
		mysqli_query($this->con, "INSERT INTO faktorresiko(ID_FR, ketFR, tanyaFR)VALUES('$ID_FR','$ketFR','$tanyaFR')");
	}
	
	
	function hapus ($id) {
		mysqli_query($this->con, "DELETE FROM faktorresiko WHERE ID_FR='$id'");
	}
	
	
	function edit ($id){
		$data = mysqli_query($this->con, "SELECT * FROM faktorresiko WHERE ID_FR='$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update ($ID_FR, $ketFR, $tanyaFR) {
		mysqli_query ($this->con, "UPDATE faktorresiko SET  ketFR = '$ketFR', tanyaFR = '$tanyaFR' where ID_FR = '$ID_FR'");
	}
}
?>