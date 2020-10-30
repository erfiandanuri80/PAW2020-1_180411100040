<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS MINGGUAN 1</title>
</head>

<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">

    <?php
    require_once "calenderku.php" ?>
    <table style="margin: auto;">
        <tr>
            <th colspan="3" style="padding:50px; font-size:24px;">KALENDER TAHUN 2020</th>
        </tr>
        <tr>
            <td>
                <table><?php monthCalender(1); ?></table>
            </td>
            <td>
                <table><?php monthCalender(2); ?></table>
            </td>
            <td>
                <table><?php monthCalender(3); ?></table>
            </td>
        </tr>
        <tr>
            <td>
                <table><?php monthCalender(4); ?></table>
            </td>
            <td>
                <table><?php monthCalender(5); ?></table>
            </td>
            <td>
                <table><?php monthCalender(6); ?></table>
            </td>
        </tr>
        <tr>
            <td>
                <table><?php monthCalender(7); ?></table>
            </td>
            <td>
                <table><?php monthCalender(8); ?></table>
            </td>
            <td>
                <table><?php monthCalender(9); ?></table>
            </td>
        </tr>
        <tr>
            <td>
                <table><?php monthCalender(10); ?></table>
            </td>
            <td>
                <table><?php monthCalender(11); ?></table>
            </td>
            <td>
                <table><?php monthCalender(12); ?></table>
            </td>
        </tr>
    </table>


</body>

</html>