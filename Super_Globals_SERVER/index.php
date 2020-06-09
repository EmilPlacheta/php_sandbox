<?php include 'server_info.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>System Info</title>
  <link rel="stylesheet" href="../main.css">
</head>

<body>
  <div class="container">
    <h1>Server and file info</h1>
    <?php if ($server) : ?>
      <ul class="list">
        <?php foreach ($server as $key => $value) : ?>
          <li class="list-item">
            <?php echo $key; ?>:
            <?php echo $value; ?>
          </li>
        <?php endforeach; ?>
      </ul>

    <?php endif; ?>

    <div class="breathe-3"></div>

    <h1>Client info</h1>
    <?php if ($client) : ?>
      <ul class="list">
        <?php foreach ($client as $key => $value) : ?>
          <li class="list-item">
            <?php echo $key; ?>:
            <?php echo $value; ?>
          </li>
        <?php endforeach; ?>
      </ul>

    <?php endif; ?>
  </div>
</body>

</html>