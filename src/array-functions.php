<?php

$names = array("Jose", "felipe", "Rondinele");


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
echo in_array("Jose",$names);
var_dump(in_array("Jose",$names));
echo "<hr>";

if (in_array("Jose",$names) )
{
    echo " exits in array";
} else {
    echo "not exits in array";
}