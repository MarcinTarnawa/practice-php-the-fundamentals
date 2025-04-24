<?php

$randomArray = createRandomArray();
print_r($randomArray);

// nie modyfikuj kodu poniżej!

// funkcję można definiować poniżej wywołania
// ponieważ w PHP funkcje są deklarowane podczas analizy kodu
// tj. przed jego uruchomieniem
// hoisting znany z JS nie występuje

function createRandomArray() {
    $arr = [];
    $len = getRandomInteger(1, 10);
    for($i=0; $i<$len; $i++) {
        $arr[] = getRandomInteger(1, 100);
    }

    return $arr;
}

function getRandomInteger($min, $max) {
    return rand($min, $max);
}

echo "<br> pętla for <br>";

for($i=0; $i<count($randomArray);$i++) {
    echo $randomArray[$i] . '<br>';
}

echo "pętla foreach <br>";

foreach ($randomArray as $value) {
    echo "$value <br>";
}

echo "Ostatni element tablicy: " . end($randomArray);