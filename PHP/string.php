<?php
/*
  String
  - Access Elements
  --- String Is Array Of Characters
  --- Access Elements By Index "Zero Based Indexing"
  --- Negative Index Are Allowed
  - Update Elements
  --- Update Current Elements
  --- Add New Elements

  Search
  - Single-Byte and Multi-Byte
*/

$str = "Programming";

echo "First Letter Is $str[0]<br>";
echo "4th Letter Is $str[3]<br>";
echo "Number Of Letters " . strlen($str) . "<br>";
// echo "Last Letter Is $str[-1]<br>";
echo "Last Letter Is {$str[strlen($str) - 1]}<br>";

echo $str . " | ";
$str[0] = "A";
echo $str . " | ";
$str[6] = "A";
echo $str;

echo "<hr>";

/*
String Functions
- lcfirst(String[Required])
- ucfirst(String[Required])
- strtolower(String[Required])
- strtoupper(String[Required])
- ucwords(String[Required], Delimiters[Optional])
- str_repeat(String[Required], Count[Required])
*/

//Make a string's first character lowercase
echo lcfirst("Hello World") . " | ";
//Make a string's first character uppercase
echo ucfirst("hello world") . " | ";
//Make a string uppercase
echo strtoupper("hello world") . " | ";
//Make a string lowercase
echo strtolower("HELLO WORLD") . " | ";
//Uppercase the first character of each word in a string
echo ucwords("hello world") . " | ";
echo ucwords("php is|awesome", "|") . "<br>";
//Repeat a string
echo str_repeat("Programmer ", 3);

echo "<hr>";

/*
  String Functions
  - implode(Separator[Optional], Array[Required]) => join() Is Alias
  - explode(Separator[Required], String[Required], Limit[Optional])
  - str_shuffle(String[Required])
  - strrev(String[Required])
  - trim(String[Required], CharsList[Optional])
  - ltrim(String[Required], CharsList[Optional])
  - rtrim(String[Required], CharsList[Optional])
  --- Space ""
  --- Tab \t
  --- New Line \n
  --- Carriage Return \r
  --- Vertical Tab "\x0B"
  --- NULL "\0"
*/

// implode => join (like JS) => Convert Array To String
$skills = ["HTML", "CSS", "JS", "PHP"];
echo implode(", ", $skills) . " | ";
echo implode(" ", $skills) . " | ";
echo implode("@", $skills) . " | ";
echo implode($skills) . " | ";
echo join(", ", $skills) . "<br>";

// explode => Convert String To Array (Like split, array.from in JS)

$text = "PHP is|Awesome Like JavaScript";
echo "<pre>";
print_r(explode(" ", $text));
echo "</pre>";
echo "<pre>";
print_r(explode("|", $text));
echo "</pre>";
echo "<pre>";
print_r(explode(" ", $text, 3));
echo "</pre>";
echo "<pre>";
// Negative Limit remove last elements
print_r(explode(" ", $text, -2));
echo "</pre>";


// Randomly shuffles a string (Like Random in JS)
echo str_shuffle("Programming") . " | ";
// String Reverse (Like Reverse in JS)
echo strrev("Programming") . "<br>";

// Strip whitespace (or other characters) from the beginning and end of a string
echo strlen((" Full Stack ")) . " | "; // With Spaces
echo strlen(trim(" Full Stack ")) . " | "; // Without Spaces
echo trim("@@Full Stack@@", "@") . " | ";
echo trim("#@@#Full Stack#@@", "#@") . " | ";
echo ltrim("#@@#Full Stack#@@", "#@") . " | ";
echo rtrim("#@@#Full Stack#@@", "#@") . "<br>";

echo "<hr>";

/*
  String Functions
  - chunk_split(String[Required], Length[Optional], End[Optional])
  - strlen(String[Required])
  - str_split(String[Required], Length[Optional])
  - strip_tags(String[Required], Allowed[Optional])
  - nl2br(String[Required], XHTML[Optional])
*/


//Split a string into smaller chunks
echo chunk_split("Programming Is Awesome", 3, "-") . " | ";
//Length of a string
echo strlen("Programming Is Awesome");
echo '<pre>';
// Converts a string to an array.
print_r(str_split("Programming", 5));
echo '</pre>';
echo "<h1>Hello</h1>";
echo strip_tags(("<h1>Hello</h1> <p>World</p>")) . "<br>";
echo strip_tags(("<h1>Hello</h1> <div>World</div>"), "<div>");
echo nl2br(("Hello\nWorld\n"), false) . "<br>";


echo "<hr>";

/*
  String Functions
  - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
  - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
  - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
  - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
  - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
*/

var_dump(strpos("Hello Hello", "H")); // 0
echo ' | ';
var_dump(strpos("Hello Hello", "H", 3)); // 6
echo ' | ';
var_dump(strpos("Hello Hello", "H", 6)); // 6
echo ' | ';
var_dump(strpos("Hello Hello", "h")); // False
echo ' | ';
var_dump(strpos("Hello Hello", "H", -2)); // False
echo ' | ';
var_dump(strpos("Hello Hello", "H", -5)); // 6
echo ' | ';
var_dump(strpos("Hello Hello", "H", -11)); // 0
echo ' | ';
var_dump(strrpos("Hello Hello", "H")); // 6
echo '<br>';
var_dump(strrpos("Hello Hello", "H", 5)); // 6
echo ' | ';
var_dump(stripos("Hello Hello", "h")); // 0
echo ' | ';
var_dump(strripos("Hello Hello", "h")); // 6
echo ' | ';
var_dump(substr_count("Hello Hello", "He")); // 2
echo ' | ';
var_dump(substr_count("Hello Hello", "He", 1)); // 1
echo ' | ';
var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
echo ' | ';
var_dump(substr_count("abcdabcda", "abcda")); // 1

