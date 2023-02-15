<?php

$numbers = [];
$notUniqueNumbers = [];

$sumInRow = [];
$sumInColumn = [];

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 7; $j++) {
        //можно do while использовать покрасивше будет
        while (in_array($randNumber = rand(1, 66), $notUniqueNumbers)) {
            $randNumber = rand(1, 66);
        };
        
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
