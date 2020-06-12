<?php
////shorthand if/loops for using inline php
$is_logged_in = true;
$array = [1, 2, 3, 4, 5];


echo ($is_logged_in) ? "Logged in" : "Logged out";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>shorthands</title>
</head>

<body>
  <div>
    <?php if ($is_logged_in) : ?>
      <h2>Welcome user</h2>
    <?php else : ?>
      <h2>Welcomse guest</h2>
    <?php endif ?>

    <?php foreach ($array as $el) : ?>
      <?= $el ?>
      <!-- shorthand for gttingo into php and echo'ing at the same time -->
    <?php endforeach ?>
    <!-- same pattern for other loops -->
  </div>
</body>

</html>