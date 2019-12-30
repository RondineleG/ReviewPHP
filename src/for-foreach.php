<?php

// for

for($count = 0; $count <=10; $count ++)
{
   echo "Count is $count <br>"
;}

echo"<hr>";
for($count = 0; $count <=10; $count ++)
{
   echo " 8 x $count = ".($count*8)."<br>";
}

echo"<hr>";

// foreach
$colors = array("green", "blue", "red");

foreach($colors as $key => $value)
{ 
    echo $key."-".$value. "<br>";
}

