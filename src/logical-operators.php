<?php

// logical operator
 
$age = 30;
$name = "Rondinele";


// Operator &&
if(($age == 25) && ($name =="Rondinele"))
{
   echo" It's true";
}
else
{
    echo" It's false";
}

echo"<hr>";
// operator ||

if(($age == 25) || ($name =="Rondinele"))
{
   echo" It's true";
}
else
{
    echo" It's false";
}

echo"<hr>";
// operator ||

if(($age == 20) || ($name =="Beatriz"))
{
   echo" It's true";
}
else
{
    echo" It's false";
}


echo"<hr>";
// operator xor

if(($age == 20) xor ($name =="Rondinele"))
{
   echo" It's true";
}
else
{
    echo" It's false";
}

echo"<hr>";

// operator xor

if(($age == 30) xor ($name =="Rondinele"))
{
   echo" It's true";
}
else
{
    echo" It's false";
}

echo"<hr>";
// operator !

if(!($age == 20) and !($name =="Beatriz"))
{
   echo" It's true";
}
else
{
    echo" It's false";
}