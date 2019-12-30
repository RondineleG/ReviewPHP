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