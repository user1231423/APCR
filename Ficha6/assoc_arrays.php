<?php

// Associative arrays
$age = ["Peter"=>35, "Ben"=>37, "Joe"=>43];
//or:
$age2['Peter'] = "35";
$age2['Ben'] = "37";
$age2['Joe'] = "43";

echo "Peter is " . $age['Peter'] . " years old.<br>";


$phone_numbers = [
  "Alex" => "415-235-8573",
  "Jessica" => "415-492-4856",
];
// functions
if (array_key_exists("Alex", $phone_numbers)) {
    echo "Alex's phone number is " . $phone_numbers["Alex"] . "<br>";
} else {
    echo "Alex's phone number is not in the phone book!";
}

// extract keys
print_r(array_keys($phone_numbers));
echo '<br>';

// get only values
print_r(array_values($phone_numbers));
?>