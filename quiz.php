<?php

// Quiz 1 
$matriks1 = array(
    [1, 2, 3, 4, 5],
    [2, 1, 2, 3, 4],
    [3, 2, 1, 2, 3],
    [4, 3, 2, 1, 2],
    [5, 4, 3, 2, 1]
);


$matriks2 = array(
    6,
    7,
    8,
    9,
    10
);

foreach($matriks1 as $index => $row1) {
    $output = 0;
    foreach($row1 as $iRow1 => $valRow1) {
            // echo "($valRow1 kali " . $matriks2[$iRow1] .")+";
            $kali = $valRow1 * $matriks2[$iRow1];
            $output += $kali;
    }
    echo "$output";
    echo "<br>";
}


// foreach ($matriks2 as $index => $row2) {
//     $output = 0;
//     foreach ($row2 as $iRow2 => $valRow2) {
//         $output = 0;
//         $matriks = $matriks1[$index];
//         foreach ($matriks as $val1) {
//             echo "($val1 kali $valRow2)";
//             $kali = $val1 * $valRow2;
//             $output += $kali;
//         }
//         // echo "$output  ";
//     }


//     echo "<br>";
// }

// Quiz 2 
echo "<br>";


$space = 15;
$array = ['*'];

for ($line = 0; $line < 5; $line++) {
    $rightNum = [];
    $leftNum = [];
    $num = $line;

    for ($i = 0; $i < $line; $i++) {
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
