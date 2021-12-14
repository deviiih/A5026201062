<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <style>
        body {
          margin: 0;
        }

        /* Style the header */
        .header {
          background-color: #F9E4C8;
          padding: 20px;
        }
        /* Style the footer */
        .footer {
          background-color: #F9E4C8;
          padding: 10px;
          text-align: center;
        }
        .container {
            background-color: #FAEEE0;
        }
    </style>
</head>

<body>
    <div class="container">
    <div class="header">
        <div class="row">
            <div class="col-sm-1" align="center">
                <img src="https://media-exp1.licdn.com/dms/image/C5603AQF849ZcaPmZig/profile-displayphoto-shrink_400_400/0/1632045045560?e=1644451200&v=beta&t=58Bu9uV0lFMzMAhMvK6uWtpjH8rpNP3JhyIPwkdnURc" height="75" width="75">
            </div>
            <div class="col-sm-11">
                <p>5026201062 <br> Ni Putu Septiary Devi Saraswati </p>
            </div>
      </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h1> Menu </h1>
                <a href="/pegawai"> Pegawai </a><br>
                <a href="/absen"> Absen </a><br>
                <a href="/mutasi"> Mutasi </a><br>
                <a href=""> Praktikum </a><br>
            </div>
            <div class="col-sm-9">
                @section('konten')
                @show
            </div>
        </div>
    </div>

    <div class="container">
    <div class="footer">
        <p>Hak Cipta</p>
        <p>5026201062 - Ni Putu Septiary Devi Saraswati</p>
      </div>
    </div>
</body>


</html>

