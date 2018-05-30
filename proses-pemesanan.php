<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $nrp= $_POST['nrp'];
        $namaPemesan = $_POST['namaPemesan'];
        $tanggal = $_POST['tanggal'];
        $tanggal = date('Y-m-d',strtotime($tanggal));
        $lokjemput = $_POST['lokJemput'];
        $lokantar = $_POST['lokAntar'];
        $jumpenum = $_POST['jumPenum'];
        $ket= $_POST['ket'];

        //membuat sql nya
        $sql = "INSERT INTO pemesanan(nama_pemesan,NRP_pegawai,tanggal,lokasi_jemput,lokasi_antar,jumlah_penumpang,keterangan) VALUES('$namaPemesan','$nrp','$tanggal','$lokjemput','$lokantar','$jumpenum','$ket')";
        $pemesanan = mysqli_query($db,$sql);

        if($pemesanan){
            header('location:pageUser.php?status=berhasil');
        }else{
            header('location:pageUser.php?status=gagal');
        }
    }


?>