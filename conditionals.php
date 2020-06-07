<?php

/* ////CONDITIONALS */

//Basic if...else
$num = 5;

if ($num == 5) {
  echo "true";
}

echo "<br />";

if ($num === '5') {
  echo "true";
} else {
  echo "false";
}
//pretty standard so far...

echo "<br />";
//Logical operators
/* 
and && (you can explicetly type 'and' or use &&)
or ||  (you can explicetly type 'or' or use ||)
xor (passed when ONE of the condition is true, but not all)
*/

//and, &&
if ($num > 4 && $num < 10) {
  echo "&& passed";
};

echo "<br />";
//or, ||
if ($num > 4 || $num < 10) {
  echo " || passed";
};


echo "<br />";
//
if ($num) {
  echo "truthy passed";
};


echo "<br />";

//xor passes if only one of the values meets the condition
if ($num > 4 xor $num < 4) {
  echo "xor passed";
};

echo "<br />";

//Swith statements

$color = 'green';

switch ($color) {
  case 'red':
    echo 'Chosen color is red.';
    break;

  case 'blue':
    echo 'Chosen color is blue.';
    break;

  case 'purple':
    echo 'Chosen color is purple.';
    break;

  default:
    echo 'Default';
}
