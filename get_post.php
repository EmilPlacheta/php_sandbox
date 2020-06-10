<?php
if (isset($_GET['name'])) {
  $name = htmlentities($_GET['name']);
  echo $name;
  echo "<br/>";
}
if (isset($_GET['email'])) {
  $email = htmlentities($_GET['email']);
  echo $email;
  echo "<br/>";
}

/* if (isset($_REQUEST['name'])) {
  $name = htmlentities($_REQUEST['name']);
  echo $name;
  echo "<br/>";
}
if (isset($_REQUEST['email'])) {
  $email = htmlentities($_REQUEST['email']);
  echo $email;
  echo "<br/>";
} */


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET and POST</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="container">
    <h4>GET method</h4>
    <p>Submitted data gets passed through the URL.</p>
    <form method="GET" action="get_post.php">
      <div>
        <label for="name">Name</label>
        <input type="text" name="name">
      </div>
      <div>
        <label for="email">Email</label>
        <input type="text" name="email">
      </div>
      <div>
        <input type="submit" value="submit">
      </div>
    </form>
    <hr>
    <h4>POST method</h4>
    <p>Data is submitted through HTTP header, safer than GET method.</p>
    <?php
    if (isset($_POST['name2'])) {
      $name2 = htmlentities($_POST['name2']);
      echo $name2;
      echo "<br/>";
    }

    if (isset($_POST['email2'])) {
      $email2 = htmlentities($_POST['email2']);
      echo $email2;
      echo "<br/>";
    }
    ?>
    <form method="POST" action="get_post.php">
      <div>
        <label for="name2">Name2</label>
        <input type="text" name="name2">
      </div>
      <div>
        <label for="email2">Email2</label>
        <input type="text" name="email2">
      </div>
      <div>
        <input type="submit" value="submit">
      </div>
    </form>
  </div>

</body>

</html>