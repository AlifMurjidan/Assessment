<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }
	function index()
	{
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'LIST DATA SISWA',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(40,6,'Nama',1,0,'C');
        $pdf->Cell(40,6,'Jenis Kelamin',1,0,'C');
        $pdf->Cell(60,6,'Alamat',1,0,'C');
        $pdf->Cell(20,6,'Agama',1,0,'C');
        $pdf->Cell(30,6,'No Hp',1,0,'C');
        $pdf->Cell(40,6,'Email',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $siswa = $this->db->get('mahasiswa')->result();
        $no=0;
        foreach ($siswa as $data){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(40,6,$data->Nama,1,0);
            $pdf->Cell(40,6,$data->JenisKelamin,1,0);
            $pdf->Cell(60,6,$data->Alamat,1,0);
            $pdf->Cell(20,6,$data->Agama,1,0);
            $pdf->Cell(30,6,$data->NoHp,1,0);
            $pdf->Cell(40,6,$data->Email,1,1);
        }
        $pdf->Output();
	}
}