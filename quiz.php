<?php

// Quiz 1 
$matriks1 = array(
    array(1, 2, 3, 4, 5),
    array(2, 1, 2, 3, 4),
    array(3, 2, 1, 2, 3),
    array(4, 3, 2, 1, 2),
    array(5, 4, 3, 2, 1)
);


$matriks2 = array(
    6,
    7,
    8,
    9,
    10
);

// foreach($matriks1 as $row => $column) {
//     $matriks = $matriks2[$row];
//     $output = 0;
//     foreach($column as $data) {
//         $kali = $data * $matriks;
//         $output += $kali;
//     }
//     echo "<p>$output</p>";
// }


foreach ($matriks2 as $index => $val2) {
    $matriks = $matriks1[$index];
    $output = 0;
    foreach($matriks as $val1) {
        $kali = $val1 * $val2;
        $output += $kali;
    }
    echo "<p>$output</p>";
}

// Quiz 2 
echo "<br>";


$space = 15;
$array = ['*'];

for ($line = 0; $line < 5; $line++) {
    $rightNum = [];
    $leftNum = [];
    $num = $line;
    
    for($i = 0; $i < $line; $i++) {
        array_push($rightNum, $i + 1);
    }

    echo str_repeat('&nbsp;', $space);

    $leftNum = array_reverse($rightNum);

    foreach ($leftNum as $valL) {
        echo " $valL ";
    }

    echo " * ";
    foreach ($rightNum as $valR) {
        echo " $valR ";
    }
    echo str_repeat('&nbsp;', $space);
    echo "<br>";
    $space -= 3;
}


