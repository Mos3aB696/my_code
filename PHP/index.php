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
  <?php
  echo "<div>Hello World!</div>";
  print "<div>Hello World!</div>";

  echo gettype("jhg");
  echo "<br>";
  echo gettype(1);
  echo "<br>";
  echo gettype(1.5);
  echo "<br>";

  var_dump((bool) 1);
  echo "<br>";
  echo nl2br("Multiplt
  Line
  To
  Print");

  echo "<br>";

  $name = "Mos3aB";

  // HereDoc
  echo <<<"Here"
  Hello World
  hbglj
  lkjhh 
  Spicail Charachter %%%%$$$ \\\\\\
  My Name is $name
  Here;

  echo "<br>";


  // NowDoc
  echo <<<'now'
  Hello World
  hbglj
  lkjhh 
  Spicail Charachter %%%%$$$ \\\\\\
  My Name is $name
  now;

  echo "test";

  echo <<<"navList"

  <ul>  
    <li>$name</li>
    <li>$name</li>
    <li>$name</li>
  </ul>
  navList;
  echo "<hr>";

  /*
  ============================================
  = Data Types
  = ----------
  = Type Juggling + Automatic Type Conversion
  ============================================
 */

  echo 1 + "2"; // 3
  echo '<br>';
  echo gettype(1 + "2"); // Integer
  echo '<br>';
  echo True; // 1
  echo '<br>';
  echo gettype(True); // Boolean
  echo '<br>';
  echo True + True; // 2
  echo '<br>';
  echo gettype(True + True); // Integer
  echo '<br>';
  echo 5 + '5 Lessons'; // 10 => Warning
  echo '<br>';
  echo gettype(5 + '5 Lessons'); // Integer => Warning
  echo '<br>';
  echo 10 + 15.5; // 25.5
  echo '<br>';
  echo gettype(10 + 15.5); // double => Float
  echo '<br>';
  echo gettype(10.5 + 15.5); // double => Float
  echo '<br>';

  echo "<hr>";

  // Type Casting
  echo 5 + (int) "5 Lessons";
  echo '<br>';
  echo 5 + (integer) "5 Lessons";
  echo '<br>';
  echo 5 + (integer) "5 Lessons";
  echo '<br>';
  echo gettype(5 + (int) "5 Lessons");
  echo '<br>';
  echo 10 + 15.5;
  echo '<br>';
  echo 10 + (int) 15.5;
  echo '<br>';
  echo gettype(10 + (int) 15.5);
  echo '<br>';
  echo 10.5 + 10.5;
  echo '<br>';
  echo gettype(10.5 + 10.5);
  echo '<br>';
  echo (int) 10.5 + (int) 10.5; // 20
  echo '<br>';
  echo gettype((int) 10.5 + (int) 10.5);
  echo '<br>';
  echo (int) (10.5 + 10.5); // 21
  
  ?>
</body>

</html>