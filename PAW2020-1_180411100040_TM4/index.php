<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS MINGGUAN 3</title>
    <!--link css -->
    <link rel="stylesheet" type="text/css" href="style1.css">
    <style>
        body {

            background-image: linear-gradient(tomato, teal, red);
        }

        .container {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 18px;
            padding: 20px 20px;
            margin: 30px;
        }

        .footer .container {
            margin-top: 100px;
            font-size: 20px;
            background-color: #279182;
        }

        img {
            border: 5px solid black;
            width: 150px;
            height: 200px;
        }

        table {
            background-color: whitesmoke;
            margin: auto;
            border: 3px solid black;
            padding: 20px;
        }

        .leftcolor {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .subjudul {
            color: white;
            font-size: 18px;
            background-color: black;
            width: 200px;
            text-align: left;
            border-top: solid;
            border-color: teal;
            border-width: 8px;
        }

        .submit {
            background-color: cornflowerblue;
        }

        .reset {
            background-color: crimson;
        }

        .nav {
            text-align: center;
            padding: 10px;

        }

        .nav a {
            background-color: teal;
            border: 1px solid whitesmoke;
            color: whitesmoke;
            text-decoration: none;
            margin: 20px;
            padding: 5px;
        }

        .nav a:hover {
            background-color: whitesmoke;
            border: 1px solid teal;
            color: teal;
        }

        input {
            margin-top: 5px;

        }
    </style>
</head>


<body>
    <div class="container">
        <table>
            <tr>
                <td rowspan="7" class="leftcolor"><img src="images/rio.png" alt="foto"></td>
                <th colspan="3"></th>
            </tr>
            <tr>
                <th class="subjudul" colspan="3">DATA PRIBADI</th>

            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>Rio Erfian</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>180411100040</td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>Teknik Informatika</td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td>:</td>
                <td>Teknik</td>
            </tr>
            <tr>
                <td>Universitas</td>
                <td>:</td>
                <td>Universitas Trunojoyo Madura</td>
            </tr>
            <tr>
                <th colspan="4" class="subjudul">&nbsp;</th>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="nav">
                        <a href="login.php">&emsp;LOGIN&emsp;</a><a href="private1.php">&emsp;Detail v1&emsp;</a><a href="private2.php">&emsp;Detail v2&emsp;</a>
                    </div>
                </td>
            </tr>
            <tr>
                <th colspan="4" class="subjudul">LOGIN</th>
            </tr>
            <tr>
                <td><input type="text" name="username" id="username" placeholder="username"></td>
                <td rowspan="2" colspan="3">username dan password salah !</td>
            </tr>
            <tr>
                <td colspan="2"><input type="password" name="password" id="password" placeholder="*********"></td>
            </tr>
            <tr>
                <td colspan="4"><input type="button" value="submit" class="submit"><input type="button" value="reset" class="reset"></td>
            </tr>

        </table>
    </div>

    <div class="footer">
        <div class="container">
            @ 180411100040 - RIO ERFIAN
        </div>
    </div>


</body>

</html>