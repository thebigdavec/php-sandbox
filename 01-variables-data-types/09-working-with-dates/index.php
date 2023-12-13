<?php
// Working with dates and times

$output = null;

// Date
$output .= "date('d');  <em>//" . date('d') . "</em><br>";

// Time
$output .= "<br>time();  <em>//" . time() . "</em><br>";

// Date and time
$output .= "<br>date('d/m/Y');  <em>//" . date('d/m/Y') . "</em><br>";
$output .= "date('d/m/y h:i:s');  <em>//" . date('d/m/y h:i:s') . "</em><br>";

// strtotime
$output .= "<br>strtotime('now');  <em>//" . strtotime('now') . "</em><br>";
$output .= "strtotime('next Monday');  <em>//" . strtotime('next Monday') . "</em><br>";
$output .= "strtotime('+2 Months');  <em>//" . strtotime('+2 Months') . "</em><br>";
$output .= "date('d/m/Y', strtotime('+2 Months'));  <em>//" . date('d/m/Y', strtotime('+2 Months')) . "</em><br>";

// month in words
$output .= "<br>date('d/m/Y');  <em>//" . date('d/m/Y') . "</em><br>";
$output .= "date('d F Y');  <em>//" . date('d F Y') . "</em><br>";
$output .= "date('d M Y', strtotime('+2 Months'));  <em>//" . date('d M Y', strtotime('+2 Months')) . "</em><br>";

// The time now
$output .= "<br>date('h:i:s a');  <em>//" . date('h:i:s a') . "</em><br>";
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
      <!-- Output -->
      <p class="text-xl">
        <?php echo $output; ?>
      </p>
    </div>
  </div>
</body>

</html>