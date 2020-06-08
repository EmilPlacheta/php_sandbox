<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>require/includes</title>
  <link rel="stylesheet" href="../main.css">
</head>

<body>
  <main>
    <?php include "inc/navigation.php" ?>
    <div class="container">
      <h2>Home Header</h2>
      <p>Navigation above is not part of the html. Its a separate php file that's <code>include</code>'d. Main difference from <code>require</code> is <code>include</code> will not stop the script and continue displaying the website when the included file is missing/has errors, while <code>require</code> will stop the script.<br /><br />

        <code>
          <\?php include "inc/navigation.php" ?> //allows oopsies
        </code>
        <br />
        <code>
          <\?php require "inc/navigation.php" ?> //does not allow oopsies
        </code>
      </p>
    </div>
  </main>
</body>

</html>