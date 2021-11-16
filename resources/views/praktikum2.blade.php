<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        h1{
            text-align: center;
        }
        input{
            width: 100%;
        }
        select{
            width: 100%;
        }
    </style>
    <script>
        function myFunction(){
            var str = document.getElementById("fname").value;
            var patt11 = /^[a-zA-Z\s]*$/;
            if(str.match(patt11)){
                return true;
            }
            else{
                alert("Nama harus mengandung abjad bukan angka");
                fname.focus();
                return false;
            }

        }
    </script>
</head>

<body>

    <div class="container p-3 my-3 border">
        <h1>Registration Form</h1>
        <form action="/action_page.php" onsubmit="return myFunction()">
            <label for="fname">Nama :</label><br>
            <input type="text" id="fname" name="fname" required><br>
            <label for="address">Address :</label><br>
            <input type="text" id="address" name="address" required><br>
            <label for="email">Email :</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="pwd">Password:</label><br>
            <input type="password" id="pwd" name="pwd" minlength="8" maxlength="16" required><br>
            <label for="phone">Telephone :</label><br>
            <input type="tel" id="phone" name="phone" minlength="7" required><br>
            <label for="SelectCourse">Select Your Course :</label><br>
            <select>
                <option selected disabled></option>
                <option value="BTECH">BTECH</option>
                <option value="BBA">BBA</option>
                <option value="BCA">BCA</option>
                <option value="B.COM">B.COM</option>
                <option value="GREEKFORGREEKS">GEEKFORGEEKS</option>
            </select> <br>
            <label for="zipcode">Zip Code :</label><br>
            <input type="text" id="zipcode" name="zipcode" pattern="[0-9]{6}" required><br>
            <input type="submit" value="Submit" style="width: fit-content;">
            <input type="reset" value="Reset" style="width: fit-content;">
        </form>
    </div>
</body>

</html>
