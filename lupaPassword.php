<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Lupa Password</title>
</head>
<body>
    <form action="proses-lupaPassword.php" method="POST">
        <label for="nrp">NRP</label>
        <br>
        <input type="text" name="nrp">
        <br>
        <label for="pass-baru">Password baru</label>
        <br>
        <input type="password" name="passBaru">
        <br>
        <label for="konfirmasi">Konfirmasi password baru</label>
        <br>
        <input type="password" name="konfirmasi">
        <br>
        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>