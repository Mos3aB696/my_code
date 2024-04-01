<?php
/*
  Control Structure
  - Loop

  While
*/

// echo "1<br>";
// echo "2<br>";
// echo "3<br>";
// echo "4<br>";
// echo "5<br>";

// echo "1<br>2<br>3<br>4<br>5<br>";

$i = 1;

while ($i <= 3) {
  echo "$i ";
  $i++;
}
echo "<br>";

$a = 1;
while ($a <= 3):
  echo "$a ";
  $a++;
endwhile;

echo "<hr>";


/*
  Control Structure
  - Loop

  Do, While
*/

$i = 0;

while ($i <= 3) {

  echo "$i ";

  $i++;

}
echo "<br>";

do {

  echo "$i ";

  $i++;

} while ($i <= 3);

echo "<br>";
$index = 0;

while ($index <= 100) {

  echo "$index ";

  $index += 5;
}

echo "<hr>";

/*
  Control Structure
  - Loop

  For
  - Expression One Run Once At The First Of The Loop
  - In The Begining Of Iteration Expression Two Is Checked [If True Continue || Break]
  - At The End Of Iteration Expression Three Are Executed
*/

$i = 1;

while ($i <= 3) {
  echo "$i ";
  $i++;
}

echo '<br>';

echo '##### <br>';

for ($i = 1; $i <= 3; $i++) {
  echo "$i ";
}
echo '<br>';

echo '##### <br>';

$index = 1;

for (; ; ):

  if ($index == 4) {
    break;
  }

  echo "$index<br>";

  $index++;

endfor;

echo "<hr>";

/*
  Control Structure
  - Loop

  Foreach
*/

$countries = ["EG", "SA", "QA", "SY"];

echo "<pre>";
print_r($countries);
echo "<pre>";

foreach ($countries as $country) {
  echo "$country ";
}
echo "<br>";
$countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];
echo "<pre>";
print_r($countries_with_discount);
echo "<pre>";

foreach ($countries_with_discount as $country => $discount):
  echo "Your Country Is: $country, Your Discount Is: $discount%<br>";
endforeach;

echo "<hr>";

/*
  Control Structure
  - Loop

  Break, Continue
  - Break Ends Execution Of (For, Foreach, While, Do-while or Switch)
  - Skip Current Iteration
*/
foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

  if ($country == "USA") {
    break;
  }
  echo "{$country} ";
}
echo "<br>";
echo "########## <br>";

foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {
  if ($country == "USA") {
    continue;
  }
  echo "$country ";
}
echo "<hr>";

/*
  Control Structure
  - Including Files

  Include => Raise Warning If File Not Found And Continue Execution
  Require => Raise Warning If File Not Found And Stop Execution

  Include_once => Include File Once
  Require_once => Require File Once
*/

require ("test.php"); // $a=10
echo "$a<br>"; // 10

$a = 20;
require_once ("test.php"); // $a=10

echo "$a<br>"; // 20

echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
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