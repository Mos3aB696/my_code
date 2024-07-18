<?php
session_start();

echo 'ID[' . $_SESSION['id'] . "] =>" . ' Your Name Is: ' . $_SESSION['user_name'] .
  "Your Email Is: " . $_SESSION['email'] . "<br>";

isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

echo "Views = " . $_SESSION['views'];