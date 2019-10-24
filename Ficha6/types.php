<?php
$x = 5985;
echo 'var type: ';
var_dump($x);


// object
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo '<br>' . $herbie->model;
?>