<?php $user_name = "Mosaab";
$score = 1000 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $user_name ?> Page
  </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #1f1f1f;
      color: #fff;
      padding: 20px;
    }
  </style>
</head>

<body>
  <h2>Wellcome
    <?php echo $user_name ?>
  </h2>
  <div>
    <?php echo $user_name ?> Score Is:
    <?php echo $score ?>
  </div>
  <div>
    <?php include("data.php") ?>
  </div>
  <hr>
  <?php
  /*
    Variables
    - Naming Rules + Info
    [1] Start With Dollar Sign $
    [2] Start With A Letter [a-z] Or [A-Z] Or Underscore
    [3] You Can Use Numbers Inside The Name
    [4] No Special Characters Allowed
    [5] Case Sensitive
    - Test Single And Double Quotes

    Search
    - Loosely Typed Language
  */

  $username = "Mos3aB";
  $Username = "Elsayed";

  echo $username;
  echo '<br>';
  echo $Username;
  echo '<br>';
  echo 'Hello $username';
  echo '<br>';
  echo "Hello $username";

  echo '<hr>';
  /*
  Variable Variable
  Takes The Value Of A Variable And Treats That As The Name Of A Variable
*/

  $a = "Mosaab";
  $$a = "Abdelkawy";
  $$$a = "Software Engineer";

  echo $a;
  echo "<br>";
  echo $$a;
  echo "<br>";
  echo $Mosaab;
  echo "<br>";
  echo $$$a;
  echo "<br>";
  echo $Abdelkawy;
  echo "<br>";

  echo "Hello {$$a} "; // $$a
  echo "<br>";
  echo "Hello {$$$a}"; // $$$a
  echo "<hr>";
  /*
  Assign Variable By Reference
  - By Default, Variables Are Always Assigned By Value
  - Assigned By Reference Make Variable Alias Or Point To Another

  Search
  - References Are Not Pointers
*/

  $a = "Osama";
  $b = &$a;
  $b = "Elzero";// $a = "Elzero"
  $a = "School"; // $b = "School"
  $b = "Academy"; // $a = "Academy"
  
  echo $a;
  echo '<br>';
  echo $b;

  echo '<hr>';

  /*
  Pre-Defined Variables

  Search
  - PHP Pre-Defined Variables
*/

  echo '<pre>';
  // print_r($_SERVER);
  echo $_SERVER["HTTP_CONNECTION"];
  echo '</pre>';

  // echo $_POST["username"];
  
  echo '<hr>';
  /*
    Constants
    - That Value Cannot Change During The Execution
    - Constants Always Uppercase
  */

  define("DB_NAME", "elzero");
  define("MAIN_NUMBER", 5);
  //define("MAIN_NUMBER", 10); // Error
  
  echo DB_NAME;
  echo '<br>';
  echo MAIN_NUMBER * 50;

  echo '<hr>';
  /*
    Pre-Defined Constants [Case Sensitive]
    - PHP_VERSION
    - PHP_OS_FAMILY
    - PHP_INT_MAX
    - DEFAULT_INCLUDE_PATH

    Magic Constants [Case Insensitive]
    - __LINE__
    - __FILE__
    - __DIR__

    Reserved Keywords
    - break
    - clone

    Search
    - PHP Predefined Constants
    - Compile Time vs Runtime
    - List of Reserved Words
    */

  define("CLONES", "MOS3AB");
  echo php_uname(); //information about the operating system PHP is running on
  echo '<br>';
  echo PHP_OS; //Operating system name
  echo '<br>';
  echo PHP_OS_FAMILY; //Operating system family
  echo '<br>';
  echo PHP_VERSION; //Current PHP version
  echo '<br>';
  echo PHP_INT_MAX; //Largest integer supported in this build of PHP
  echo '<br>';
  echo __LINE__; //The current line number of the file
  echo '<br>';
  echo __FILE__; //The full path and filename of the file
  echo '<br>';
  echo __DIR__; //The directory of the file
  echo '<br>';
  echo CLONES;

  function hello()
  {
    echo __FUNCTION__; //The function name
  }
  function sayhey()
  {
    return "Hello";
  }
  hello();
  echo '<br>';
  echo sayhey();
  ?>

  <!-- <form action="" method="post">
    <input type="text" name="username">
    <input type="submit" value="Send">
  </form> -->
</body>

</html>