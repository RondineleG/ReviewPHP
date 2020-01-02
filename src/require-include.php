<?php

// Include and include_once

echo"Show file quotes.php  using include function<br>";
include 'quotes.php';
 echo"<hr>";

 echo"Show file data-types.php  using include_one function<br>";
include_once 'data-types.php';
 echo"<hr>";

 echo"Show file config.php  using require function<br>";
require 'config.php';
 echo"<hr>";

 print_r($config);
 echo"<hr>";
 
 echo"Show file config.php  using require_once function<br>";
 require_once 'config.php';
  echo"<hr>";
 
  print_r($config);