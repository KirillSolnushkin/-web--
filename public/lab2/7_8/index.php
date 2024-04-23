<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Гра: відгадай число</title>
  <style>
    .red-text {
      color: red;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <?php
  $secret_number = 2;
  $res = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = $_POST['guess'];

    if ($guess == $secret_number) {
      $res = "<p class='red-text'>ПРАВИЛЬНО!</p>";
    } else {
      $res = "<p>Спробуй ще раз!";
      if ($guess > $secret_number) {
        $res .= " Загадане число менше.</p>";
      } else {
        $res .= " Загадане число більше.</p>";
      }
    }
    echo $res;
  }
  ?>

  <?php if (empty($message) || strpos($message, "неправильне") !== false) { ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="guess">Введіть число:</label>
      <input type="text" id="guess" name="guess" required><br><br>
      <button type="submit">Перевірка</button>
    </form>
  <?php } ?>
</body>

</html>