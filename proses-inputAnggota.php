<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $nrp = $_POST['nrp'];
        $pangkat = $_POST['pangkat'];
        $nama = $_POST['nama'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO pegawai (NRP,pangkat,username,password) VALUES ('$nrp','$pangkat','$nama','$password')";
        $query = mysqli_query($db,$sql);

        if($query){
            header('location: pageAdmin.php?status=berhasil');
        }else{
            header('location: admin-InputAng.php?status=gagal');
        }
    }
?>