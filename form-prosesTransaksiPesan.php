<?php
    include 'koneksi.php';
    if(!$_GET['id']){
        header('location: pageAdmin.php');
    }
    $id_pemesanan = $_GET['id'];

    $sql = "SELECT * FROM pemesanan WHERE id_pemesanan= '$id_pemesanan'";
    $query = mysqli_query($db,$sql);
    $edit = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query)<1){
        die("data tidak ditemukan...");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form edit Transaksi Pesanan Angkutan</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="css/formEdit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
        <form action="proses-editTransaksiPesan.php" method="POST" class="col s12">
            <input type="hidden" name="id_pemesanan" value="<?php echo $edit['id_pemesanan']; ?>">
            <br>
            <label for="id_sopir">NRP Sopir</label>
            <br>
            <select name="nrp_sopir">
                <?php 
                $sqlSopir = "SELECT NRP FROM sopir";
                $querySopir = mysqli_query($db,$sqlSopir);
                while($dataSopir= mysqli_fetch_array($querySopir)){?>
                <option>
                <?php echo $dataSopir['NRP'];?>
            </option>
                 <?php }?>
            </select>
            <br>
            <label for="username">Nama Pemesan</label>
            <br>
            <input type="text" name="nama_pemesan" value="<?php echo $edit['nama_pemesan'];?>"required>
            <br>
            <label for="username">Lokasi Antar</label>
            <br>
            <input type="text" name="lokasi_antar" value="<?php echo $edit['lokasi_antar']?>"required>
            <br>
            <label for="tanggal">Tanggal Pemesanan</label>
            <br>
            <input id="tanggal" type="text" class="datepicker" name="tanggal" value ="<?php echo $edit['tanggal'];?>"required>
            <br>
            <label for="username">Jenis Kendaraan</label>
            <br>
            <?php $jenis = $edit['jenis_kendaraan'];?>
            <select name="jenis_kendaraan">
                <option selected>Pilih Jenis Kendaraan</option>
                <option <?php echo ($jenis =='Bus Besar')? "selected":"" ?>>Bus Besar</option>
                <option <?php echo ($jenis =='Bus Kecil')? "selected":"" ?>>Bus Kecil</option>
                <option <?php echo ($jenis =='Sedan')? "selected":""?>>Sedan</option>
            </select>
            <br>
            <label for="jumKend">Jumlah Kendaraan</label>
            <br>
            <input type="text" name="jumlah_kendaraan" value ="<?php echo $edit['jumlah_kendaraan']?>"required>
            <!-- <br> -->
            <label for="cp">Contact Person</label>
            <br>
            <input type="text" id="inputcp" name="cp"  value="<?php echo $edit['cp']?>"required>
            <!-- <br> -->
            <label for="ket">Keterangan</label>
            <br>
            <textarea name="status" class="materialize-textarea"><?php echo $edit['status']?></textarea>
            <br>
            <button  type="submit" name="submit">Submit</button>
        </form>
        </div>
    </div>
    
</body>
</html>

<script>
  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>