<?php

/*
  Cookies

  - Examples
  --- Popup
  --- Custom Settings
  --- Remember Me => Login

  - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
  --- Name
  --- Value
  --- Expire
  --- Path
  --- Domain
  --- Secure
  --- HTTP_Only
*/


/*
  Cookies
  - Modify => Just Edit The Value And Set It Again
  - Delete => Set The Expire Time To The Past
  - Add Array
*/

setcookie("test", "light", time() - 1); // Delete Cookie
setcookie("popup", "hidden", strtotime("+2 months"));
setcookie("style[mode]", "dark", strtotime("-1 week"));
setcookie("style[color]", "red", strtotime("-1 week"));
setcookie("style[font-family]", "cairo", strtotime("-1 week"));
setcookie("style[font-weight]", "bold", strtotime("-1 week"));

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE['popup'])) {
  echo $_COOKIE['popup'] . "<br>";
}

// if (isset($_COOKIE['style'])):
//   echo "Mode: " . $_COOKIE['style']['mode'] . "<br>";
//   echo "Color: " . $_COOKIE['style']['color'] . "<br>";
//   echo "Font Family: " . $_COOKIE['style']['font-family'] . "<br>";
//   echo "Font Weight: " . $_COOKIE['style']['font-weight'] . "<br>";
// endif;
echo "<hr>";

if (isset($_COOKIE['background'])):
  echo "<style> body { background-color: " . $_COOKIE['background'] . " }</style>";
endif;

if (isset($_COOKIE['color'])):
  echo "<style> body {color: " . $_COOKIE['color'] . " }</style>";
endif;

if ($_SERVER['REQUEST_METHOD'] == 'POST'):
  setcookie('background', $_POST['bg-color'], strtotime("+1 week"));
  setcookie('color', $_POST['color'], strtotime("+1 week"));
  header('Location: ' . $_SERVER['REQUEST_URI']);
  exit();
endif;

echo "<hr>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

?>

<form action="" method='POST'>
  <label for="bg-color">Background Color</label>
  <input type="color" name="bg-color">
  <label for="color">Color</label>
  <input type="color" name="color">
  <br>
  <input type="submit" value="Choose">
</form>