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
 
 