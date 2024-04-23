<?php
$countries = [
  "Німеччина" => ["Населення" => 83000000, "Столиця" => "Берлін"],
  "США" => ["Населення" => 328200000, "Столиця" => "Вашингтон"],
  "Індія" => ["Населення" => 1200000000, "Столиця" => "Дели"],
];

echo "<h3>Таблиця 3x2:</h3>";
echo "<table border='1'>";
foreach ($countries as $country => $data) {
  echo "<tr><td>$country</td><td>".implode(', ', $data)."</td></tr>";
}
echo "</table>";

echo "<h3>Таблиця 2x3:</h3>";
echo "<table border='1'>";
$keys = array_keys($countries);
$values = array_values($countries);
echo "<tr>";
foreach ($keys as $key) {
  echo "<td>$key</td>";
}
echo "</tr>";
echo "<tr>";
foreach ($values as $v) {
  echo "<td>".implode(', ', $v)."</td>";
}
echo "</tr>";
echo "</table>";
