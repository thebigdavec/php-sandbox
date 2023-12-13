<?php
// String functions

$output = null;

// String counting
$output = "strlen('Hello World!'); <em>//" . strlen('Hello World!') . "</em><br>";
$output .= "str_word_count('Hello World!'); <em>//" . str_word_count('Hello World!') . "</em><br>";

// String position
$output .= "<br>strpos('Hello World!', 'World'); <em>//" . strpos('Hello World!', 'World') . "</em><br>";

// Substring
$output .= "<br>substr('Hello World!', 6, 5); <em>//" . substr('Hello World!', 6, 3) . "</em><br>";

// String replace
$output .= "<br>str_replace('World', 'Universe', 'Hello World!'); <em>//" . str_replace('World', 'Universe', 'Hello World!') . "</em><br>";

// String case
$output .= "<br>strtolower('Hello World!'); <em>//" . strtolower('Hello World!') . "</em><br>";
$output .= "strtoupper('Hello World!'); <em>//" . strtoupper('Hello World!') . "</em><br>";

// ucwords
$output .= "<br>ucwords('hello world!'); <em>//" . ucwords('hello world!') . "</em><br>";

// trim
$output .= "<br>trim(' Hello World! '); <em>//" . trim(' Hello World! ') . "</em><br>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
  <style>
  em {
    color: #0b0;
    /* opacity: .5; */
  }
  </style>
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