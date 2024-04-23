<?php
$login = $_POST['login'];
$password = $_POST['password'];
$authUsers = array(
  "log1" => array("Рамський Петре Івановичу", "123"),
  "log2" => array("Іванов Іван Іванович", "123"),
  "log3" => array("Петров Петр Петрович", "123"),
  "log4" => array("Любченко Любченко Любченкович", "123"),
);

if (array_key_exists($login, $authUsers)) {
  [$name, $pswd] = $authUsers[$login];

  switch ($login) {
    case 'log1':
      if ($password === $pswd) {
        echo "<p>Доброго дня, $name!</p>";
      } else {
        echo "<p>Введений неправильний пароль для користувача $name.</p>";
      }
      break;
    case 'log2':
      if ($password === $pswd) {
        echo "<p>Доброго дня, $name!</p>";
      } else {
        echo "<p>Введений неправильний пароль для користувача $name.</p>";
      }
      break;
    case 'log3':
      if ($password === $pswd) {
        echo "<p>Доброго дня, $name!</p>";
      } else {
        echo "<p>Введений неправильний пароль для користувача $name.</p>";
      }
      break;
    case 'log4':
      if ($password === $pswd) {
        echo "<p>Доброго дня, $name!</p>";
      } else {
        echo "<p>Введений неправильний пароль для користувача $name.</p>";
      }
      break;
    default:
      echo "<p>Вибачте, ви у нас не зареєстровані.</p>";
      break;
  }
} else {
  echo "<p>Вибачте, ви у нас не зареєстровані.</p>";
}
