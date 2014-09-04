<?php

$currentMonth = date("F");
$currentYear = date("Y");
$daysInMonth = date("t");

for($i = 1; $i <= $daysInMonth; $i++) {
    $date = strtotime("$i $currentMonth $currentYear");
    if(date("l", $date) == "Sunday") {
        echo date("jS F, Y", $date) . "<br>";
    }
}