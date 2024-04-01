<?php
// Create Count Function
function my_count($array)
{
  $count = 0;

  foreach ($array as $val):
    $count++;
  endforeach;

  return $count;
}

// Combine two arrays into one array
function my_array_combine($keys, $values)
{
  if (my_count($keys) != my_count($values))
    throw new ErrorException("The number of keys and values must be equal");

  $final_result = [];

  for ($i = 0; $i < my_count($keys); $i++)
    $final_result[$keys[$i]] = $values[$i];

  return $final_result;
}

$keys = ["M", "O", "S"];
$values = ["Mos3aB", "Osama", "Sayed"];

echo '<pre>';
print_r(my_array_combine(($keys), ($values)));
echo '</pre>';
echo "<hr>";
// Create Array Count Values Function
function my_array_count_values($array)
{
  $final_result = [];

  foreach ($array as $val):
    if (!isset($final_result[$val]))
      $final_result[$val] = 0;

    $final_result[$val]++;
  endforeach;

  return $final_result;
}

$counting = ["A", "B", "A", "C", "B", "B", "A"];

echo "<pre>";
print_r(my_array_count_values($counting));
echo "</pre>";

echo "<hr>";

// Create Array Reverse Function
function my_array_reverse($array, $preserve = false)
{
  // Set Main Variables
  $final_result = [];
  $length = my_count($array);
  $keys = array_keys($array);
  $values = array_values($array);

  // Check If Preserve Is True
  if ($preserve):
    for ($i = $length - 1; $i >= 0; $i--):
      $final_result[$keys[$i]] = $values[$i];
    endfor;
    return $final_result;
  endif;

  // If Preserve Is False
  for ($i = $length - 1; $i >= 0; $i--) {
    $final_result[] = $array[$i];
  }
  return $final_result;
}

$team = ["Ahmed", "Osama", "Kamal", "Sameh", "Mahmoud", ["Amira", "Amr"]];
echo "<pre>";
print_r(my_array_reverse(($team)));
echo "</pre>";

echo "<pre>";
print_r(my_array_reverse($team, true));
echo "</pre>";

echo "<hr>";

// Create Array Flip Function
function my_array_flip($array)
{
  $keys = array_keys($array);
  $values = array_values($array);
  $final_result = [];

  for ($i = 0; $i < my_count($array); $i++):
    $final_result[$values[$i]] = $keys[$i];
  endfor;

  return $final_result;
}
$test_flip = ["A" => "Ahmed", "O" => "Osama", "K" => "Kamal"];
echo "<pre>";
print_r(my_array_flip($test_flip));
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Implementation Functions</title>
</head>

<body>

</body>

</html>