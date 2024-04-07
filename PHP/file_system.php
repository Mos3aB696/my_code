<?php
/*
  File System Functions
  - disk_total_space()
  --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
  - disk_free_space() || diskfreespace()
  --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
  - file_exists(Path)
  --- Checks If A File Or Directory Exists
  - filesize(File_Name)
  --- Get Space In Bytes

*/
echo "The Total Size Of Life Directory Is: " .
  round(disk_total_space("/mnt/Life") / (1024 * 1024 * 1024)) . " GB" . "<br>";

echo "The Free Size Of Life Directory Is: " .
  round(disk_free_space("/mnt/Life") / (1024 * 1024 * 1024)) . " GB" . "<br>";

echo "The Total Size Of Genral Directory Is: " .
  round(disk_total_space("/mnt/Genral") / (1024 * 1024 * 1024)) . " GB" . "<br>";

echo "The Free Size Of Genral Directory Is: " .
  round(disk_free_space("/mnt/Genral") / (1024 * 1024 * 1024)) . " GB" . "<br>";

// Check If A File Or Directory Exists
var_dump(file_exists("/mnt/Life/OS")) . "<br>";

// echo filesize("/mnt/Life/tesst.txt") . " Bytes" . "<br>";

// You Should Check If The File Exists Before Make Any Operation On It.
if (file_exists("/mnt/Life/test.txt")):
  echo filesize("/mnt/Life/test.txt") . " Bytes" . "<br>";
else:
  echo "File Not Found" . "<br>";
endif;

echo "<hr>";

/*
  File System Functions
  - is_dir(Name)
  --- Tells If The Filename Is A Directory
  - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
  --- Permissions Is Ignored On Windows
  --- Permissions Is Octal Number Start With 0
  ------ Second Number Is => Owner Permission
  ------ Third Number Is => User Group Permission
  ------ Fourth Number Is => Others Permissions
  - rmdir(Name[Required], Context[Optional])
*/

// Check If The File Is A Directory
var_dump(is_dir("test")) . "<br>";


if (!file_exists("test/files/photos/")):
  // Create A Directory With Permissions And Sub Directories
  mkdir("test/files/photos/", 0700, true);
endif;

// Remove Directory
// rmdir("test/files/photos/");

echo "<hr>";

/*
  File System Functions
  - chmod(File[Required], Mode[Required])
  --- Change Mode
  - fileperms(Name)
  --- Gets File Permissions
  - clearstatcache()
  --- Clear Cache

  - You Can Change Owner chown()
  - You Can Change Group chgrp()

*/

// decoct => Convert Decimal To Octal
// fileperms => Get File Permissions
echo decoct(fileperms("test/files/photos/")) . "<br>";

echo "<hr>";


/*
  File System Functions
  - basename(Path[Required], Suffix[Optional])
  --- Returns Trailing Name Component Of Path
  - dirname(Path[Required], Levels[Optional] = 1)
  --- Returns A Parent Directory's Path
  --- Levels => Number of Parent Directories To Go Up
  - realpath(Path[Required])
  --- Returns Absolute Path
  - pathinfo(Path[Required], Flags[Optional]) => Return Array
  --- PATHINFO_DIRNAME
  --- PATHINFO_BASENAME
  --- PATHINFO_EXTENSION
  --- PATHINFO_FILENAME
*/

// basename => Get The File Name
// suffix => Remove The Suffix From The File Name
echo basename("file_system.php", ".php") . "<br>";
echo basename(__FILE__) . "<br>";
// Return The Parent Directory
echo dirname(__FILE__) . "<br>";
echo dirname(__FILE__, 5) . "<br>";
// Return The Absolute Path
echo realpath(__FILE__) . "<br>";
echo "<pre>";
// Return All Information About The Path
print_r(pathinfo(__FILE__));
echo "</pre>";

// pathinfo => Return Array
// You Can Get The Values By The Key Or By Using Flags
echo pathinfo(__FILE__)['dirname'] . "<br>";
echo pathinfo(__FILE__)['extension'] . "<br>";
echo pathinfo(__FILE__, PATHINFO_FILENAME);

echo "<hr>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #1f1f1f;
      padding: 20px;
      color: #fff;
    }
  </style>
  <title>File System</title>
</head>

<body>

</body>

</html>