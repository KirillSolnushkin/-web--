<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Гра: відгадай число</title>
</head>

<body>
  <h1>Гра: відгадай число</h1>
  <?php
  $secret_number = 2;
  $output = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = $_POST['guess'];

    if ($guess == $secret_number) {
      $output = "Вгадали!";
    } else {
      $output = "Не вгадали!";
      if ($guess > $secret_number) {
        $output .= " Загадане число менше.";
      } else {
        $output .= " Загадане число більше.";
      }
    };
  }
  ?>
  <?php if (empty($output) || strpos($output, "неправильне") !== false) { ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="guess">Введіть ваше число:</label>
      <input type="text" id="guess" name="guess" required>
      <button type="submit">Відгадати</button>
    </form>
  <?php } ?>

  <?php if (!empty($output)) { ?>
    <script>
      alert("<?php echo $output; ?>");
    </script>
  <?php } ?>
</body>

</html>