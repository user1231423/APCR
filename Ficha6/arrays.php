<?php
//$cars = array("Volvo", "BMW", "Toyota");

// PHP 5.4 introduziu uma nova sintaxe
$cars = ['Volvo','BMW','Toyota'];

echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo "<br> length: " . count($cars) . "<br>";

print_r($cars); // imprimir array, simples

echo "<br>array detalhes: ";
var_dump($cars); // imprimir array, detalhes


echo "<br>loop: ";
// loop indexed array
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}




// functions
$odd_numbers = [1,3,5,7,9];
$first_item = $odd_numbers[0]; // ou reset($odd_numbers)
echo "first: " . $first_item;

$last_item = end($odd_numbers);


// Stack and queue functions
$numbers = [1,2,3];
array_push($numbers, 4); // now array is [1,2,3,4];

array_pop($numbers); // now array is [1,2,3];


// push to beginning
array_unshift($numbers, 0); // now array is [0,1,2,3];

// Adiciona um elemento no final do array
$numbers[] = 4;
// Remove um elemento do array.
unset($numbers[4]);

// pop from beginning
array_shift($numbers); // now array is [1,2,3];


// Concatenating
$odd_numbers = [1,3,5,7,9];
$even_numbers = [2,4,6,8,10];
$all_numbers = array_merge($odd_numbers, $even_numbers);
echo "<br>all numbers: ";
print_r($all_numbers);

?>