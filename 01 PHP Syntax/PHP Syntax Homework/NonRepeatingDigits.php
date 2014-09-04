<?php

$numN = 247;

if (($numN <= 101 && $numN >= 0) || ($numN >= -101 && $numN <= 0)) {
    echo('no');
} elseif ($numN < -101) {
    echo('too many numbers are smaller than N ...');
} else {
    calculateResult($numN);
}

function calculateResult($numN)
{
    $result = array();

    for ($a = 1; $a <= 9; $a++) {
        for ($b = 0; $b <= 9; $b++) {
            for ($c = 0; $c <= 9; $c++) {

                $check = $a . $b . $c;

                if ($a != $b && $a != $c && $b != $c && $check <= $numN) {
                    array_push($result, $check);
                }
            }
        }
    }

    echo(implode(', ', $result));
}
