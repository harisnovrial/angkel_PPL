<?php
    include 'koneksi.php';
    if(!$_GET['nrp']){
        header('location: pageUser.php');
    }
    $nrp = $_GET['nrp'];

    // $sql = "SELECT * FROM pegawai WHERE NRP= '$nrp'";
    // $query = mysqli_query($db,$sql);
    // $reset = mysqli_fetch_assoc($query);

    // if(mysqli_num_rows($query)<1){
    //     die("data tidak ditemukan...");
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing Password</title>
</head>
<body>
    <form action="proses-reset.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $nrp;?>">
        <label for="password_lama">Masukkan Password lama</label>
        <br>
        <input type="password" name="password_lama">
        <br>
        <br>
        <label for="password_baru">Masukkan Password baru</label>
        <br>
        <input type="password" name="password_baru">
        <br>
        <br>
        <label for="konfirmasi_password">Masukkan Kembali Password baru</label>
        <br>
        <input type="password" name="konfirmasi_password">
        <br>
        <br>
        <input type="submit" name="submit" value="kirim">
    </form>
</body>
</html>