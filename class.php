<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}
// create an object
$carobj = new Car();
// show object properties
echo $carobj ->model;
?>