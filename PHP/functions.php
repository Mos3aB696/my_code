<?php
/*
  Function
  - Introduction And DRY Concept
  - Parameter
  - Argument
*/
function sayHello($name)
{
  echo "Hello $name<br>";
}

sayHello('Mos3aB');
sayHello('Jane');
sayHello('Ali');
echo '<hr>';
function say_hello($first_name, $last_name)
{
  echo "Hello $first_name $last_name<br>";
}

say_hello('Mos3aB', 'Abdelkawy');


function deep_freezer($item)
{
  if ($item === "Water") {
    echo "Make Ice <br>";
  } elseif ($item === "Coca Cola") {
    echo "Make It Cold <br>";
  } elseif ($item === "Fruits") {
    echo "Make It Fresh <br>";
  } else {
    echo "Unknown Item";
  }
}

deep_freezer("Water");
deep_freezer("Coca Cola");
deep_freezer("Fruits");
deep_freezer("Tv Remote");

echo '<hr>';
/*
  Function
  - Optional Return & Null
  - End After Return
*/
$prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

function get_number($num_one, $num_two)
{
  return $num_one + $num_two;
}

echo get_number(5, 10);
echo '<br>';
echo "{$prizes[3]}<br>";
$prize_number = get_number(2, 1);
var_dump($prize_number);
echo '<br>';
echo $prizes[$prize_number];

echo '<hr>';

/*
  Function
  - Default Parameter Value
  --- Using
  --- Test Data
  --- Skip Arguments
*/

function get_data($country = "Private Country", $name = "Private", $age = "Private", $address = "Private Address")
{
  // if ($address === "") {
  //   $address = "Private Address";
  // }
  $line_one = "Your Country Is $country And Your Name Is $name <br>";
  $line_two = "Your Age Is $age And You Live In $address <br>";
  return $line_one . $line_two;
}

// echo get_data(name: "Mos3aB", age: 22, country: "Egypt");
// echo get_data("USA", "Jane", 25, "New York");

echo '<hr>';

/*
  Function
  - Variable Arguments List
  --- func_num_args()
  --- func_get_arg(index)
  --- func_get_args()

  Spread Syntax In JS
*/

function calculate(...$nums)
{
  echo "Number Of Arguments: " . func_num_args() . "<br>";
  echo "Argument Index Number 6 Is " . func_get_arg(6) . "<br>";
  // echo "<pre>";
  print_r(func_get_args());
  // echo "<pre>";
  $result = 0;
  foreach (func_get_args() as $arg):
    $result += $arg;
  endforeach;
  echo "Total: $result";
  // echo "Argument Index Number 3 Is " . $nums[3] . ".<br>";
  // print_r($nums);
  // $result = 0;
  // foreach ($nums as $num):
  //   $result += $num;
  // endforeach;
  // echo $result;
}

// calculate(10, 20, 50, 30, 40, 50, 100, 200, 400);

echo '<hr>';

/*
  Function
  - Function Advanced Training
  -- Unpacking In Arguments

  Search
  - PHP Variadic Functions
  - Splat Operator
*/

$group_of_skills = ["HTML", "CSS", "JS", "PHP"];

function user_data($name, $country = "Private", ...$skills)
{
  echo "Hello $name Your Country Is $country <br>";
  foreach ($skills as $skill):
    echo "-- $skill <br>";
  endforeach;
}

// user_data("Mos3aB", "Egypt", "HTML", "CSS", "JS", "PHP");
// user_data("Osama", "Egypt", ...$group_of_skills);
// user_data("Ali", "Private", ...$group_of_skills);

echo '<hr>';

/*
  Function
  - Variable Function
  --- PHP Allow To Use Variable Like Function
  --- When You Append Parentheses () To Variable PHP Will Look For Function With That Name
  - Function Exists
  --- function_exists("Func Name")
*/

function one()
{
  return "One From Function";
}

// echo one();

$func1 = "one";

echo $func1();

echo '<br>';

function say_hello_to($someone)
{
  return "Hello $someone";
}

$func2 = "say_hello_to";

echo $func2("Osama");

echo '<br>';

function testing()
{
  return "Testing From Function";
}

if (function_exists("testing")) {
  echo testing();
} else {
  echo "Function Not Found";
}

echo '<br>';

// echo strlen("Elzero"); // 6

$func3 = "strlen";

echo $func3("Elzero");

echo '<hr>';

/*
  Function
  - Passing Arguments by Reference
  --- By Default, Function Arguments Are Passed By Value
  --- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
  --- To Change It Outside Pass The Argument By Reference

  - Return Type Declarations

  Search
  - PHP Strict Mode
*/

function add_five(&$number)
{
  $number += 5;
  return $number;
}

$n = 15;

echo add_five($n) . "<br>"; // 20

echo $n; // 20

echo '<br>';

function calc($n1, $n2): int
{
  return $n1 + $n2;
}

echo calc(10.5, 9.5);

echo '<br>';

echo gettype(calc(10.5, 9.5)); // Integer

echo '<hr>';

/*
  Function
  - Anonymous Function
  --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
  --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

  - Variable Inherit From Parent Scope
  - Variable Inherit By Reference From Parent Scope
  - Anonymous Function Can Be Passed To A Function
  - Anonymous Function Can Be Return From A Function

  Search
  - Closure
*/

$greet = function ($name) {
  echo "Hello $name";
};
$greet("Mos3aB");

echo '<br>';

$age = 22;

$user_info = function ($name) use ($age) {
  return "Hello $name Your Age Is $age";
};

echo $user_info("Mos3aB");

echo '<br>';

$nums = [1, 2, 3, 4, 5];

// Anonymous Function
$adding_ten = array_map(function ($num) {
  return $num + 10;
}, $nums);

echo "<pre>";
print_r($adding_ten);
echo "<pre>";
// Arrow Function
$adding_five = array_map(fn($num) => $num + 5, $nums);

echo "<pre>";
print_r($adding_five);
echo "<pre>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
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