<?php
/*
  Control Structure
  - If, Elseif, Else  Basics

  Syntax
  if (Condition) {
    // If Condition Is True => Run Me
  } else {
    // If Condition Is False => Run Me
  }
*/

if (10 > 10) {
  echo "First Condition";
} elseif (10 > 8) {
  echo "Second Condition";
} else {
  echo "No";
}

echo '<hr>';

/*
  Control Structure
  - If, Elseif, Else => Real Life Examples

  3% To 30%
*/

// If

$page = "About";

if ($page == "About") {

  echo "This Is The Page";

}

echo '<br>';

// If, Else

$title = "Portfolio";

if ($title == "") {

  echo "Unknown Page";

} else {

  echo $title;

}

echo '<br>';

// If, Elseif, Else

$lang = "Arabic";

if ($lang == "Arabic") {

  echo 'مرحبا';

} elseif ($lang == "English") {

  echo 'Hello';

} elseif ($lang == "Spanish") {

  echo 'Hola';

} else {

  echo 'Unknown Language';

}

echo '<hr>';

// if ($_SERVER['REQUEST_METHOD'] === "POST") {

//   $lang = $_POST['lang'];
//   $user = $_POST['username'];

//   echo "{$lang} {$user}";

//   if ($lang == 'ar') {
//     header("Location: ar.php");
//   } elseif ($lang == 'en') {
//     header("Location: en.php");
//   } else {
//     echo "Unknown Language";
//   }
// }

echo '<hr>';

/*
  Control Structure
  - If, Elseif, Else <= Alternate Syntax

  60% To 80%
*/

// Ways To Write If, Elseif, Else
/*
if (10 > 5) {
  echo "Good";
} else {
  echo "Bad";
}

echo "<br>";

if (10 > 10)
  echo "Good";
else
  echo "Bad";

echo "<br>";

if (10 > 10) echo "Good";
else echo "Bad";

echo "<br>";

if (10 > 10) echo "Good"; else echo "Bad";

echo "<br>";
*/

// Alternate Syntax (Like Python Syntax But Added Semicolon)
if (10 > 10):
  echo "First";
elseif (10 > 10):
  echo "Second";
else:
  echo "Last";
endif;

echo "<hr>";
$name = "Mos3aB";
$country = "United States";
$price = 1000;
$is_student = true;
$is_programmer = true;
$country_discount = 0.2;
$student_discount = 0.2;
$programmer_discount = 0.1;

if ($country == "Egypt") {
  if ($is_student == true) {
    if ($is_programmer == true) {
      echo "Hello $name";
      echo "<br>";
      echo "Price Before Discount: " . $price;
      echo "<br>";
      echo "Student Discount: " . $price * $student_discount;
      echo "<br>";
      echo "Programmer Discount: " . $price * $programmer_discount;
      echo "<br>";
      echo "Country Discount: " . $price * $country_discount;
      echo "<br>";
      echo "Total Price: " . ($price - $price * ($student_discount + $programmer_discount + $country_discount));
    } else {
      echo "Hello $name";
      echo "<br>";
      echo "Price Before Discount: " . $price;
      echo "<br>";
      echo "Student Discount: " . $price * $student_discount;
      echo "<br>";
      echo "Country Discount: " . $price * $country_discount;
      echo "<br>";
      echo "Total Price: " . ($price - $price * ($student_discount + $country_discount));
    }
  } else {
    echo "Hello $name";
    echo "<br>";
    echo "Price Before Discount: " . $price;
    echo "<br>";
    echo "Country Discount: " . $price * $country_discount;
    echo "<br>";
    echo "Total Price: " . ($price - $price * $country_discount);
  }
} else {
  echo "Hello $name";
  echo "<br>";
  echo "No Discount";
  echo "<br>";
  echo "Total Price: {$price}";
}

echo "<hr>";

/*
  Control Structure
  - Ternary Operator => Short If
*/

$a = 10;

if ($a > 8) {
  echo "Good";
} else {
  echo "Bad";
}
echo '<br>';

// Condition ? True : False;
echo $a > 8 ? "Good" : "Bad";
echo '<br>';

echo "I Love PHP Because Its A ";
if ($a > 8) {
  echo "Good";
} else {
  echo "Bad";
}
echo " Language";
echo '<br>';

echo "I Love PHP Because Its A " . ($a > 8 ? "Good" : "Bad") . " Language";
echo '<br>';

$result = $a > 8 ? "Good" : "Bad";
echo "I Love PHP Because Its A $result Language";

echo '<hr>';

/*
  Control Structure
  - Switch

  Syntax
  switch (expression) {
    Case 1:
      // Code Block 1
      break;
    Case 2:
      // Code Block 2
      break;
    Case 3:
      // Code Block 3
      break;
    Default:
      // Default Code Block
  }
*/

$day = "Sat";

switch ($day) {

  case "Sat":
    echo "Hello Today Is $day We Are Open From 10:16";
    break;

  case "Sun":
    echo "Hello Today Is $day We Are Open From 12:18";
    break;

  case "Mon":
  case "Thu":
    echo "Hello Today Is $day We Are Open From 08:12";
    break;

  default:
    echo "We Are Closed Today";
}

echo '<hr>';
?>

<?php if (10 > 3) { ?>
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
    <!-- 
    <form action="" method="GET">
      <input type="text" name="username">
      <select name="lang">
        <option value="ar">Arabic</option>
        <option value="en">English</option>
        <option value="es">Spanish</option>
      </select>
      <input type="submit" value="Go">
    </form> -->
  </body>

  </html>
<?php } ?>