<?php

// ~40 min

define("MIN_WEIGTH", 1);
define("MAX_WEIGTH", 20000);
define("NUMBER_OF_STONES", 50);
define("TRUCK_CAN_CARRY", 30000);

$stones = [];

for ($i=0; $i < NUMBER_OF_STONES; $i++)
{
    $stones[] = rand(MIN_WEIGTH, MAX_WEIGTH);
}

$trips = [];
$trip = 0;

echo "Stone weigths were:" . PHP_EOL;
echo json_encode($stones) . PHP_EOL;
echo PHP_EOL;

// starting loading
rsort($stones);

while (count($stones) > 0) {
    $trips[$trip] = [];
    $current_weigth = 0;
    $i = 0;
    while ($i < count($stones)) {
        if ($current_weigth + $stones[$i] > TRUCK_CAN_CARRY) {
            $i++;
        } else {
            $current_weigth += $stones[$i];
            $trips[$trip][] = $stones[$i];
            array_splice($stones, $i, 1);
        }
    }
    $trip++;
}

echo "It took " . count($trips) . " trips to transport them. " ;
echo "Driver was wise to transport them this way:" . PHP_EOL;
echo PHP_EOL;
foreach ($trips as $trip) {
    echo json_encode($trip) . PHP_EOL;
}
echo PHP_EOL;
echo "Now he deserves a beer.";
echo PHP_EOL;

?>
