<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS MINGGUAN 1</title>
    <!--link css -->
    <style>
        .container {
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            font-size: 18px;
            text-align: center;
            padding: 20px 20px;
            margin: 10px;
        }

        .footer .container {
            font-size: 20px;
            background-color: #279182;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>KALENDER 2020</h1>

    </div>
    <div class="container">
        <?php
        require_once "calender.php";
        monthCalender("1");
        monthCalender("2");
        monthCalender("3");
        monthCalender("4");
        monthCalender("5");
        monthCalender("6");
        monthCalender("7");
        monthCalender("8");
        monthCalender("9");
        monthCalender("10");
        monthCalender("11");
        monthCalender("12");

        ?>
    </div>

    <div class="footer">
        <div class="container">
            @ 180411100040 - RIO ERFIAN
        </div>
    </div>

</body>

</html>