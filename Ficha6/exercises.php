<?php
$var1 = 12;
$var2 = "String";

echo "<h2>Var1:</h2><h3>$var1</h3>";
echo "<h2>Var2:</h2><h3>$var2</h3>";

$string1 = "This is a string!";
$strlen = strlen($var2);
echo "<h1>Length da string: $strlen</h1>";

$string2 = "This is a string";

if(strcmp($string1,$string2) !== 0){
    echo "<h1>Strings não são iguais!!!</h2>";
}else{
    echo "<h1>Strings iguais!!!!";
}

$reverted = strrev($string1);
echo "<h1>$reverted</h1>";

$trimmed = trim($string1, "T!");
echo "<h1>$trimmed</h1>";

function getDayOfWeek(){
    return date('w');
}

if( (getDayOfWeek() == 6) || (getDayOfWeek() == 7) ){
    echo "<h1>BOA!!</h1>";
}else{
    echo "<h1>Nunca mais é fim de semana!!!</h1>";
}

$array = array(5,4,3,2,1);
sort($array);
foreach($array as $value){
    echo "<h2>$value</h2>";
}

?>