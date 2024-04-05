<?php

/*
  Math Functions

  - abs(Number[Required])
  --- Absolute Value => Non Negative Value

  - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
  --- mt_getrandmax() => Show Largest Possible Random Value
  --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

  - intdiv(dividend[Required], divisor[Required])
  --- Integer Division
  --- intdiv vs /

  - fmod(dividend[Required], divisor[Required])
  --- Floating Point Remainder (Modulo)
  --- fmod vs %
*/

// Return The Absolute Value Of A Number
echo abs(10) . "<br>";
echo abs(0) . "<br>";
echo abs(-20) . "<br>";

// Generate Random Number
echo rand() . "<br>";
// Show Largest Possible Random Value
echo mt_getrandmax() . "<br>";
echo rand(50, 60) . "<br>";

echo 10 / 5 . "<br>";
echo gettype(10 / 5) . "<br>";

echo 11 / 5 . "<br>";
echo gettype(11 / 5) . "<br>";
// Return The Integer Division Of Two Numbers
echo intdiv(11, 5) . "<br>";
echo gettype(intdiv(11, 5)) . "<br>";

echo 11.5 % 5 . "<br>"; // Remove The Decimal Part => 1
echo gettype(11 % 5) . "<br>";

// Return The Floating Point Remainder Of Two Numbers (Don't Remove The Decimal Part) => 1.5
echo fmod(11.5, 5) . "<br>";
echo gettype(fmod(11.5, 5)) . "<br>";

echo "<hr>";

/*
    Math Functions

    - ceil(Number[Required])
    --- Round Up To Integer

    - floor(Number[Required])
    --- Round Down To Integer
  */



echo ceil(5.99) . " | ";
echo ceil(5.49) . " | ";
echo ceil(5.10) . " | ";
echo ceil(5.01) . " | ";
echo ceil(-5.99) . "<br>"; // -5

echo floor(5.99) . " | ";
echo floor(5.49) . " | ";
echo floor(5.10) . " | ";
echo floor(5.01) . " | ";
echo floor(-5.99) . "<br>"; // -6

echo "<hr>";

/*
  Math Functions

  - round(Number[Required], Precision[Optional], Mode[Optional])
  --- Round Up To Integer
  --- Mode
  ------ PHP_ROUND_HALF_UP
  ------ PHP_ROUND_HALF_DOWN
  ------ PHP_ROUND_HALF_EVEN
  ------ PHP_ROUND_HALF_ODD

  - ceil, floor, round => Return Double
*/

echo round(5.99) . " | ";
echo round(5.50) . " | ";
echo round(5.49) . " | ";
echo round(5.10) . "<br>";

echo round(5.99, 1) . " | "; // 6
echo round(5.94, 1) . " | "; // 5.9
echo round(5.995, 2) . " | "; // 6
echo round(5.994, 1) . " | "; // 6
echo round(5.994, 2) . "<br>"; // 5.99

echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";
echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";

echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";

echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";
echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";

echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";
echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";

echo "<hr>";

/*
  Math Functions

  - sqrt(Number[Required])
  --- Square Root

  - min(array[Required]) || min(Values[Required])
  --- Find Lowest Value

  - max(array[Required]) || min(Values[Required])
  --- Find Highest Value
*/

// Return The Square Root Of A Number
echo sqrt(16) . " | "; // 4
echo sqrt(25) . " | "; // 5
echo sqrt(100) . "<br>"; // 10

// Find The Lowest Value
echo min(10, 20, -40, -30, 50) . "<br>"; // -40
echo min([10, 20, -40, -30, 50]) . "<br>"; // -40

echo "<pre>";
print_r(min([1, 3, 5], [1, 2, 6]));
echo "</pre>";

// Find The Highest Value
echo max(10, 20, -40, -30, 50) . "<br>"; // 50
echo max([10, 20, -40, -30, 50]) . "<br>"; // 50

echo "<pre>";
print_r(max([1, 3, 5], [1, 2, 6]));
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Math</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #1f1f1f;
      padding: 20px;
      color: #fff;
    }
  </style>
</head>

<body>

</body>

</html>