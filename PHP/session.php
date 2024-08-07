<?php
/*
  Sessions
  - Session Is Stored On The Server
  - Session Store Only A User Key In Cookie To Know Its You
  - Key Are Generated By PHP Engine So Its Almost Impossible To Guess
  - You Need To Add It Before Any Output
*/

// Set The Session Id
// session_id('CustomID');

// Start The Session
session_start();

// Set The Session
$_SESSION['user_name'] = "Mosaab";
$_SESSION['id'] = 100;
$_SESSION['email'] = 'mos3ab696@gmail.com';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

// Return The Current Session Status

/**
 * PHP_SESSION_DISABLED = 0
 * PHP_SESSION_NONE = 1
 * PHP_SESSION_ACTIVE = 2
 */
echo session_status() . "<br>"; // 2

echo "<a href='session2.php'>Page_2</a><br>";
// Session Destroy
// session_destroy();


// Free All Session Variables
// session_unset();

echo "<hr>";

/*
  Sessions
  - Advanced Information
  - Edit
  - Views Count
*/


isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

echo "Views = " . $_SESSION['views'];
echo "<br>";
echo "<a href='session2.php'>About</a>";

// setcookie(session_name(), 'CustomID', time() - 1);
// session_destroy();


if ($_SERVER['REQUEST_METHOD'] === 'POST'):
  if ($_POST['user'] == 'Mos3aB'):
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['custom_id'] = 1005;
  endif;
endif;

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if (isset($_SESSION['user'])) {
  echo "Welcome " . $_SESSION['user'];
  echo "<br>";
  echo "<a href='logout.php'>logout</a>";
} else {

  ?>

  <form action="" method="POST">
    <input type="text" name='user'>
    <input type="submit" value="Send">
  </form>

<?php }
/*
  Header
  - Send RAW HTTP Header To Client To Manipulate Info Sent By Web Server Before Any Output
  - You Can Use To Control Cache Or Force File Download

  header(Header[Required], Replace[Optional] = True, Response_Code[Optional])
*/

// header("Refresh: 5; url=session.php"); // Refresh The Page Every 5 Seconds

// You Should Use exit() After header() To Stop The Script [For Security]
exit();
?>