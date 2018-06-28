<?php
include('koneksi.php');
    if(isset($_POST['submit'])){
        $id_pemesanan = $_POST['id_pemesanan'];
        $nrp_sopir = $_POST['nrp_sopir'];
        $nama_pemesan = $_POST['nama_pemesan'];
        $lokasi_antar = $_POST['lokasi_antar'];
        $tanggal = $_POST['tanggal'];
        $tanggal = date('Y-m-d',strtotime($tanggal));
        $jenis_kendaraan = $_POST['jenis_kendaraan'];
        $jumlah_kendaraan = $_POST['jumlah_kendaraan'];
        $cp = $_POST['cp'];
        $status = $_POST['status'];

        $sqlProses = "INSERT INTO pesanan_angkutan(id_pemesanan,nrp_sopir,nama_pemesan,tujuan,tanggal,jenis_kendaraan,jumlah_kendaraan,cp,status) 
        VALUES('$id_pemesanan','$nrp_sopir','$nama_pemesan','$lokasi_antar','$tanggal','$jenis_kendaraan','$jumlah_kendaraan','$cp','$status')";
        $query = mysqli_query($db,$sqlProses);

        if($query){
            header('location: pageAdmin.php');
        }else{
            header('location: pageAdmin.php?status=gagal');
        }


    }
?>