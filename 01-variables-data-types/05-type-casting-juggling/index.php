<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';

$result = $number1 + $number2;
$result = $number1 + $number3; // int (string to int)
$result = $number3 + $number3; // int (string to int)

$result = $number1 + $number2 . $number3; // string (int to string)
$result = $number1 + null;

$result = (string) $number1;

var_dump($result);
?>

<style>
body {
  font-size: 3rem;
}
</style>