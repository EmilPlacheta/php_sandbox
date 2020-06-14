<?php

////Filters- validate and sanitize data

//check for posted data


//check if data was posted
if (filter_has_var(INPUT_POST, 'data')) {
  //echo 'data found';
} else {
  //echo 'no data';
}
//validate email address
if (filter_has_var(INPUT_POST, 'data')) {
  $email = $_POST['data'];

  //remove illegal characters
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  echo $email . '<br/>';
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'email is valid', '<br/>';
  } else {
    echo 'email is not valid', '<br/>';
  }
}
//sanitize into a number
$var = '5324jkhv6khj32v63l2hjv';
//var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

//prevent execution of script tags in the input
$var2 = '<script>alert("You\'ve been haxxed!")</script>';
//echo $var2;
//echo filter_var($var2, FILTER_SANITIZE_SPECIAL_CHARS);

$filters = [
  'data' => FILTER_VALIDATE_EMAIL,
  'data2' => [
    'filter' => FILTER_VALIDATE_INT,
    'options' => [
      'min_range' => 1,
      'max_rannge' => 100
    ]
  ]
];

print_r(filter_input_array(INPUT_POST, $filters));

$arr = [
  'name' => 'emil',
  'age' => 30,
  'email' => 'emil@gmail.com'
];

$filters2 = [
  'name' => [
    'filter' => FILTER_CALLBACK,
    'options' => 'ucwords'
  ],
  'age' => [
    'filter' => FILTER_VALIDATE_INT,
    'options' => [
      'min_range' => 1,
      'max_range' => 120
    ]
  ],
  'email' => FILTER_VALIDATE_EMAIL
];
////Filter whole array with several filters
//filter_var_arr($arg1,[$arg2])
//$arg1 - array to be filtered/sanitized
//$arg2 - array of keys from the $arg1. Each key, will be an associative array with 'filter' key and associated with type of filter. eg: 'filter' => FILTER_VALIDATE_EMIL. 
//We can aso add another nested associative array after 'filter', with 'options' key,
// like 'min_range' => [int] {check filters for their individual options}
print_r(filter_var_array($arr, $filters2));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Filters</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
  </form>
</body>

</html>