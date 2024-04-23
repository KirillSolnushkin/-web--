<?php
$number = (int)$_POST['num'];
echo '<table border="2">';
for ($i = 1; $i <= 10; $i++) {
  echo '<tr>';
  if ($i % 2 == 0) {
    $c = "blue";
    $bg = "yellow";
  } else {
    $c = "yellow";
    $bg = "blue";
  }
  $output = $number . " * " . $i . " = " . $number * $i;
  echo '<td bgcolor=' . $c . '><font color=' . $bg . '>' . $output . '</font></td>';
  echo '</tr>';
}
echo '</table>';

