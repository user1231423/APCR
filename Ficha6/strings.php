<?php
$name = "Stefanie Hatcher";

echo 'len: ' . strlen("Hello world!"); // outputs 12

echo '<br> strpos with var: ' .  strpos($name, "e");

echo '<br> strpos: ' . strpos("Hello world!", "world"); // outputs 6

echo '<br> count: ' . str_word_count("Hello world!"); // outputs 2

echo '<br> substr: ' . substr($name, 9);
echo '<br> strtoupper: ' . strtoupper($name);


echo '<br>';
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!


?>