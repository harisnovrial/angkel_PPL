<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $id = $_POST['nrp'];
        $nama = $_POST['nama'];
        $telepon = $_POST['telepon'];
        $password = md5($_POST['password']);
        $no_angkutan = $_POST['no_angkutan'];

        $sql = "INSERT INTO sopir (NRP,nama,no_telepon,password,no_angkutan) VALUES('$id','$nama','$telepon',
                '$password','$no_angkutan')";
        $query = mysqli_query($db,$sql);

        if($query){
            header('location: pageAdmin.php?status=berhasil');
        }else{
            echo "gagal";
        }
    }
?>