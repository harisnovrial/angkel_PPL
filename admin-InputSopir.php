<?php
    include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Sopir</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="css/pageAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>
<body>
    <div class="row">
    <div class="sidenav sidenav-fixed" id="navside">
        <ul class="text-white">
            <li>
                <div class="user-view">
                <div class="background" style="margin-top:-20px;">
                    <img src="aset/gal3.jpg">
                </div>
                <a href="#user"><img class="circle" src="aset/pprofil.jpg"></a>
                <a href="#name"><span class="white-text name">Admin</span></a>
                <a href="#email"><span class="white-text email">admin</span></a>
                </div>
            </li>
            <li class="tab"><a class="waves-effect active" href="pageAdmin.php">Dashboard</a></li>
            <li class="tab"><a class="waves-effect" href="admin-InputAng.php">Input Data Anggota</a></li>
            <li class="tab"><a class="waves-effect" href="admin-InputSopir.php">Input Data Sopir</a></li>
            <li><div class="divider"></div></li>
            <li class="tab"><a class="waves-effect" href="admin-KonfirmAngkutan.php"><span class="new badge"><?php
                $sqlNotifAngkutan = "SELECT * FROM pemesanan";
                $queryNotifAngkutan = mysqli_query($db,$sqlNotifAngkutan);
                $notifAngkutan = mysqli_num_rows($queryNotifAngkutan);
                echo $notifAngkutan;
            ?>
            </span>Konfirmasi Angkutan</a></li>
            <li class="tab"><a class="waves-effect" href="admin-KonfirmBengkel.php"><span class= "new badge">
            <?php
                 $sqlNotifBengkel = "SELECT * FROM kerusakan";
                 $queryNotifBengkel = mysqli_query($db,$sqlNotifBengkel);
                 $notifBengkel = mysqli_num_rows($queryNotifBengkel);
                 echo $notifBengkel;
            ?></span>Konfirmasi Bengkel</a></li>
            <li><div class="divider"></div></li>
            <li class="tab"><a class="waves-effect" href="logout.php">Logout</a></li>
        </ul>
    </div>
    
    <div class="col s12 m8 l9" id="content">
        <h3>Input Data Sopir</h3>
        <div class="row">
            <form method="POST" action="proses-InputSopir.php" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <label for="username">NRP/NIP</label>
                        <input type="text" name="nrp" class="validate" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="username">Nama</label>
                        <input type="text" name="nama" class="validate" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="telepon">No.Telepon</label>
                        <input type="text" name="telepon" class="validate" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="validate" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="no_angkutan">No.Angkutan</label>
                        <input type="text" name="no_angkutan" class="validate" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <a class="waves-effect waves-light btn orange"><input type="submit" value="submit" name="submit"></a>
                    </div>
                </div>
            </form>
            </div>
    </div>
    </div>
</body>
</html>

<script>
 $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  $(document).ready(function(){
    $('.tabs').tabs();
  });

</script>