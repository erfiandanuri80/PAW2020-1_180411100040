<?php

require_once 'index.php';

function monthCalender($num)
{

    $hari    = date("d");
    $bulan    = date($num);
    $tahun    = date("Y");
    $jumlahhari = date("t", mktime(0, 0, 0, $bulan, $hari, $tahun));


    echo "<tr>";
    echo "<th colspan='7'>";
    echo date('F', strtotime("2020-$bulan"));
    echo "</th>";
    echo "</tr>";
    echo "<tr style='background-color: aqua';>";
    echo "<td style='text-align: center; background-color: tomato;'>Minggu</td>";
    echo "<td style='text-align: center; '>Senin</td>";
    echo "<td style='text-align: center; '>Selasa</td>";
    echo "<td style='text-align: center; '>Rabu</td>";
    echo "<td style='text-align: center; '>Kamis</td>";
    echo "<td style='text-align: center; '>Jumat</td>";
    echo "<td style='text-align: center; background-color: tomato;'>Sabtu</td>";
    echo "</tr>";

    $s = date("w", mktime(0, 0, 0, $bulan, 1, $tahun));
    for ($ds = 1; $ds <= $s; $ds++) {
        echo "<td></td>";
    }
    for ($d = 1; $d <= $jumlahhari; $d++) {
        if (date("w", mktime(0, 0, 0, $bulan, $d, $tahun)) == 0) {
            echo "<tr>";
        }
        $warna = "#fff"; // warna default
        if (date("l", mktime(0, 0, 0, $bulan, $d, $tahun)) == "Sunday") {
            $warna = "tomato";
        }
        if (date("l", mktime(0, 0, 0, $bulan, $d, $tahun)) == "Saturday") {
            $warna = "tomato";
        }

        if (date("1", mktime(0, 0, 0, $bulan, $d, $tahun)) == "Monday") {
            $warna = "yellow";
        }


        echo "<td align=center valign=middle> <span style=\"background-color:$warna;\">$d</span></td>";
        if (date("w", mktime(0, 0, 0, $bulan, $d, $tahun)) == 6) {
            echo "</tr>";
        }
    }
}
