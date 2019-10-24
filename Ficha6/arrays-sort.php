<?php
// sorting arrays
$cars = ['Volvo','BMW','Toyota'];
sort($cars);
echo '<br>cars sorted: ';
print_r($cars);

$numbers = [4, 6, 2, 22, 11];
rsort($numbers);
echo '<br>reverse sorted numbers: ';
print_r($numbers);


// sort Associative by value
$age = ["Peter"=>35, "Ben"=>37, "Joe"=>43];
asort($age);
echo '<br>Associative by value sorted : ';
print_r($age);

ksort($age);
echo '<br>Associative by key sorted : ';
print_r($age);

?>