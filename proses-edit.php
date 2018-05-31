<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $nrp = $_POST['nrp'];
        $nama_pemesan = $_POST['namaPemesan'];
        $tanggal = $_POST['tanggal'];
        $tanggal = date('Y-m-d',strtotime($tanggal));
        $lokJemput = $_POST['lokJemput'];
        $lokAntar = $_POST['lokAntar'];
        $jenis = $_POST['jenis'];
        $jumKend = $_POST['jumKend'];
        $keterangan = $_POST['ket'];
        $cp = $_POST['CP'];
        $status ='Belum diproses';


        $sql = "UPDATE pemesanan SET nama_pemesan ='$nama_pemesan',tanggal='$tanggal',lokasi_jemput='$lokJemput',lokasi_antar='$lokAntar',jenis_kendaraan='$jenis',jumlah_kendaraan='$jumKend',keterangan='$keterangan',cp='$cp',status='$status' WHERE id_pemesanan='$id' and NRP_Pegawai ='$nrp'";
        $query = mysqli_query($db,$sql);

        if($query){
            header('location: pageUser.php');
        }else{
            die('Gagal menyimpan perubahan...');
        }
    }

?>