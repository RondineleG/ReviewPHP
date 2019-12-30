<?php

$name = "Rondinele";

// variables global
$a= 1;
$b = 2;
$c = 10;



function ShowName()
{
     // variables local
    global $name;
    echo $name;
}

ShowName();

echo"<hr>";
function ShowCity()
{
    // variables local

    global $city;
    $city = "Rio";
}

ShowCity();
echo $city;
echo"<hr>";

function Sum()
{
  echo $GLOBALS['a'] +  $GLOBALS['b'] +  $GLOBALS['c'] ;
}

Sum();