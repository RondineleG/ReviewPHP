<?php

$number = 8;


// If , elseif and else conditional
if ($number == 10) {
    echo "It's equal 10";
} elseif ($number <= 9) {
    echo "It's less or than 9";
} else {
    echo "It's bigger";
}

// ternary operator

echo "<hr>";

$average = 7;

echo ($average >= 7) ? "Aproved!" : "Reproved!";


// switch

$color = "black";
echo "<hr>";
switch ($color) {
    case "red":
        echo "Your favorite color is red";
        break;
    case "green":
        echo "Your favorite color is green";
        break;
    case "blue":
        echo "Your favorite color is blue";
        break;
    case "white":
        echo "Your favorite color is white";
        break;
    default:
    echo "Your don't has a favorite color";
        break;
}
