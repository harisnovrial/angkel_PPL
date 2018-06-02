<?php
    include 'koneksi.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql= "DELETE FROM pemesanan WHERE id_kerusakan = '$id'";
        $query = mysqli_query($db,$sql);

        if($query){
            header('location: pageSopir.php');
        }else{
            die('gagal menghapus...');
        }
    }
?>