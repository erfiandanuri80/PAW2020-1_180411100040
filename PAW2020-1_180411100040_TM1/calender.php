<?php
    $year = date('Y');
    $day = date('d');
    for ($month=1; $month <= 12; $month++) { 
        $first_day_of_month = mktime(0, 0, 0, $month, 1, $year);
        $first_day_of_week = date('w', $first_day_of_month);
        $days_in_month = date('t', $first_day_of_month);
    
        echo" <div class=\"month\">
        <h3>".date("F",$first_day_of_month ).date(' Y')."</h3>
        <table>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
            <tr>";
    if ($first_day_of_week > 0) {
        echo "<td colspan=\"$first_day_of_week\">&nbsp;</td>";
    }
        for (
            $day_of_month = 1;
            $day_of_month <= $days_in_month;
            $day_of_month++
            ) {
                $tgl = mktime(0,0,0, $month,$day_of_month,$year);
                $num = date('w',$tgl);
                if ($day_of_month == $day and $month==date('m')){
                    echo "<td class=\"today\">$day_of_month</td>";
                }
                else if(($day_of_month == 1 && $month==1) || ($day_of_month == 12 && $month==10) || ($day_of_month == 9 && $month== 6) 
                || ($day_of_month == 20 && $month== 11) || ($day_of_month == 31 && $month== 12 ) || ($day_of_month == 17 && $month== 8 )
                || ($day_of_month == 7 && $month== 7) || ($day_of_month == 31 && $month== 10) || ($day_of_month ==  25 && $month== 1 ) || ($day_of_month == 6 && $month== 8)){
                    echo "<td class=\"special\"><a href=\"https://www.google.com/\">$day_of_month</a></td>";
                }
                else if ($num== 6 || $num==0){
                    echo "<td class=\"weekend\">$day_of_month</td>";
                }
                else {
                    echo "<td>$day_of_month</td>";
                }
                if ($day_of_month == $days_in_month && $num<6){
                    if ($num == 5){
                        echo "<td class=\"end\">&nbsp;</td>";
                    }
                    else{
                        $end = 6 - $num;
                        echo "<td class=\"end\" colspan=\"$end\">&nbsp;</td>";
                    }
                }
                if ($num == 6 && $day_of_month<$days_in_month){
                    echo "</tr>";
                    echo "<tr>";
                }
            } 
            echo "</tr>";
            echo "</table>
            </div>";
        }
