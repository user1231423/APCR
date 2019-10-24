<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

// output vars
$txt = "PHP language";
echo "I love $txt!";

echo "<br> 2: I love " . $txt . "!";


// SCOPES
$globalVar = 5; // global scope

function myTest() {
    // using globalVar inside this function will generate an error
    echo "<p>Variable globalVar inside function is (error): $globalVar</p>";

    $localVar = 5; // local scope
    echo "<p>Variable localVar inside function is: $localVar</p>";
}
myTest();

echo "<p>Variable globalVar outside function is: $globalVar</p>";

// using localVar outside the function will generate an error
echo "<p>Variable localVar outside function is (error): $localVar</p>";


// static keyword
function myNewTest() {
    static $x = 0;
    echo '<br> static: '. $x;
    $x++;
}

myNewTest();
myNewTest();


?>
