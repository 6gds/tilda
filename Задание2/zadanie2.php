<?php

$numbers = [];
$notUniqueNumbers = [];

$sumInRow = [];
$sumInColumn = [];

$minNumber = 1;
$maxNumber = 1000;

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 7; $j++) {
        do {
            $randNumber = rand($minNumber, $maxNumber);
        } while (in_array($randNumber, $notUniqueNumbers));

        $notUniqueNumbers[] = $randNumber;
        $numbers[$i][$j] = $randNumber;

        if (empty($sumInRow[$i])) {
            $sumInRow[$i] = $randNumber;
        } else {
            $sumInRow[$i] += $randNumber;
        }

        if (empty($sumInColumn[$j])) {
            $sumInColumn[$j] = $randNumber;
        } else {
            $sumInColumn[$j] += $randNumber;
        }
    }
}

echo "</br>";
echo "</br>";

echo "Cумма в столбце";
echo "</br>";
echo "</br>";

for ($j = 0; $j < 7; $j++) {
    echo $sumInColumn[$j] . " ";
}

echo "</br>";
echo "</br>";

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 7; $j++) {
        echo $numbers[$i][$j] . " ";
    }

    echo "Cумма в строке - " . $sumInRow[$i];

    echo "</br>";
    echo "</br>";
}
