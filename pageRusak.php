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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <h3>Kerusakan Angkutan</h3>
        <form action="" method="post" class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <label for="noAng">No. Angkutan</label>
                    <input type="text" name="noAng" required>
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
                    <textarea name="noAng" type="text" class="materialize-textarea"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="file-field input-field">
                    <div class="btn">
                    <span>File</span>
                    <input type="file">
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