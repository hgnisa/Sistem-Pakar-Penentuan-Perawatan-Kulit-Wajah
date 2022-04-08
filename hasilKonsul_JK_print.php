<?php

//PRINT HALAMAN SUPPLIER
include "../laporan/fpdf.php";
include "koneksi2.php";

include "model/classKonsul.php";
$db = new konsul();

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5,'KLINIK dr. IKA','0','1','C',false);
$pdf->SetFont('Arial','',8);
$pdf->Cell(0,5,'Konsultasi Perawatan Kulit Wajah','0','1','C',false);
$pdf->Cell(0,2,'Kota Pekanbaru','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(50,5,'Hasil Konsultasi Jenis Kulit Wajah','0','1','L',false);
$pdf->Ln(1);

$ID_Konsul = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM konsultasi WHERE ID_Konsul = '$ID_Konsul'");
while($data = mysqli_fetch_array($query)){
	$ID_JK = $data['ID_JK'];
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(30,5,'Nama',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->Cell(50,5,$data['namaPasien'],0,0,'L');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(30,5,'Usia',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->Cell(50,5,$data['usia'],0,0,'L');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(30,5,'Jenis Kelamin',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->Cell(50,5,$data['jenisKelamin'],0,0,'L');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(30,5,'no HP',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->Cell(50,5,$data['noHP'],0,0,'L');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(30,5,'Alamat',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->Cell(50,5,$data['alamat'],0,0,'L');
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',7);
	$pdf->Cell(30,5,'Tanggal Konsultasi',0,0,'L');
	$pdf->Cell(5,5,':',0,0,'L');
	$pdf->Cell(50,5,$data['tglKonsul'],0,0,'L');
	$pdf->Ln(20);

	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,5,'Hasil Konsultasi','0','1','C',false);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,5,'Berikut adalah faktor resiko terpilih:','0','1','C',false);
	$sql = mysqli_query($con, "SELECT DISTINCT pertanyaan FROM temp_ya_rulefr");
    while ($m = mysqli_fetch_array($sql)) {
		$list = $m['pertanyaan'];
		if($list != NULL){
				$pdf->Cell(0,5,$db->tampil_ketFR($list),'0','1','C',false);
		}
	}
	$pdf->Ln(10);
	$data2 = mysqli_query($con, "SELECT * FROM jeniskulit WHERE ID_JK = '$ID_JK'");
    while ($d2 = mysqli_fetch_array($data2)) {
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(0,5,'Kulit wajah pasien tergolong ke dalam tipe '.$d2['ketJK'],'0','1','C',false);
	}
}



$pdf->Output("Produksi.pdf","I");

?>



















