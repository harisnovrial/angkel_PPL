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
    <title>Pemesanan</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="css/pagePesan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
    <h3>Pemesanan Angkutan</h3>
    <form action="proses-pemesanan.php" method="post" class="col s12">
        <input type="hidden" name="nrp" value="<?php echo $_SESSION['nrp'];?>">
        <div class="row">
            <div class="input-field col s12">
                <label for="username">Nama Pemesan</label>
                <input type="text" name="namaPemesan" value="<?php echo $_SESSION['username'];?>"required>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <label for="tanggal">Tanggal Pemesanan</label>
                <input id="tanggal" type="text" class="datepicker" name="tanggal" required>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <label for="username">Lokasi Jemput</label>
                <input type="text" name="lokJemput" required>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <label for="username">Lokasi Antar</label>
                <input type="text" name="lokAntar" required>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <label for="jumPenum">Jumlah Penumpang</label>
                <input type="text" name="jumPenum" required>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <label for="ket">Keterangan</label>
                <textarea name="ket" class="materialize-textarea"></textarea>
            </div>
        </div>
        <button class="btn waves-effect waves-light" id="btnSubmit" type="submit" name="submit">Submit
        <i class="material-icons right">send</i>
        </button>
    </form>
    
    </div>
</body>
</html>

<script>
 $(document).ready(function(){
    $('.datepicker').datepicker();
  });
</script>