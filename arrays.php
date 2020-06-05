<?php
/* 
Arrays:
-indexed
-associative
-multi-dimensional

*/


////Indexed
$names = array('John', 'Jane', "Jim");
//access array with [] and index 
echo $names[2];

//can also create arrays with [] instead of using array()
$cars = ['Honda', 'Toyota', 'Nissan'];
$numbers = [1, 2, 3, 4, 5];

//Adding to array at specific place
$cars[1] = 'Ford';
//small gotch'a: if asigning to index that already exists, it will be overwritten.

//or at the end
$cars[] = 'Vauxhall';

//check array length
count($cars);

//check array content
print_r($cars);


echo "<br/><br/>";

//check data type
//gives content type and index number [any variable, not just arrays]
var_dump($cars);

echo "<br/><br/>";

////Assciative arrays
//essentially JS look like JS objects, except for the fat arrow instead of :
$dog = [
  'name' => 'Peter Barker',
  'legs' => 4,
];

echo $dog['name'] . ' has ' . $dog['legs'] . ' legs.';
echo '<br/>';
echo "${dog['name']} has ${dog['legs']} legs";

echo '<br/>';
//adding new values to ass. arrays

$dog['tail'] = 1;
echo "${dog['name']} has ${dog['legs']} legs and ${dog['tail']} tail.";


echo '<br/>';
////Multi-dimensional array [nested array?]

$dog_pack = [
  ['Peter Barker', 'good boy',],
  ['Ben Sniffler', 'good boy']
];

echo $dog_pack[1][0];
