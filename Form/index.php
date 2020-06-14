<?php

////inputs
//setting them to nothing makes it easier to keep already entered value on submission fail. (otherwise well need ternery on the html value="" and that just looks ugly and hard to read)
$name = '';
$email = '';
$message = '';
//messages
$msg_success = 'Thank you. We will get back to you shortly.';
$msg_fail = 'Please fill all the fields before sending the message.';
$msg_class = '';
$feedback = '';

//check if submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  //get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  //check if all fields are filled
  if (!empty($name) && !empty($email) && !empty($message)) {

    //validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      //email check failed
      $feedback = "Invalid email";
      $msg_class = 'msg-fail';
    } else {
      $feedback = $msg_success;
      $msg_class = 'msg-success';
    }
  } else {
    $feedback = $msg_fail;
    $msg_class = 'msg-fail';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form</title>
  <link rel="stylesheet" href="../main.css">
</head>

<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
  <div class="container">
    <h1>Form</h1>

    <div class="form-container">
      <?php if ($feedback != '') : ?>
        <p class="<?= $msg_class; ?>">
          <?= $feedback ?>
        </p>

      <?php endif; ?>
      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?= $name; ?>">

        <label for="email">Email</label>
        <input type="text" name="email" value="<?= $email; ?>">

        <label for="message">Message</label>
        <textarea name="message" cols="30" rows="5"><?= $message; ?></textarea>

        <button type="submit" name="submit">send</button>
      </form>
    </div>
  </div>

</body>

</html>