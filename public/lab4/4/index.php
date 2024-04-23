<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
  <form action="" method="post">
    <label for="login">Логін:</label>
    <input type="login" id="filename" name="login" required><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br>
    <button type="submit" name="submit" value="login">Вхід</button>
    <button type="submit" name="submit" value="registration">Реєстрація</button>
  </form>

  <?php
  function outputText($message)
  {
    echo "<p>$message</p>";
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $action = $_POST["submit"];

    if ($action == "login") {
      if (file_exists($login)) {
        if (file_get_contents($login) == $password) {
          outputText("Доброго дня, $login!");
        } else {
          outputText("Пароль не правильний!");
        }
      } else {
        outputText("Такий користувач не зареєстрований!");
      }
    } elseif ($action == "registration") {
      if (file_exists($login)) {
        outputText("Такий користувач вже існує!");
      } else {
        file_put_contents($login, $password);
      }
    }
  }
  ?>
</body>

</html>