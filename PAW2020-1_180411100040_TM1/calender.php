<?php

require_once 'index.php';

function monthCalender($num)
{
    $bulantodday = date("m");
    $hari    = date("d");
    $bulan    = date($num);
    $tahun    = date("Y");
    $jumlahhari = date("t", mktime(0, 0, 0, $bulan, $hari, $tahun));


    echo "<table style='margin: auto;'>";
    echo "<tr>";
    echo "<th colspan='7'>";
    echo date('F', strtotime("2020-$bulan"));
    echo "</th>";
    echo "</tr>";
    echo "<tr style='background-color: aqua;'>";
    echo "<td style='text-align: center; background-color: tomato;'>Minggu</td>";
    echo "<td style='text-align: center; '>Senin</td>";
    echo "<td style='text-align: center; '>Selasa</td>";
    echo "<td style='text-align: center; '>Rabu</td>";
    echo "<td style='text-align: center; '>Kamis</td>";
    echo "<td style='text-align: center; '>Jumat</td>";
    echo "<td style='text-align: center; background-color: tomato;'>Sabtu</td>";
    echo "</tr>";

    if ($num != "3" and $num != "11") {
        echo "<tr>";
    }

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
        if ($d == date("d")  and $bulan == $bulantodday) {
            $warna = "#fceb03";
            echo "<td><span style=\"background-color:$warna;\">$d</span></td>";
        } elseif ($d == 31 or ($num == "8" and $d == 6) or ($num == "8" and $d == 27) or ($num == "8" and $d == 9)) {
            $warna = "#7ffc03";
            echo "<td><span style=\"background-color:$warna;\"> <a href='https://www.google.com'> $d</a></span></td>";
        } else {
            echo "<td><span style=\"background-color:$warna;\">$d</span></td>";
        }
        if (date("w", mktime(0, 0, 0, $bulan, $d, $tahun)) == 6) {
            echo "</tr>";
        }
    }
    if ($num == "1" || $num == "7") {
        echo "<td></td></tr>";
    } elseif ($num == "4" || $num == "12") {
        echo "<td></td><td></td></tr>";
    } elseif ($num == "9") {
        echo "<td></td><td></td><td></td></tr>";
    } elseif ($num == "6" || $num == "3") {
        echo "<td></td><td></td><td></td><td></td></tr>";
    } elseif ($num == "2" || $num == "8" || $num == "11") {
        echo "<td></td><td></td><td></td><td></td><td></td></tr>";
    } elseif ($num == "5") {
        echo "<td></td><td></td><td></td><td></td><td></td><td></td></tr>";
    }

    echo "</table>";
}
