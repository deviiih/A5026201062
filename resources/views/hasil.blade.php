<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hasil Lalu Lintas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">
  <style>
      .jumbotron{
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-family: 'Ubuntu', sans-serif;
            font-size: 55px;
      }
      p{
            font-size: 28pxs;
        }
    </style>
</head>
<body>
    <div class ="container">
        <center>
        <div class = "jumbotron">
            <h1>Hasil perkiraan</h1>
        </div></center>
        <div class="alert alert-success">
        <div class="d-flex flex-column">
            <div class="p-1">
                <p>Angka yang kamu masukan : <?php print $_GET["username"];
                ?> </p>
            </div>
            <div class="p-1">
                    <?php
                     $angkabaru = $_GET["username"];
                     if ($angkabaru == 1) {
                         echo "Warna Lampu Lalu Lintas selanjutnya adalah hijau";
                     }
                     else if ($angkabaru == 2) {
                         echo "Warna Lampu Lalu Lintas selanjutnya adalah kuning";
                     }
                     else if ($angkabaru == 3) {
                         echo "Warna Lampu Lalu Lintas selanjutnya adalah merah";
                     }
                     else {
                         echo "Warna tidak valid";
                     }
                    ?>
            </div>
        </div>
        </div>
    </div>


</body>
