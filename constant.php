<?php


//constant

define("NAME", "Rondinele");
define("AGE",27);
define("HEIGHT",1.66);
define("MARRIED",true);
echo NAME;

var_dump(NAME);
var_dump(AGE);
var_dump(HEIGHT);
var_dump(MARRIED);

echo"<hr>";
echo "My name is ".NAME ." and my age is ". AGE . " height is ". HEIGHT . " married " . MARRIED;
echo"<hr>";
define("TEAMS", ['Santos','Flamengo','Avai']);

var_dump(TEAMS);

echo"<hr>";
function ShowName()
{

    //Constant are global
    echo NAME;
}

ShowName();