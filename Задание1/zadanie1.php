<?php

$numberInRow = 1;
$currentNumberInRow = 0;

for ($i = 1; $i <= 100; $i++){
    echo $i . " ";
    $currentNumberInRow++;

    if ($currentNumberInRow == $numberInRow) {
        $currentNumberInRow = 0;
        $numberInRow++;

        echo "</br>";
    }
}
