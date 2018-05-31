<?php
    include 'koneksi.php';
    $id_Admin = $_POST['id_Admin'];
    $password = md5($_POST['password']);

    $loginAdmin=mysqli_query($db,"SELECT * FROM admin WHERE id_admin='$id_Admin' and password='$password'");
    $cek = mysqli_num_rows($query);
    if($cek>0){
        $row_admin= mysqli_fetch_array($query);
        session_start();
        $_SESSION['id_Admin']= $id_Admin;
        $_SESSION['nama_Admin']= $row_admin['nama'];
        header('location: pageAdmin.php');
    }else{
        header('location: loginAdmin.php');
    }

?>