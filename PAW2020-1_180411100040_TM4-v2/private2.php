<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS MINGGUAN 4</title>
    <!--link css -->
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
                <th class="subjudul" colspan="3">DATA PRIBADI Detail v2</th>
            </tr>
            <tr>
                <th style="text-align: left; border:2px solid teal;" colspan="3">RIWAYAT SEKOLAH DASAR-MENENGAH</th>
            </tr>
            <tr>
                <td colspan="3">
                    <ol>
                        <li>MI Ma'arif Sidomukti
                            <ul>
                                <li>Tahun Masuk : 2006</li>
                                <li>Tahun Lulus : 2012</li>
                                <li>Website: <a href="https://www.youtube.com/">www.mimaarif-sidomukti.sch.id</a>
                                </li>
                            </ul>
                        </li>

                        <li>MTs Ma'arif Sidomukti
                            <ul>
                                <li>Tahun Masuk : 2012</li>
                                <li>Tahun Lulus : 2015</li>
                                <li>Website: <a href="https://www.facebook.com/mtsmaarif.sidomukti">www.facebook.com/mtsmaarif.sidomukti</a>
                                </li>
                            </ul>
                        </li>

                        <li>SMA Nahdlatul 'Ulama 1 Gresik
                            <ul>
                                <li>Tahun Masuk : 2015</li>
                                <li>Tahun Lulus : 2018</li>
                                <li>Website: <a href="http://www.smanu1-gresik.sch.id">www.smanu1-gresik.sch.id</a></li>
                            </ul>
                        </li>
                    </ol>
                </td>
            </tr>
            <tr>
                <th style="text-align: left; border:2px solid teal;" colspan="3">RIWAYAT SEKOLAH TINGGI</th>
            </tr>
            <tr>
                <td colspan="3">
                    <ol>
                        <li>Universitas Trunojoyo Madura
                            <ul>
                                <li>Tahun Masuk : 2018</li>
                                <li>Tahun Lulus : -</li>
                                <li>Website : <a href="https://trunojoyo.ac.id/">trunojoyo.ac.id</a>
                                </li>

                            </ul>
                        </li>
                    </ol>
                </td>
            </tr>
            <tr>
                <th style="text-align: left; border:2px solid teal;" colspan="3">MATA KULIAH YANG PERNAH DIAMBIL</th>
            </tr>
            <tr>
                <td colspan="4">
                    <ol>
                        <li>2018/Ganjil UNG101 Pendidikan Agama Islam </li>
                        <li>2018/Ganjil TIK105 Bahasa Indonesia (Tata Tulis Karya Ilmiah)</li>
                        <li>2018/Ganjil TIK104 Matematika</li>
                        <li>2018/Ganjil UNG110 BAHASA INGGRIS</li>
                        <li>2018/Ganjil TIK102 Algoritma Pemrograman</li>
                        <li>2018/Ganjil TIK103 Logika Informatika</li>
                        <li>2018/Ganjil TIK101 Pengantar Informatika</li>
                        <li>2018/Genap TIK206 Statistika</li>
                        <li>2018/Genap TIK203 Dasar Pemrograman Web</li>
                        <li>2018/Genap TIK204 Organisasi Komputer</li>
                        <li>2018/Genap TIK202 Struktur Data</li>
                        <li>2018/Genap UNG108 Pancasila dan Kewarganegaraan</li>
                        <li>2018/Genap TIK205 Fisika Informatika</li>
                        <li>2018/Genap TIK201 Komputasi Aljabar Linier</li>
                        <li>2019/Ganjil TIK502 Penambangan Data</li>
                        <li>2019/Ganjil TIK305 Rekayasa Multimedia</li>
                        <li>2019/Ganjil TIK306 Pemrograman Desktop</li>
                        <li>2019/Ganjil TIK301 Matematika Diskrit</li>
                        <li>2019/Ganjil TIK302 Sistem Basis Data</li>
                        <li>2019/Ganjil TIK303 Pemrograman Berorientasi Objek</li>
                        <li>2019/Ganjil TIK304 Sistem Operasi</li>
                        <li>2019/Genap TIK401 Jaringan Komputer</li>
                        <li>2019/Genap TIK404 Bahasa Formal dan Otomata</li>
                        <li>2019/Genap TIK403 Sistem Informasi</li>
                        <li>2019/Genap TIK405 Pengelolaan Basis Data</li>
                        <li>2019/Genap TIK402 Grafika Komputer</li>
                        <li>2019/Genap TIK406 Komputasi Numerik</li>
                        <li>2020/Ganjil TIK746 Machine Learning</li>
                        <li>2020/Ganjil TIK503 Pengembangan Aplikasi Web</li>
                        <li>2020/Ganjil TIK506 Interaksi Manusia dan Komputer</li>
                        <li>2020/Ganjil TIK702 Keamanan Data dan Aplikasi</li>
                        <li>2020/Ganjil TIK504 Strategi Algoritma</li>
                        <li>2020/Ganjil TIK501 Analisa & Perancangan Perangkat Lunak</li>
                        <li>2020/Ganjil TIK505 Pengolahan Citra</li>
                    </ol>
                </td>
            </tr>

            <tr>
                <th colspan="3" class="subjudul">&nbsp;</th>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="nav">
                        <a href="login.php">&emsp;LOG OUT&emsp;</a><a href="logout.php">&emsp;Detail v1&emsp;</a><a href="private1.php">&emsp;Home&emsp;</a>
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