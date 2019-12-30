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


// function count

echo count($customer);
echo"<hr>";
$customerList = count($customer);
echo $customerList;


//foreach 
echo"<hr>";
foreach($customer as $value)
{
    foreach($animals as $valueA)
    {
       echo $valueA . "<br>" ."<hr>";
    }

   echo $value ."<br>"."<hr>";
}


// arrays associatives
echo"<hr>";
$people = array("name"=>"Rondinele", "age"=>27);
$people["city"] = "Itajai";
print_r($people);
echo"<hr>";
echo $people["name"];
echo"<hr>";
foreach($people as $key => $value)
{
   echo $key.":".$value ."<br>";
}