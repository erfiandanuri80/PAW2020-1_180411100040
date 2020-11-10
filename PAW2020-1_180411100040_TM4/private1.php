<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}
?>
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
                <th class="subjudul" colspan="3">DATA PRIBADI Detail v1</th>
            </tr>
            <tr>
                <td>Nama Panggilan</td>
                <td>:</td>
                <td>Rio / Refan </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>Laki-Laki</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>Jl. Sunan Giri XIII R RT03/RW03 Gang Punggawan 1A no.2 <br> Sidomukti Kebomas Gresik</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><a href="mailto:erfianrio30@gmail.com">erfianrio30@gmail.com</a><br>
                    <a href="mailto:180411100040@student.trunojoyo.ac.id">180411100040@student.trunojoyo.ac.id</a></td>
            </tr>
            <tr>
                <th colspan="3" class="subjudul">&nbsp;</th>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="nav">
                        <a href="login.php">&emsp;LOG OUT&emsp;</a><a href="logout.php">&emsp;Home&emsp;</a><a href="private2.php">&emsp;Detail v2&emsp;</a>
                    </div>
                </td>
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