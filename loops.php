<?php
/* LOOPS
    for
    while
    do..while
    foreach
  */

////for loop
//basic loop, same as JS, remember to prefix variables with $
for ($i = 0; $i <= 5; $i++) {
  echo "For loop " . $i;
  echo "<br/>";
};


////while loop
$i = 0;

while ($i <= 5) {
  echo "While loop " . $i;
  echo "<br/>";
  $i++;
}


////do ... while

$i = 0;
do {
  echo "Do... While loop " . $i;
  echo '<br />';
  $i++;
} while ($i <= 5);


////foreach
//meant to be used with arrays

$dogs = ['Barker', 'Vizi', 'Sooty'];

foreach ($dogs as $dog) {
  echo $dog;
  echo "<br />";
};

/* dogs.forEach(dog => {
  ....
})
 */

//looping through associative array (""object"")
//this will take a while to get used to

$doggos = [
  1 => 'Barker',
  2 => 'Vizi',
  3 => 'Sooty',
];

foreach ($doggos as $doggo => $name) {
  echo $name;
  echo "<br />";
}
