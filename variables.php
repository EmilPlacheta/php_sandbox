<?php
 /* -use ; EVERYWHERE
    -prefix variables with $
    -start with letter or _
    -variables declared with snake_case
 */
$my_value = "\nvalue";
//echo or printo to display, echo is quicker
echo $my_value;
print $my_value;
echo "<br />";

/* CONSTANTS  */
define('CONSTANTS', "\nConstants are...constant. Use when value will not change.");
echo CONSTANTS;
echo "<br />";
/* DATA TYPES*/

$string = "\nstring";
$integer = 1;
$floats = 1.1;
$bool = true;
$arrays = array(1,2,3,4);
null;
echo "<br />";

//concat with . or "" and {}
  $val1 = 'Hello';
  $val2 = 'World';
  $hello_world = "$val1 $val2";
  
  echo $val1 . $val2;
  echo "<br />";

  echo $hello_world;
  echo "<br />";
  
  $hello_world2 = "${val1} ${val2}";
  echo $hello_world2;
  echo "<br />";

  //escape with backslash \

  $escape = 'That\'s how you escape character';
  echo $escape;




?>