<?php

/* comparison operator
 == equal
 != not qual
 !=== identity
 === identity
 <> different
 < less than
 > bigger than
 <= less or equal
  >= bigger or equal
  <=> spaceship 
*/

if(10==10)
{
   echo "Positive";
}
else
{
   echo "Negative";
}

echo"<hr>";
if(10 !=10)
{
   echo "Positive";
}
else
{
   echo "Negative";
}
echo"<hr>";

if(10 ===10)
{
   echo "Positive";
}
else
{
   echo "Negative";
}
echo"<hr>";
if(10 !==10)
{
   echo "Positive";
}
else
{
   echo "Negative";
}
echo"<hr>";
if(10 <>11)
{
   echo "Positive";
}
else
{
   echo "Negative";
}

echo"<hr>";
if(10 <11)
{
   echo "Positive";
}
else
{
   echo "Negative";
}

echo"<hr>";
if(10 >11)
{
   echo "Positive";
}
else
{
   echo "Negative";
}

echo"<hr>";
if(10 >=11)
{
   echo "Positive";
}
else
{
   echo "Negative";
}

echo"<hr>";
if(10 <=11)
{
   echo "Positive";
}
else
{
   echo "Negative";
}

echo"<hr>";
var_dump(20<=>70);
echo"<hr>";
var_dump(90<=>80);
echo"<hr>";
var_dump(70<=>70);