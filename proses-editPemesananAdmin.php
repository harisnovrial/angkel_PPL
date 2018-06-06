<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $nrp = $_POST['nrp'];
        $nama_pemesan = $_POST['namaPemesan'];
        $tanggal = $_POST['tanggal'];
        $tanggal = date('Y-m-d',strtotime($tanggal));
        $lokAntar = $_POST['lokAntar'];
        $jenis = $_POST['jenis'];
        $jumKend = $_POST['jumKend'];
        $cp = $_POST['CP'];
        $status = $_POST['status'];


        $sql = "UPDATE pemesanan SET nama_pemesan ='$nama_pemesan',tanggal='$tanggal',lokasi_antar='$lokAntar',jenis_kendaraan='$jenis',jumlah_kendaraan='$jumKend',cp='$cp',status='$status' WHERE id_pemesanan='$id' and NRP_Pegawai ='$nrp'";
        $query = mysqli_query($db,$sql);

        if($query){
            header('location: pageAdmin.php');
        }else{
            die('Gagal menyimpan perubahan...');
        }
    }

?>