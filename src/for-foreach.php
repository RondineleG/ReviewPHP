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
$people = array(
   array('name' => 'Kalle', 'salt' => 856412),
   array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0, $size = count($people); $i < $size; ++$i) {
  echo $people[$i]['salt'] = mt_rand(000000, 999999);
}

echo"<hr>";

// foreach
$colors = array("green", "blue", "red");

foreach($colors as $key => $value)
{ 
    echo $key."-".$value. "<br>";
}
echo"<hr>";

$animalsList = array("Lion","Wolf", "Dog","Leopard"," Tiger");

foreach($animalsList as $key=> $value)
{
   echo $key. " : " . $value . "<br>";
}

ksort($animalsList);
echo"<hr>";
print_r($animalsList);