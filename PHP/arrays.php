<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
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
  <?php
  var_dump([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);


  echo "<br>";
  echo "<pre>";
  // Dumps information about a variable
  var_dump([
    "name" => "Mos3aB",
    "age" => 22,
    "job" => "Web Developer"
  ]);
  echo "</pre>";


  echo "<br>";
  echo "<pre>";
  // Prints human-readable information about a variable
  print_r([
    "name" => "Mos3aB",
    "age" => 22,
    "job" => "Web Developer",
    "Egypt",
    "Cairo",
    // Make override to the element has the same key [1]
    True => "Yes",
    5 => "Five",
    // start count from the last index
    "Hello World",
    2 => "Two", // Not Sorted
  
    "School Friends" => [
      "Ahmed",
      "Mohamed",
      "Ali",
      "Best Friends" => [
        "Ibrahim",
        "Mohab",
        "Amira",
      ]
    ]
  ]);
  echo "</pre>";

  echo "<hr>";

  /*
  Array Functions (Part One)

  - array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
  --- Split An Array Into Chunks [Return A Multidimensional Indexed Array]
  --- Preserve_Key
  ------ [False => Default] Reindex The Keys
  ------ [True] Preserve The Keys

  - array_change_key_case(Array[Required], Case[Optional])
  --- Changes The Case Of All Keys In An Array
  --- Case
  ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
  ------ [CASE_UPPER] Changes The Keys To Uppercase

  - array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])
  --- Creates An Array By Using One Array For Keys And Another For Its Values

  - array_count_values(Array[Required])
  --- Counts All The Values Of An Array

*/

  $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];

  echo '<pre>';
  print_r(array_chunk($friends, 2));
  echo '</pre>';

  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  echo '<pre>';
  print_r(array_chunk($countries, 2, True));
  echo '</pre>';

  echo '<pre>';
  print_r(array_change_key_case($countries, CASE_UPPER));
  echo '</pre>';

  $keys = ["A", "O", "K"];
  $values = ["Ahmed", "Osama", "Kamal"];

  echo '<pre>';
  print_r(array_combine($keys, $values));
  echo '</pre>';

  $counting = ["B", "A", "A", "B", "B", "B", "C"];

  echo '<pre>';
  print_r(array_count_values($counting));
  echo '</pre>';

  echo "<hr>";

  /*
  Array Functions (Part Two)

  - array_reverse(Array[Required], Preserve[Optional])
  --- Reverse Array Elements

  - array_flip(Array[Required])
  --- Exchange Keys With Its Values

  - count(Array[Required], Mode[Optional])
  --- Count Array Elements
  --- Mode
  ------ 0 => Default => Does Not Count Elements Of Multidimensional Arrays
  ------ 1 => Count Elements Of Multidimensional Arrays

  - in_array(Search[Required], Array[Required], Type[Optional])
  --- Checks If A Value Exists In An Array

  - array_key_exists(Key[Required], Array[Required])
  --- Check If Key Is Exists

*/

  $team = ["Ahmed", "Osama", "Kamal", "Sameh", "Mahmoud", ["Amira", "Amr"]];

  echo '<pre>';
  print_r($team);
  echo '</pre>';

  echo '<pre>';
  // Reverse Array Elements And Indexes
  print_r(array_reverse($team));
  echo '</pre>';

  echo '<pre>';
  // Reverse Array Elements And Keep Indexes
  print_r(array_reverse($team, true));
  echo '</pre>';

  $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
  echo "<pre>";
  // Exchange Keys With Its Values
  print_r(array_flip($countries));
  echo "</pre>";

  $counting_two = [
    "A",
    "B",
    "A",
    [1, 2, 3]
  ];
  // Count Array Elements
  echo "Normal Count Without Multidimensional Array: " . count($counting_two) . '<br>';
  echo "Count With Multidimensional Array: " . count($counting_two, 1) . '<br>';

  $search = ["1", 2, 3, 4];

  if (in_array(1, $search)) {
    echo "The Element Is Found";
  }

  echo '<br>';

  $courses = [
    "Javascript" => 95,
    "PHP" => 100,
    "HTML" => 60,
    "CSS" => 65
  ];

  if (array_key_exists("PHP", $courses)) {
    echo "The Course Is Found And The Price Is: " . $courses["PHP"];
  }
  ?>

</body>

</html>