<?php


/*
  Filter Functions

  - filter_list()
  --- Returns A List Of All Supported Filters

  - filter_id(Filter_Name[Required])

  - filter_var(Value[Required], Filter[Optional], Options[Optional])
  --- Filters A Variable With A Specified Filter
*/

echo "<pre>";
// Return List Of All Supported Filters
print_r(filter_list());
echo "</pre>";

// You Can Use The Filter Id To Reference The Filter Name
echo filter_id("boolean") . "<br>"; // 258

$val = "0"; // True || 1 || "yes" || "on"

// Filter Variables With A Specified Filter
echo (filter_var($val, 258)) ? "All Data Checked" : "Data Not Checked";

echo "<hr>";

/*
  Filter Functions

  - filter_var(Value[Required], Filter[Optional], Options[Optional])
  --- Validate Filters

  ------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
  ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

  ------ FILTER_VALIDATE_URL
  ---------- Flag => FILTER_NULL_ON_FAILURE
  ---------- Flag => FILTER_FLAG_PATH_REQUIRED
  ---------- Flag => FILTER_FLAG_QUERY_REQUIRED

  ------ FILTER_VALIDATE_IP
  ---------- Flag => FILTER_NULL_ON_FAILURE
  ---------- Flag => FILTER_FLAG_IPV4
  ---------- Flag => FILTER_FLAG_IPV6

  ------ FILTER_VALIDATE_MAC
  ---------- Flag => FILTER_NULL_ON_FAILURE
*/

var_dump(filter_var(0, FILTER_VALIDATE_BOOL));

$bool = "Mos3aB"; // True | 1 | "yes" | "on"
// FILTER_VALIDATE_BOOL => Check The True And False Values
// FILTER_NULL_ON_FAILURE => Return NULL If The Value Is Not True Or False
var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));

echo "<br>";

$url = "https://elzero.org/?id=100";

var_dump(
  filter_var(
    $url,
    FILTER_VALIDATE_URL,
    ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]
  )
);

echo "<br>";

$ip = "192.168.2.1";

var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));

echo "<br>";

$mac = "00:00:5e:0d:53:af";

var_dump(filter_var($mac, FILTER_VALIDATE_MAC));

echo "<hr>";

/*
  Filter Functions

  - filter_var(Value[Required], Filter[Optional], Options[Optional])
  --- Validate Filters

  ------ FILTER_VALIDATE_EMAIL
  ---------- Flag => FILTER_NULL_ON_FAILURE

  ------ FILTER_VALIDATE_INT
  ---------- Flag => FILTER_NULL_ON_FAILURE
  ---------- Options => min_range
  ---------- Options => max_range
  ---------- Convert To Int On Success

  ------ FILTER_VALIDATE_FLOAT
  ---------- Flag => FILTER_NULL_ON_FAILURE
  ---------- Options => min_range
  ---------- Options => max_range
  ---------- Convert To Float On Success
*/

$email = "mos3ab696@gmail.com";
// FILTER_VALIDATE_EMAIL => Check If The Value Is An Email
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));

echo "<br>";

$int = "70";

var_dump(
  filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  )
);

echo "<br>";

$float = "90.50";

var_dump(
  filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  )
);

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