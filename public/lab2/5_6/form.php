<?php
$number = $_POST['num'];
$output = "";

if ($number % 2 === 0) {
  $output .= 'Число парне';
} else {
  $output .= 'Число непарне';
}

if ($number == intval($number)) {
  $output .= " , є цілим.";
} else {
  $output .= " , не є цілим.";
}

echo $output;
