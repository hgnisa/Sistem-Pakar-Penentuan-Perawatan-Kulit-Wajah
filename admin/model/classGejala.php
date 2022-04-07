<?php

error_reporting(0);

class Gejala {
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "sispakestetika";
	var $con;

	function __construct () {
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}
	
	function tampil_kode_Gejala () {
		$data = mysqli_query($this->con, "SELECT substr((max(ID_Gejala)), 2, 3) as maxKode FROM gejala");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['maxKode'];
			$hasil = $hasil + 1;
			
			if ($hasil < 10){
				$char = "G00". $hasil;
			}
			else{
				$char = "G0". $hasil;
			}
		}
		return $char;
	}
	
	function tampilGejala () {
		$data = mysqli_query($this->con, "SELECT * FROM gejala");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function input ($ID_Gejala, $ketGejala, $tanyaGejala) {
		mysqli_query($this->con, "INSERT INTO gejala(ID_Gejala, ketGejala, tanyaGejala)VALUES('$ID_Gejala','$ketGejala', '$tanyaGejala')");
	}
	
	
	function hapus ($id) {
		mysqli_query($this->con, "DELETE FROM gejala WHERE ID_Gejala='$id'");
	}
	
	
	function edit ($id){
		$data = mysqli_query($this->con, "SELECT * FROM gejala WHERE ID_Gejala='$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update ($ID_Gejala, $ketGejala, $tanyaGejala) {
		mysqli_query ($this->con, "UPDATE gejala SET  ketGejala = '$ketGejala', tanyaGejala = '$tanyaGejala'  where ID_Gejala = '$ID_Gejala'");
	}
}
?>