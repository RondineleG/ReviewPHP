<?php

// String

// double quotes
$name  =78;
// single quotes
$Name  = 'Rondinele';

var_dump($name);
var_dump($Name);

if(is_string($name) || is_string($Name))
{
   echo" This variables is a string !!";
}
else
{
    echo" This variables is not a string !!";
}

echo"<hr>";


// int

$age = 27;

var_dump($age);
if(is_int($age))
{
   echo" This variables is a integer !!";
}
else
{
    echo" This variables is not a integer !!";
}

echo"<hr>";

// float

$height = 1.66;

var_dump($height);
if(is_float($height))
{
   echo" This variables is a float number !!";
}
else
{
    echo" This variables is not a float number !!";
}

echo"<hr>";

