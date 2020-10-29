<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS MINGGUAN 1</title>
</head>

<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">

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

        <?php
        function monthCalender($num)
        {
            $hari    = date("d");
            $bulan    = date($num);
            $tahun    = date("Y");
            $jumlahhari = date("t", mktime(0, 0, 0, $bulan, $hari, $tahun));


            echo "<tr>" . "<th colspan='7'>";
            echo date('F', strtotime("2020-$bulan"));
            echo "</th>";
            echo "</tr>";
            echo "<tr style='background-color: aqua';>";
            echo "<td style='text-align: center; color: red;'>Minggu</td>";
            echo "<td style='text-align: center;''>Senin</td>";
            echo "<td style='text-align: center;''>Selasa</td>";
            echo "<td style='text-align: center;''>Rabu</td>";
            echo "<td style='text-align: center;''>Kamis</td>";
            echo "<td style='text-align: center;''>Jumat</td>";
            echo "<td style='text-align: center;''>Sabtu</td>";
            echo "</tr>";

            $s = date("w", mktime(0, 0, 0, $bulan, 1, $tahun));
            for ($ds = 1; $ds <= $s; $ds++) {
                echo "<td></td>";
            }
            for ($d = 1; $d <= $jumlahhari; $d++) {
                if (date("w", mktime(0, 0, 0, $bulan, $d, $tahun)) == 0) {
                    echo "<tr>";
                }
                $warna = "#000000"; // warna default
                if (date("l", mktime(0, 0, 0, $bulan, $d, $tahun)) == "Sunday") {
                    $warna = "#FF0000";
                }
                echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>";
                if (date("w", mktime(0, 0, 0, $bulan, $d, $tahun)) == 6) {
                    echo "</tr>";
                }
            }
        }
        ?>

</body>

</html>