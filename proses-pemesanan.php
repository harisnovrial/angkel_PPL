<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $nrp= $_POST['nrp'];
        $namaPemesan = $_POST['namaPemesan'];
        $tanggal = $_POST['tanggal'];
        $tanggal = date('Y-m-d',strtotime($tanggal));
        $lokjemput = $_POST['lokJemput'];
        $lokantar = $_POST['lokAntar'];
        $jenis= $_POST['jenis'];
        $jumKend= $_POST['jumKend'];
        $ket= $_POST['ket']; 
        $CP= $_POST['CP'];
        $status= 'Belum diproses';

        //membuat sql nya
        $sql = "INSERT INTO pemesanan(nama_pemesan,NRP_pegawai,tanggal,lokasi_jemput,lokasi_antar,jenis_kendaraan,jumlah_kendaraan,keterangan,cp,status) 
                VALUES('$namaPemesan','$nrp','$tanggal','$lokjemput','$lokantar','$jenis','$jumKend','$ket','$CP','$status')";
        $pemesanan = mysqli_query($db,$sql);

        if($pemesanan){
            header('location:pageUser.php?status=berhasil');
        }else{
            header('location:pageUser.php?status=gagal');
        }
    }


?>