echo "<hr>";
/*
  String Functions
  - parse_str(String[Required], Array[Required])
  - quotemeta(String[Required])
  - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
  --- STR_PAD_BOTH
  --- STR_PAD_LEFT
  --- STR_PAD_RIGHT
  - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
*/

// Parse a query string into variables
parse_str("name=Mos3ab&mail=mos3ab696@gmail.com&os=Linux&distro=Fedora", $query);
echo "<pre>";
print_r($query);
echo "</pre>";
echo $query["name"] . " | ";
echo $query["mail"] . " | ";
echo $query["os"] . " | ";
echo $query["distro"] . "<br>";

echo "Hello @ # > () + % ^ *" . "<br>";
// Return the string with meta characters quoted
echo quotemeta("Hello @ # > () + % ^ *") . "<br>";

// Return the string padded on the left, rigth or 
// both sides to the specified padding length
// Using when genrate serial number
echo str_pad("23", 6, 0, STR_PAD_BOTH) . "<br>";
echo str_pad("253", 6, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("2345", 6, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("63123", 6, 0, STR_PAD_LEFT) . "<br>";
echo str_pad("296313", 6, 0, STR_PAD_LEFT) . "<br>";
// Translate characters or replace substrings (Like Replace in JS)
echo strtr("S@ftware Engineering Is Amazing J@b", "@", "o") . "<br>";
$translation = ["@" => "o", "!" => "i", "#" => "a"];
echo ucwords(strtr("S@ftw#re Eng!neering !s #m#z!ng J@b", $translation));

echo "<hr>";


/*
  String Functions
  - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
  --- Its Case-Sensitive
  - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
*/

echo str_replace("@", "o", "Elzer@ Web Sch@@l", $r); // Elzero Web School
echo '<br>';
echo "Replaces Count Is $r"; // 3
echo '<br>';
echo str_replace(["#", "@"], "A", "E#zer@ Web Sch@@#"); // EAzerA Web SchAAA
echo '<br>';
echo str_replace(["#", "@"], ["l", "o"], "E#zer@ Web Sch@@#"); // Elzero Web School

echo '<pre>';
print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
echo '</pre>';

echo '<pre>';
print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
echo '</pre>';

echo '<pre>';
print_r(str_replace(["One", "Two", "Three"], [1, 2], ["One", "Two", "Three", "One", "One"]));
echo '</pre>';

echo '<pre>';
print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
echo '</pre>';


echo "<hr>";


/*
  String Functions
  - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
  --- $ Positive Number => Length Of String To Be Replaced
  --- $ Negative Number => Characters Left At The End After Replacement
  --- $ 0               => Insert Instead Of Replace
*/

echo substr_replace("OneTwo", 1, 0); // 1
echo '<br>';
echo substr_replace("OneTwo", 1, 3); // One1
echo '<br>';
echo substr_replace("OneTwo", 1, 5); // OneTw1
echo '<br>';
echo substr_replace("OneTwo", 1, -1); // OneTw1
echo '<br>';
echo substr_replace("OneTwo", 2, 2); // On2
echo '<br>';
echo substr_replace("OneTwo", 2, 2, 2); // On2wo
echo '<br>';
echo substr_replace("OneTwo", 2, 1, 4); // O2o
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero_Al eb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool eb_Sch
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
echo '<br>';
echo substr_replace("Elzero_Web_School", "@", 1, 0); // E@lzero_Web_School

echo "<pre>";
print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 0));
echo "</pre>";

echo "<hr>";

/*
  String Functions (Part 8)
  - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
  - ord(String[Required])
  - chr(Int[Required])
  - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
  --- Returns The Number Of Matching Characters
*/

$str = "Programming Is Awesome,
Anyone should learn it, makes you think out of the box";

echo ($str) . "<br>";
echo strlen($str) . "<br>";
// Wrap a string to a specific length
echo wordwrap($str, 20, '<br>') . "<br>";
// Convert the first byte of a string to a value between 0 and 255
echo ord("A"); // 65
echo "<br>";
//Generate a single-byte string from a number
echo chr(97); // a
echo "<br>";
// Calculate the similarity between two strings
echo similar_text("Elz@ero", "Elz_eroo");
echo "<br>";
echo similar_text("Elzero", "Elzeroo", $perc);
echo "<br>";
echo $perc;

echo "<hr>";

/*
  String Functions
  - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
  --- => Alias [strchr]
  --- Case-Sensitive
  - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
  --- Case-Insensitive
  - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
*/

// Find the first occurrence of a string
echo strstr("Programming Is Awesome", "Is", true) . "<br>"; // Programming
echo strstr("Programming Is Awesome", "gr") . "<br>"; // gramming Is Awesome
// echo strstr("Programming Is Awesome", "is") . "<br>";
var_dump(strstr("Programming Is Awesome", "is")); // False
echo "<br>";

// Case-insensitive strstr()
echo stristr("Programming Is Awesome", "is") . "<br>"; // Is Awesome

/* Formats a number with grouped thousands and optionally
decimal digits using the rounding half up rule.*/
echo number_format(1000000) . "<br>"; // 1,000,000
echo number_format(1000000, 2, '*', "_") . "<br>"; // 10,000,000.00

echo "<h1 style='color: red; text-align: center;'>
    ------------Finally Finish String File------------ </h1>"
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String</title>
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