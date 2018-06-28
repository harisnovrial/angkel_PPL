<?php
    include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            ?></span>Konfirmasi Angkutan</a></li>
            <li class="tab"><a class="waves-effect" href="admin-KonfirmBengkel.php"><span class="new badge"><?php
                $sqlNotifBengkel = "SELECT * FROM kerusakan";
                $queryNotifBengkel = mysqli_query($db,$sqlNotifBengkel);
                $notifBengkel = mysqli_num_rows($queryNotifBengkel);
                echo $notifBengkel;
            ?></span>Konfirmasi Bengkel</a></li>
            <li><div class="divider"></div></li>
            <li class="tab"><a class="waves-effect" href="#!">Logout</a></li>
        </ul>
    </div>
    
    <div class="col s12 m8 l9" id="content">
        <div id="dash">
        <h3>Konfirmasi Bengkel</h3>
        <div class="row">
            <div class="col s12">
            <h4>History Bengkel</h4>
                <table class="responsive-table">
                    <thead>
                        <th>No</th>
                        <th>Sopir</th>
                        <th>No.Angkutan</th>
                        <th>Kerusakan</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                        <th>Nota</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                    <?php
                            $no = 1;
                            $sqlBengkel = "SELECT * FROM kerusakan ORDER BY tanggal ASC";
                            $queryBengkel = mysqli_query($db,$sqlBengkel);
                            $notifBengkel = mysqli_num_rows($queryBengkel);
                            while($rowRusak = mysqli_fetch_array($queryBengkel)){
                                echo "<tr>";
                                echo "<td>".$no."</td>";
                                echo "<td>".$rowRusak['NRP_sopir']."</td>";
                                echo "<td>".$rowRusak['no_angkutan']."</td>";
                                echo "<td>".$rowRusak['kerusakan']."</td>";
                                echo "<td>".$rowRusak['status']."</td>";
                                echo "<td>".$rowRusak['tanggal']."</td>";
                                echo "<td>".$rowRusak['file']."</td>";
                                echo "<td>";
                                echo '<a href="form-editKerusakan.php?id='.$rowRusak['id_kerusakan'].'">Edit |</a>';
                                echo '<a href="deleteKerusakan.php?id='.$rowRusak['id_kerusakan'].'"> Hapus |</a>';
                                echo '<a href="file/'.$rowRusak['file'].'">Cetak</a>';
                                echo "</td>";
                                echo "</tr>";
                                $no++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    </div>
</body>
</html>

<script>
 $(document).ready(function(){
    $('.sidenav').sidenav();
  });

</script>