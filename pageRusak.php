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
    <title>Kerusakan</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="css/pageRusak.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <h3>Kerusakan Angkutan</h3>
        <form action="proses-kerusakan.php" method="post" class="col s12" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $_SESSION['nrp'];?>">
            <div class="row">
                <div class="input-field col s12">
                    <label for="angkutan">No. Angkutan</label>
                    <input type="text" name="angkutan" value="<?php echo $_SESSION['no_angkutan'];?>"  required>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <label for="rusak">Kerusakan</label>
                    <input type="text" name="rusak" required>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <label for="ket">Keterangan</label>
                    <textarea name="ket" type="text" class="materialize-textarea"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <label for="tanggal">Tanggal</label>
                    <input id="tanggal" type="text" class="datepicker" name="tanggal" required>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field">
                    <div class="btn">
                    <span>File</span>
                    <input type="file" name="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path-validate" type="text">
                    </div>
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