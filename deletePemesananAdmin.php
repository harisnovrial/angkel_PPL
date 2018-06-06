<?php
    include 'koneksi.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql= "DELETE FROM pemesanan WHERE id_pemesanan = '$id'";
        $query = mysqli_query($db,$sql);

        if($query){
            header('location: pageAdmin.php');
        }else{
            die('gagal menghapus...');
        }
    }
?>