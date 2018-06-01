<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $nrp = $_POST['nrp'];
        $passwordBaru = $_POST['passBaru'];
        $konfirmasi = $_POST['konfirmasi'];
        // cek apakah password baru yang dimasukkan == konfirmasi password yang dimasukkan
        if($passwordBaru == $konfirmasi){
            $passwordBaru = md5($passwordBaru);
            $sql = "UPDATE pegawai SET password = '$passwordBaru' WHERE NRP = '$nrp'";
            $query = msyqli_query($db,$sql);
            // cek apakah berhasil
            if($query){
                header('location : masukUser.php?status=berhasil');
            }else{
                header('location : masukUser.php?status=gagal');
            }
        }else{
            echo "Password baru tidak sama dengan konfirmasi password";
        }
    }

?>