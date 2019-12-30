<?php

// String

// double quotes
$name  = 78;
// single quotes
$Name  = 'Rondinele';

var_dump($name);
var_dump($Name);

if (is_string($name) || is_string($Name)) {
    echo " This variables is a string !!";
} else {
    echo " This variables is not a string !!";
}

echo "<hr>";


// int

$age = 27;

var_dump($age);
if (is_int($age)) {
    echo " This variables is a integer !!";
} else {
    echo " This variables is not a integer !!";
}

echo "<hr>";

// float

$height = 1.66;

var_dump($height);
if (is_float($height)) {
    echo " This variables is a float number !!";
} else {
    echo " This variables is not a float number !!";
}

echo "<hr>";

// boolean  

$admin = true;

var_dump($admin);
if (is_bool($admin)) {
    echo " This variables is a boolean value !!";
} else {
    echo " This variables is not a boolean value !!";
}

echo "<hr>";

// Array  
$cars = array("Gol", "Uno", "Celta", 12, 2.0, true);

var_dump($cars);

echo "<hr>";
