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
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [6, 7, 8, 9, 10];

//no spread as of yet, appapretnyl to be added.
//$all_numbers = [...$numbers1, ...$numbers2];

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


$about_me = [
  "name" => "Aisle Nevertell",
  "birth_year" => 1902,
  "favorite_food" => "pizza"
];

function calculateAge($person_arr)
{
  $current_year = date("Y");
  $age = $current_year - $person_arr["birth_year"];
  return $age;
}
?>
<h1>Welcome!</h1>
<h2>About me:</h2>
<?php
#Add your code here
echo "<h3>{$about_me["name"]}</h3>";
?>

<h2>Now tell me a little about you.</h2>