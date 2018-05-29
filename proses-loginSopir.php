<?php
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $loginSopir = mysqli_query($db,"SELECT * FROM sopir WHERE id_supir='$username' and password='$password'");

    if(mysqli_num_rows($loginSopir)>0){
        $rowSopir = mysqli_fetch_array($loginSopir);
        session_start();
        $_SESSION['id']= $username;
        $_SESSION['nama_sopir'] = $rowSopir['nama'];
        header('location:pageSopir.php');
    }else{
        header('location:masukUser.php');
    }

?>