<?php
    include 'koneksi.php';
    session_start();
    $id = $_SESSION['nrp'];
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
        <li><?php echo'<a href="pageRusak.php?id='.$id.'" class="waves-effect">';?>Input Kerusakan</a></li>
        <li><a href="lihatJadwal.php" class="waves-effect">Lihat Jadwal</a></li>
        <li><?php echo '<a href="page-gantiPasswordSopir.php?id='.$id.'" class="waves-effect">'?>Ganti Password</a></li>
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
                    <th>Status</th>
                    <th>Aksi</th>                
                </tr>
            </thead>

            <tbody>
                <?php
                    $no = 1; 
                    $sql = "SELECT * FROM kerusakan WHERE NRP_sopir = $id";
                    $query = mysqli_query($db,$sql);

                    while($row_kerusakan= mysqli_fetch_array($query)){
                        echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$row_kerusakan['no_angkutan'].'</td>';
                        echo '<td>'.$row_kerusakan['kerusakan'].'</td>';
                        echo '<td>'.$row_kerusakan['tanggal'].'</td>';
                        echo '<td>'.$row_kerusakan['status'].'</td>';
                        echo '<td>';
                        echo '<a href="form-editKerusakan.php?id='.$row_kerusakan['id_kerusakan'].'">Edit |</a>';
                        echo '<a href="deleteKerusakan.php?id='.$row_kerusakan['id_kerusakan'].'"> Hapus |</a>';
                        echo '<a href="cetakKerusakan.php?id='.$row_kerusakan['file'].'"> Cetak</a>';
                        echo'</td>';
                        echo'</tr>';
                        $no++;
                    }
                ?>
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