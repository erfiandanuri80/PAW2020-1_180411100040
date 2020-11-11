<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS MINGGUAN 3</title>
    <!--link css -->
    <style>
        body {

            background-image: linear-gradient(teal, cyan);
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
            <?php
            if (!isset($_SESSION['username'])) {
                echo "<form action='login.php' method='POST'>";
                echo "<tr><td colspan='4'><input type='text' name='username' id='username' placeholder='username'></td></tr>";
                echo "<tr><td colspan='4'><input type='password' name='password' id='password' placeholder='*********'></td></tr>";
                echo "<tr><td colspan='4'><button type='submit' class='submit'>submit</button> <button type='reset' value='reset' class='reset'>reset</button></td></tr>";
                echo "</form>";
            } ?>
            <tr>
                <td colspan="4"><?php
                                if (isset($_COOKIE["message"])) { // Jika ada
                                    echo $_COOKIE["message"]; // Tampilkan pesannya
                                }
                                ?></td>
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