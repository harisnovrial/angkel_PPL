<?php
    include "koneksi.php";
        if(isset($_POST['id'])){
            $nrp = $_POST['id'];
        }
        $password_lama = $_POST['password_lama'];
        $password_baru = $_POST['password_baru'];
        $konfirmasi_password = $_POST['konfirmasi_password'];

        $password_lama = md5($password_lama);
        $cek = mysqli_query($db,"SELECT password FROM sopir WHERE password='$password_lama'");
        
        if(mysqli_num_rows($cek)>0){
            if($password_baru == $konfirmasi_password){
                $password_baru = md5($password_baru);
                // $NRP = $_SESSION['nrp'];
                $update = mysqli_query($db,"UPDATE sopir SET password ='$password_baru' WHERE NRP ='$nrp'");
                if($update){
                    header('location: masukUser.php');
                }else{
                    echo 'Gagal merubah password';
                }
            }else{
                echo 'Konfirmasi password tidak cocok...';
            }
        }else{
            echo 'password lama tidak cocok';
        }
?>