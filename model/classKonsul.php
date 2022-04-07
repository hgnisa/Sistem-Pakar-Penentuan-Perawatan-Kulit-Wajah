<?php
class konsul {

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "sispakestetika";
	var $con;

	function __construct () {
		$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		mysqli_select_db($this->con,$this->db);
	}

	//penentuan jenis kulit
	
	function solusi_FR ($ID_JK) {
		$data = mysqli_query($this->con, "SELECT * FROM jeniskulit WHERE ID_JK = '$ID_JK'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['ketJK'];
		}
		return $hasil;
	}

	function truncate() {
		mysqli_query($this->con, "TRUNCATE TABLE temp_rulefr");
	}

	function tampil_pertanyaan ($ID_FR) {
		$data = mysqli_query($this->con, "SELECT * FROM rulefr WHERE parent = '$ID_FR'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['pertanyaan'];
		}
		return $hasil;
	}

	function tampil_ketFR ($ID_FR) {
		$data = mysqli_query($this->con, "SELECT * FROM faktorresiko WHERE ID_FR = '$ID_FR'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['ketFR'];
		}
		return $hasil;
	}

	//penentuan penyakit

	function solusi_GP ($ID_Penyakit) {
		$data = mysqli_query($this->con, "SELECT * FROM penyakit WHERE ID_Penyakit = '$ID_Penyakit'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['ketPenyakit'];
		}
		return $hasil;
	}

	function truncateGP() {
		mysqli_query($this->con, "TRUNCATE TABLE temp_rulegp");
	}

	function truncate_ya_JK() {
		mysqli_query($this->con, "TRUNCATE TABLE temp_ya_rulefr");
	}

	function truncate_ya_Penyakit() {
		mysqli_query($this->con, "TRUNCATE TABLE temp_ya_rulegp");
	}

	function tampil_pertanyaanGP ($ID_Gejala) {
		$data = mysqli_query($this->con, "SELECT * FROM rulegp WHERE parent = '$ID_Gejala'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['pertanyaan'];
		}
		return $hasil;
	}

	function tampil_ketGejala ($ID_Gejala) {
		$data = mysqli_query($this->con, "SELECT * FROM gejala WHERE ID_Gejala = '$ID_Gejala'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['ketGejala'];
		}
		return $hasil;
	}

	//data konsultasi

	function tampil_kode_pasien () {
		include("koneksi2.php");
		$data = mysqli_query($con, "SELECT substr((max(ID_Konsul)), 2, 3) as maxKode FROM konsultasi");
		while ($d = mysqli_fetch_array($data)) {
		  $hasil = $d['maxKode'];
		  $hasil = $hasil + 1;
		  
		  if ($hasil < 10){
			$char = "K00". $hasil;
		  }
		  else{
			$char = "K0". $hasil;
		  }
		}
		return $char;
	  }
	
	function tampilKS () {
		$data = mysqli_query($this->con, "SELECT * FROM konsultasi");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function tampilKS_Satu ($ID_Konsul) {
		$data = mysqli_query($this->con, "SELECT * FROM konsultasi WHERE ID_Konsul = '$ID_Konsul'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}

	function tampil_ketJK ($ID_JK) {
		$data = mysqli_query($this->con, "SELECT * FROM jeniskulit WHERE ID_JK = '$ID_JK'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['ketJK'];
		}
		return $hasil;
	}

	function tampil_ketPenyakit ($ID_Penyakit) {
		$data = mysqli_query($this->con, "SELECT * FROM penyakit WHERE ID_Penyakit = '$ID_Penyakit'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil = $d['ketPenyakit'];
		}
		return $hasil;
	}
	
	function input ($ID_Konsul, $namaPasien, $usia, $jenisKelamin, $noHP, $alamat, $tglKonsul) {
		mysqli_query($this->con, "INSERT INTO konsultasi(ID_Konsul, namaPasien, usia, jenisKelamin, noHP, alamat, tglKonsul)
		VALUES('$ID_Konsul', '$namaPasien', '$usia', '$jenisKelamin', '$noHP', '$alamat', '$tglKonsul')");
	}
	
	
	function hapus ($id) {
		mysqli_query($this->con, "DELETE FROM konsultasi WHERE ID_Konsul='$id'");
	}
	
	
	function edit ($id){
		$data = mysqli_query($this->con, "SELECT * FROM konsultasi WHERE ID_Konsul='$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
		return $hasil;
	}
	
	function update ($ID_Konsul, $namaPasien, $usia, $jenisKelamin, $noHP, $alamat) {
		mysqli_query ($this->con, "UPDATE konsultasi SET  namaPasien = '$namaPasien', usia = '$usia', jenisKelamin = '$jenisKelamin', noHP = '$noHP',
		alamat = '$alamat' where ID_Konsul = '$ID_Konsul'");
	}
}
?>