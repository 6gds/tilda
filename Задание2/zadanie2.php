<?php

$numbers = [];
$notUniqueNumbers = [];

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 7; $j++) {
        //можно do while использовать покрасивше будет
        while (in_array($randNumber = rand(1, 1000), $notUniqueNumbers)) {
            $randNumber = rand(1, 1000);
        };

        $numbers[$i][$j] = $randNumber;
    }
}

echo "</br>";
echo "</br>";

foreach ($numbers as $numberRow) {
    foreach ($numberRow as $number) {
        echo "$number ";
    }
}
