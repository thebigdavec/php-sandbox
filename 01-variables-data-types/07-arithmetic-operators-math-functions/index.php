<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = null;

$num1 = 20;
$num2 = 7;

// Basic Maths
$output = "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
$output .= "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
$output .= "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
$output .= "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
$output .= "$num1 % $num2 = " . ($num1 % $num2) . "<br>";

// Assignment Operators
$num3 = 10;
// $num3 = $num3 + 20;
$num3 += 20;

// Built-in PHP functions
$output .= "<br>rand() " . rand() . "<br>";
$output .= getrandmax() . "<br>";
$output .= "rand(1, 10) " . rand(1, 10) . "<br>";

// Rounding numbers
$output .= "<br>round(2.4) " . round(2.4) . "<br>";
$output .= "<br>round(4.7) " . round(4.7) . "<br>";
$output .= "<br>ceil(2.4) " . ceil(2.4) . "<br>";
$output .= "<br>floor(4.7) " . floor(4.7) . "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl">
        <?= $output ?>
      </p>
    </div>
  </div>
</body>

</html>