<?php
define('FPDF_FONTPATH','fpdf17/font/');
require('fpdf17/fpdf.php');

class PDF extends FPDF
{
	//Page header
	function Header()
	{
		//Logo
		$this->Image('c.png',20,2);
		//Arial bold 15
		$this->SetFont('Arial','B',15);
		$this->Image('aa.png',20,30);
		//pindah ke posisi ke tengah untuk membuat judul
		$this->Cell(80);
		//judul
		$this->Cell(30,5,'Surat Peminjaman Angkutan ',0,0,'C');
		//pindah baris
		$this->Ln(9);
		$this->Cell(80);
		$this->Cell(30,5,'Akademi Kepolisian',0,0,'C');
		$this->Ln(10);
		//buat garis horisontal
		$this->Line(10,25,200,25);
	}
	
	//Page Content
	function Content()
	{
		$this->SetFont('Times','',12);
		// for($i=1; $i<=40; $i++)
			$this->Cell(150);
			$this->Cell(0,10,'Tanggal 01-01-2018 ',0,1);
			$this->Cell(0,5,'No. Surat     : 24/Peminjaman/AKPOL.09.02/Angkutan/XI/2018 ',0,1);
			$this->Cell(0,5,'Oleh            : Panitia Software Freedom Day ',0,1);
			$this->Cell(0,5,'Hal              : Peminjaman Angkutan		',0,1);
			$this->Cell(0,5,' ',0,1);
			$this->Cell(0,5,'Kepada ',0,1);
			$this->Cell(0,5,'Kepala TU Akademi Kepolisian			',0,1);
			$this->Cell(0,5,'Akademi Kepolisian			',0,1);
			$this->Cell(0,5,'Di tempat ',0,1);
			$this->Cell(0,5,'  ',0,1);
			$this->Cell(0,5,'Dengan hormat, ',0,1);
			$this->Cell(0,5,'Sehubungan dengan diadakanya Software Freedom Day, kami atas nama pengurus Dinus Open ',0,1);
			$this->Cell(0,5,'Source Community (DOSCOM) bermaksud untuk memohon izin untuk meminjam ruangan ',0,1);
			$this->Cell(0,5,'laboratorium komputer di gedung D lantai 3, pada :',0,1);
			$this->Cell(0,5,'  ',0,1);
			$this->Cell(0,5,'          Hari/Tanggal   : Minggu, 19 November 2017 ',0,1);
			$this->Cell(0,5,'          Waktu              : 06.00 - 13.00			',0,1);
			$this->Cell(0,5,'          Tempat            : D.5.2			',0,1);
			$this->Cell(0,5,'          Contact Person	: (data base nama yg mesan)',0,1);
			$this->Cell(0,5,'  ',0,1);
			$this->Cell(0,5,'Demikian surat permohonan ini kami sampaikan, atas perhatian dan bantuannya kami ucapkan terima kasih. ',0,1);
			$this->Cell(0,20,'  ',0,1);
			$this->Cell(150);
			$this->Cell(0,5,'  Ketua DOSCOM			',0,1);

			$this->Cell(0,25,'  ',0,1);
			$this->Cell(150);
			$this->Cell(0,5,'       Ahmad Basir',0,1);
			$this->Cell(150);
			$this->Cell(0,5,'NIM :A11.2015.09101',0,1);

	}

	//Page footer
	function Footer()
	{
		//atur posisi 1.5 cm dari bawah
		$this->SetY(-15);
		//buat garis horizontal
		$this->Line(10,$this->GetY(),200,$this->GetY());
		//Arial italic 9
		$this->SetFont('Arial','I',9);
		//nomor halaman
		$this->Cell(0,10,'Halaman '.$this->PageNo().' dari {nb}',0,0,'R');
	}
}

//contoh pemanggilan class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content();
$pdf->Output();
?>
