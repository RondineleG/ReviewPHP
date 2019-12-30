<?php


// => for set index of array
$cars = array(1=>"BMW", 4=>"UNO", 3=>"GOL");

$cars[] = "Amarok";
$cars[12] = "S10";

//print array function
print_r($cars);

echo"<hr>";

// using index of array
echo $cars[1];
echo"<hr>";

$animals = array();

$animals[] = "Lion";
$animals[] = "Tiger";
$animals[] = "Hippo";
echo"<hr>";
// using index of array
echo $animals[2];
echo"<hr>";

print_r($animals);
echo"<hr>";

$customer = ["Rondinele", "Gabriela", "Bia"];
print_r($customer);
echo"<hr>";
