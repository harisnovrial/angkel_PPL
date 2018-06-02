<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $id_kerusakan = $_POST['id_kerusakan'];
        $id_sopir = $_POST['id_sopir'];
        $angkutan = $_POST['angkutan'];
        $keterangan = $_POST['keterangan'];
        $tanggal = $_POST['tanggal'];
        $tanggal = date('Y-m-d',strtotime($tanggal));
        

        $sql = "UPDATE kerusakan SET no_angkutan ='$angkutan',keterangan='$keterangan',tanggal='$tanggal',
                WHERE id_kerusakan='$id_kerusakan' AND NRP_sopir='$id_sopir'";
        $query = mysqli_query($db,$sql);

        if($query){
            header('location: pageSopir.php');
        }else{
            die('Gagal menyimpan perubahan...');
        }
    }

?>