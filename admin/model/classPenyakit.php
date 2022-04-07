<?php

error_reporting(0);

class Penyakit {
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "sispakestetika";
	var $con;

	function __construct () {
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}
	
	function tampil_kode_Penyakit () {
		$data = mysqli_query($this->con, "SELECT substr((max(ID_Penyakit)), 2, 3) as maxKode FROM penyakit");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['maxKode'];
			$hasil = $hasil + 1;
			
			if ($hasil < 10){
				$char = "P00". $hasil;
			}
			else{
				$char = "P0". $hasil;
			}
		}
		return $char;
	}
	
	function tampilPenyakit () {
		$data = mysqli_query($this->con, "SELECT * FROM penyakit INNER JOIN homeproduct ON penyakit.ID_HP = homeproduct.ID_HP");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function tampilHP($ID_Penyakit) {
		$data = mysqli_query($this->con, "SELECT * FROM penyakit WHERE ID_Penyakit = '$ID_Penyakit'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['ID_HP'];
		}
		return $hasil;
	}

	function tampilketHP($ID_HP) {
		$data = mysqli_query($this->con, "SELECT * FROM homeproduct WHERE ID_HP = '$ID_HP'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['ketHP'];
		}
		return $hasil;
	}

	function tampilopsiTR($ID_Penyakit) {
		$data = mysqli_query($this->con, "SELECT * FROM penyakit WHERE ID_Penyakit = '$ID_Penyakit'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['opsiTR'];
		}
		return $hasil;
	}
	
	function input ($ID_Penyakit, $ketPenyakit, $ID_HP, $opsiTR) {
		mysqli_query($this->con, "INSERT INTO penyakit(ID_Penyakit, ketPenyakit, ID_HP, opsiTR)VALUES('$ID_Penyakit','$ketPenyakit','$ID_HP','$opsiTR')");
	}
	
	
	function hapus ($id) {
		mysqli_query($this->con, "DELETE FROM penyakit WHERE ID_Penyakit = '$id'");
	}
	
	
	function edit ($id){
		$data = mysqli_query($this->con, "SELECT * FROM penyakit WHERE ID_Penyakit ='$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update ($ID_Penyakit, $ketPenyakit, $ID_HP, $opsiTR) {
		mysqli_query ($this->con, "UPDATE penyakit SET  ketPenyakit = '$ketPenyakit', ID_HP = '$ID_HP', opsiTR = '$opsiTR' where ID_Penyakit = '$ID_Penyakit'");
	}
}
?>