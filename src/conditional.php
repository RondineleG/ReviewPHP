<?php

$number = 8;


// If , elseif and else conditional
if($number == 10)
{
   echo "It's equal 10";
}
elseif($number <=9)
{
    echo "It's less or than 9";
}
else
{
    echo "It's bigger";
}

// ternary operator

echo "<hr>";

$average = 7;

echo ($average >=7) ? "Aproved!" : "Reproved!";