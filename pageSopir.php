<?php
    include 'koneksi.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="css/pageUser.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
    <nav>
        <div class="nav-wrapper container">
            <ul id="navuser" class="left">
                <a href="#" data-activates="slide-out" class="muncul"><i class="material-icons">menu</i></a>
            </ul>
        </div>
    </nav>
    <ul id="slide-out" class="side-nav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="images/office.jpg">
                </div>
            <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
            <a href="#name"><span class="black-text name"><?php echo $_SESSION['nama_sopir'];?></span></a>
            <!-- <a href="#email"><span class="black-text email">jdandturk@gmail.com</span></a> -->
            </div>
        </li>
        <li><a href="pageRusak.php" class="waves-effect">Input Kerusakan</a></li>
        <li><a href="#!" class="waves-effect">Lihat Jadwal</a></li>
        <li><a href="#!" class="waves-effect">Ganti Password</a></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="logout.php">Logout</a></li>
    </ul>

    <div class="container">
        <h3>Selamat datang, <?php echo $_SESSION['nama_sopir'];?></h3>
        <br>
        <h5>History Kerusakan</h5>
        <table>
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>No. Angkutan</th>
                    <th>Kerusakan</th>
                    <th>Tanggal</th>                
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <br>
        <h5>Trip Record</h5>
        <p>pake chart.js</p>
    </div>
</body>
</html>

<script>
 $(".muncul").sideNav();

</script>