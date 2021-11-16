<html lang="eng">

<head>
    <title>Input Barang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/form-validation.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <script>
        $(document).ready(function () {
            $("#myForm").validate({
                rules: {
                    namabarang: {
                        required: true,
                        minlength: 10,
                    },
                    harga: {
                        required: true,
                        number: true,
                        min: 5000,
                    },
                    jenis: {
                        required: true,
                    },
                    kode: {
                        required: true,
                        number: true,
                        minlength: 10,
                    }
                },
                messages: {
                    namabarang: {
                        minlength: "Nama Barang minimal 10 karakter"
                    },
                    harga: {
                        min: "Minimal harga 5000"
                    },
                    kode: {
                        minlength: "minimal kode 10 angka"
                    }
                }
            });
        });
    </script>
    <style>
        input {
            width: 100%;
        }

        select {
            width: 100%;
        }

        h1 {
            text-align: center;
        }

        div {
            font-size: medium;
            font-family: 'Montserrat', sans-serif;
            font-weight: 1000;
        }
    </style>
</head>

<body>
    <div id="perkenalan">
        <p>Ni Putu Septiary Devi Saraswati</p>
        <p>Devi</p>
        <p>5026201062</p>
    </div>
    <div class="container p-3 my-3 border">
        <form name="myForm" action="" method="post">
            <h1>Form Input Data Barang</h1>
            <label for="namabarang">Nama Barang</label><br>
            <input type="text" id="namabarang" name="namabarang" required minlength="10"><br><br>
            <label for="harga">Harga</label><br>
            <input id="harga" name="harga" required pattern="[0-9]{}" min="5000"><br><br>
            <label for="jenis">Jenis Barang</label><br>
            <select id="jenis" required>
                <option selected disabled></option>
                <option value="makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
                <option value="nonmamin">Non mamin</option>
            </select> <br><br>
            <label for="Kode">Kode Barang</label><br>
            <input type="text" id="Kode" name="Kode" required pattern="[0-9]{}" minlength="10"><br><br>
            <div class="topnav-centered">
                <center>
                    <input type="submit" value="Kirim" style="width: fit-content; font-weight: bold;">
                    <input type="reset" value="Reset" style="width: fit-content; font-weight: bold;">
                </center>
            </div>

        </form>
    </div>
</body>

</html>
