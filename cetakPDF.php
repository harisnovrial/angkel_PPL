<?php
// define('FPDF_FONTPATH','fpdf17/font/');
require('fpdf2/fpdf17/fpdf.php');

class PDF extends FPDF
{
	//Page header
	function Header()
	{
		//Logo
		$this->Image('fpdf2/c.png',20,2);
		//Arial bold 15
		$this->SetFont('Arial','B',15);
		$this->Image('fpdf2/aa.png',20,30);
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
			$this->Cell(0,10,date('l,d-m-Y'),0,1);
			include 'koneksi.php';
			if(!$_GET['id']){
				header('location: pageUser.php');
			}
			$id_pemesanan = $_GET['id'];
			$pemesanan = mysqli_query($db, "select * from pemesanan where id_pemesanan = $id_pemesanan");
			$test = mysqli_fetch_array($pemesanan);	
			$this->Cell(30,5,'No. Surat     :           /Peminjaman/AKPOL.09.02/Angkutan/XI/2018 ',0,0);
			$this->Cell(-5);
			$this->Cell(20,5,$test['id_pemesanan'],0,1);
			
			$this->Cell(0,5,'Hal              : Peminjaman Angkutan		',0,1);
			$this->Cell(0,5,' ',0,1);
			$this->Cell(0,5,'Kepada ',0,1);
			$this->Cell(0,5,'Kepala TU Akademi Kepolisian			',0,1);
			$this->Cell(0,5,'Akademi Kepolisian			',0,1);
			$this->Cell(0,5,'Di tempat ',0,1);
			$this->Cell(0,5,'  ',0,1);
			$this->Cell(0,5,'Dengan hormat, ',0,1);
			$this->Cell(0,5,'Sehubungan dengan diadakanya kegiatan di lingkungan akademi kepolisian, kami atas nama penyelenggara',0,1);
			$this->Cell(0,5,'kegiatan, bermaksud untuk memohon izin untuk meminjam angkutan pada : ',0,1);
			// $this->Cell(0,5,'pada :',0,1);
			$this->Cell(0,5,'  ',0,1);
			
			// $this->Cell(0,5,'          Hari/Tanggal   : Minggu, 19 November 2017 ',0,1);
			include 'koneksi.php';
			if(!$_GET['id']){
				header('location: pageUser.php');
			}
			$id_pemesanan = $_GET['id'];
			$pemesanan = mysqli_query($db, "select * from pemesanan where id_pemesanan = $id_pemesanan");
			$test = mysqli_fetch_array($pemesanan);	
			$this->Cell(30,8,'          Tanggal                   :',0,0);
			$this->Cell(20);
			$this->Cell(30,8,$test['tanggal'],0,1);
			$this->Cell(30,8,'          Lokasi Jemput         :',0,0);
			$this->Cell(20);
			$this->Cell(30,8,$test['lokasi_jemput'],0,1);
			$this->Cell(30,8,'          Lokasi Antar           :',0,0);
			$this->Cell(20);
			$this->Cell(30,8,$test['lokasi_antar'],0,1);
			$this->Cell(30,8,'          Jenis Kendaraan      :',0,0);
			$this->Cell(20);
			$this->Cell(30,8,$test['jenis_kendaraan'],0,1);
			$this->Cell(30,8,'          Pemesan                  :',0,0);
			$this->Cell(20);
			$this->Cell(30,8,$test['nama_pemesan'],0,1);
			$this->Cell(30,8,'          Contact Person        :',0,0);
			$this->Cell(20);
			$this->Cell(30,8,$test['cp'],0,1);
			// $this->Cell(0,5,'          Waktu              : 06.00 - 13.00			',0,1);
			// $this->Cell(0,5,'          Tempat            : D.5.2			',0,1);
			// $this->Cell(0,5,'          Contact Person	: (data base nama yg mesan)',0,1);
			$this->Cell(0,5,'  ',0,1);
			$this->Cell(0,5,'Demikian surat permohonan ini kami sampaikan, atas perhatian dan bantuannya kami ucapkan terima kasih. ',0,1);
			$this->Cell(0,20,'  ',0,1);
			$this->Cell(153);
			$this->Cell(0,5,'  Ketua SIAK	  ',0,1);

			$this->Cell(0,25,'  ',0,1);
			$this->Cell(148);
			$this->Cell(0,5,'       Hermansyah ',0,1);
			$this->Cell(148);
			$this->Cell(0,5,'NPP : 011.1999.09101',0,1);

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
