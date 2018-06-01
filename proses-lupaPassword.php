<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $nrp = $_POST['nrp'];
        $passwordBaru = $_POST['passBaru'];
        $konfirmasi = $_POST['konfirmasi'];
        $cek = mysqli_query($db,"SELECT NRP FROM pegawai WHERE NRP = '$nrp'");
        if(mysqli_num_rows($cek)>0){
            //cek apakah password baru yang dimasukkan == konfirmasi password yang dimasukkan
            if($passwordBaru == $konfirmasi){
                $passwordBaru = md5($passwordBaru);
                $sql = "UPDATE pegawai SET password='$passwordBaru' WHERE NRP ='$nrp'";
                $query = mysqli_query($db,$sql);
                //cek apakah berhasil
                if($query){
                    header('location: masukUser.php?status=berhasil');
                }else{
                    header('location: masukUser.php?status=gagal');
                }
            }else{
                echo "Password baru tidak sama dengan konfirmasi password";
            }
        }else{
            echo 'Data tidak terdapat pada database';
        }
    }

?>