<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <style>
        .jumbotron {
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-family: 'Ubuntu', sans-serif;
            font-size: 55px;
        }

        .tombol {
            background-color: #ff1a1a;
            border: none;
            text-align: center;
            color: white;
            padding: 5px 22px;
            font-family: 'Inconsolata', monospace;
            font-size: 19px;
        }

        .tombol2 {
            background-color: #40ff00;
            border: none;
            text-align: center;
            color: white;
            padding: 5px 22px;
            font-family: 'Inconsolata', monospace;
            font-size: 19px;
        }
        .angka2{
            font-family: 'Crimson Text', serif;
            font-size: 28px;
        }
        p{
            font-size: 28pxs;
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
    <div class="container my-3">
        <form action="hasil" method="get" id="regisform" name="form">
            @csrf
            <div class="row">
                <div class="col-sm-5">
                    <label for="usr" class="angka2">Masukkan angka yang diinginkan</label>
                </div>
                <div class="col-sm-2">
                    <p>:</p>
                </div>
                <div class="col-sm-4">
                    <input type="number" class="form-control" id="angka" name="username" min="0" max="9" required>
                </div>
            </div>
            <br><br>
            <center>
                <button class="tombol2" type="submit" value="Submit">Submit</button>
                <button class="tombol" type="reset" value="Reset">Reset</button>
            </center>
        </form>
    </div>

</body>

</html>
