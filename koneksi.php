<?php
    // koneksi ke mysql/ mariadb
    $servername="localhost";
    $username="root";
    $password="";
    $database="angkel";

    //jembatan pengkoneksian ke mysql/ mariadb
    $db = mysqli_connect($servername,$username,$password,$database);

    if(!$db){
        die("gagal terhubung ke database : " .mysqli_connect_error());
    }
?>