<?php

error_reporting(0);

class Home {
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "sispakestetika";
	var $con;

	function __construct () {
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}
	
	function tampil_kode_HP () {
		$data = mysqli_query($this->con, "SELECT substr((max(ID_HP)), 3, 3) as maxKode FROM homeproduct");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['maxKode'];
			$hasil = $hasil + 1;
			
			if ($hasil < 10){
				$char = "HP00". $hasil;
			}
			else{
				$char = "HP0". $hasil;
			}
		}
		return $char;
	}
	
	function tampilHP () {
		$data = mysqli_query($this->con, "SELECT * FROM homeproduct");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function input ($ID_HP, $ketHP) {
		mysqli_query($this->con, "INSERT INTO homeproduct(ID_HP, ketHP)VALUES('$ID_HP','$ketHP')");
	}
	
	
	function hapus ($id) {
		mysqli_query($this->con, "DELETE FROM homeproduct WHERE ID_HP = '$id'");
	}
	
	
	function edit ($id){
		$data = mysqli_query($this->con, "SELECT * FROM homeproduct WHERE ID_HP ='$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update ($ID_HP, $ketHP) {
		mysqli_query ($this->con, "UPDATE homeproduct SET  ketHP = '$ketHP' where ID_HP = '$ID_HP'");
	}
}
?>