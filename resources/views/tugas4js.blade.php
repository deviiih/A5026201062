<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        jumbutron{
            text-align: center;
        }
    </style>
</head>

<body>
    <center>
    <div class="jumbotron">
        <h1>Yuk Ramalkan Warna Lampu Lalu Lintas nanti</h1>
    </div>
</center>
    <br>
    <div class="container">
        <div class="form-group">
            <label for="usr">Masukkan angka yang diinginkan</label>
            <input type="var" class="form-control" id="angka" name="username">
        </div>
        <button type="submit" class="btn btn-primary" id="tombol" onclick="stoplight()">Submit</button>

        <br>
        <p id="hasil"> </p>


        <script>
            function stoplight() {

                let baru = $("#angka").val();
                if (baru == 1) {
                    $("#hasil").text = "Warna Lampu Lalu Lintas selanjutnya adalah hijau";
                }
                else if (baru == 2) {
                    $("#hasil").text("Warna Lampu Lalu Lintas selanjutnya adalah kuning");
                }
                else if (baru == 3) {
                    $("#hasil").text("Warna Lampu Lalu Lintas selanjutnya adalah merah");
                }
                else {
                    $("#hasil").text("Warna tidak valid");
                }
            }

        </script>
    </div>
</body>

</html>
