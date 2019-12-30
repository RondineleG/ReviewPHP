<?php

$names = array("Father" => "Jose", "Friend" => "felipe", "Undefined" => "Rondinele");


// is_array();

echo is_array($names);
var_dump(is_array($names));
echo "<hr>";

if (is_array($names)) {
    echo " is array";
} else {
    echo " is not array";
}

echo "<hr>";

// in_array();

echo in_array("Jose", $names);
var_dump(in_array("Jose", $names));
echo "<hr>";

if (in_array("Jose", $names)) {
    echo " exits in array";
} else {
    echo "not exits in array";
}

// array_keys();

echo "<hr>";
$keys = array_keys($names);
print_r($keys);
echo "<hr>";

// array_values();

echo "<hr>";
$values = array_values($names);
print_r($values);
echo "<hr>";
 
 // array_merge()

 $cars = array("gol", "uno","celta");
 $motocycle = array("Pop100","50cc","cb1000");

 $vehicle = array_merge($cars, $motocycle);

 print_r($vehicle);

 echo "<hr>";

 // array_pop()
 print_r($cars);
 echo "<hr>";
 echo array_pop($cars)."<br>";
print_r($cars);
echo "<hr>";
echo "<hr>";

 // array_shift()
 print_r($cars);
 echo "<hr>";
 echo array_shift($cars)."<br>";
print_r($cars);


 // array_unshift()
echo "<hr>";
$fruits = array("Apple","Grape","Orenage");
print_r($fruits);
echo "<hr>";
array_unshift($fruits,"Banana", "Strawberry","cowberry");
print_r($fruits);
