<?php
    include 'koneksi.php';
    session_start();
    $nrp = $_SESSION['nrp'];
    

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
            <a href="#name"><span class="name"><?php echo $_SESSION['username'];?></span></a>
            <a href="#email"><span class="email"><?php echo $_SESSION['pangkat'];?></span></a>
            </div>
        </li>
        <li><a href="pagePesan.php" class="waves-effect">Pemesanan Angkutan</a></li>
        <li><?php echo'<a href="resetPassword.php?nrp='.$nrp.'" class="waves-effect">Ganti Password</a>';?></li>
        <li><div class="divider"></div></li>
        <li><a class="waves-effect" href="logout.php">Logout</a></li>
    </ul>

    <div class="container">
        <h3>Selamat datang, <?php echo $_SESSION['username'] ;?></h3>
        <br>
        <h5>History Pesanan</h5>
        <table>
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Lokasi Awal</th>
                    <th>Tujuan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>               
                </tr>
            </thead>

            <tbody>
                <?php
                    $no =1;
                    $nrp = $_SESSION['nrp'];
                    $sql= "SELECT id_pemesanan,lokasi_jemput,lokasi_antar,tanggal,status FROM pemesanan WHERE NRP_Pegawai ='$nrp'";
                    $query= mysqli_query($db,$sql);

                    while($tabel_pesan= mysqli_fetch_array($query)){
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$tabel_pesan['lokasi_jemput'].'</td>';
                        echo '<td>'.$tabel_pesan['lokasi_antar'].'</td>';
                        echo '<td>'.$tabel_pesan['tanggal'].'</td>';
                        echo '<td>'.$tabel_pesan['status'].'</td>';
                        echo '<td>';
                        echo '<a href="form-edit.php?id='.$tabel_pesan['id_pemesanan'].'">Edit |</a>';
                        echo '<a href="delete.php?id='.$tabel_pesan['id_pemesanan'].'"> Hapus |</a>';
                        echo '<a href="cetakPDF.php?id='.$tabel_pesan['id_pemesanan'].'"> Cetak</a>';
                        echo'</td>';
                        echo'</tr>';
                        $no++;
                    }
                ?>
        
            </tbody>
        </table>
    </div>
</body>
</html>

<script>
 $(".muncul").sideNav();

</script>