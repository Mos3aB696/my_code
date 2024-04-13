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

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode
  --- [r] For Read => Pointer At The Beginning
  --- [r+] For Read & Write => Pointer At The Beginning
  --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
  --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

  - fgets(File[Required], Length[Optional])
  --- Get A Line From An Open File
  --- Length => Number Of Bytes To Read || End Of Line If No Length
  - fread(File[Required], Length[Required])
  --- Get A Data From An Open File
  --- Length => Maximum Number Of Bytes To Read
  - fclose(File[Required])
  --- Closes An Open File Pointer
*/

// Open File Or URL
$handle = fopen("test.txt", 'r+');
/**
 * Note That:
  * - fgets() => Don't Read From The Beginning Of The File,
      But Read From The Last Position Of The Pointer (In This Case 6 [Not Inculde Hello])
 */
// Get A Line From An Open File
echo fgets($handle, 6) . "<br>"; // Hello
// Get A Data From An Open File
echo fread($handle, 500) . "<br>"; // From Text Hello World
// Close The File (You Should Close The File After You Finish)
fclose($handle);

echo "<hr>";
/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode

  --- [a] For Write => Pointer At The End + Create If Not Exists
  --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
  --- [x] Create + Open For Write => Pointer At The Beginning
  --- [x+] Create + Open For Read & Write => Pointer At The Beginning

  - fwrite(File[Required], String[Required], Length[Optional])
  --- Write To An Open File
  --- Length => Maximum Number Of Bytes To Write
*/
$handle = fopen("test.txt", 'a+');

// Write To An Open File
fwrite($handle, "\nPHP Is Awesome", 0);
// Move The Pointer To The Beginning
rewind($handle);
// You Can Read All Data Now
echo fread($handle, 500);
// fwrite($handle, "\nPHP Is Awesome", 10);
// If File Exists, It Will Not Create It, And Raise An Error
// $handle = fopen("test.txt", 'x');
fclose($handle);
echo "<hr>";


/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])


  --- Mode
  --- [r] For Read => Pointer At The Beginning
  --- [r+] For Read & Write => Pointer At The Beginning
  --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
  --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
  --- [a] For Write => Pointer At The End + Create If Not Exists
  --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
  --- [x] Create + Open For Write => Pointer At The Beginning
  --- [x+] Create + Open For Read & Write => Pointer At The Beginning

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists
  ------ No Truncation
  ------ Pointer At The Beginning
  --- [c+] For Read & Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer
*/

echo "<pre>";
print_r(file("test.txt"));
echo "</pre>";
echo count(file("test.txt")) . "<br>";

$handle = fopen("test.txt", 'c+');
$line = 1;
while (!feof($handle)):
  echo "Line $line =>" . fgets($handle) . "<br>";
  $line++;
endwhile;

rewind($handle);

for ($i = 0; $i < count(file("test.txt")); $i++):
  echo fgets($handle) . " | ";
endfor;

fclose($handle);

echo "<hr>";


/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File

  - ftell(File[Required])
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]
*/

$handle = fopen("test.txt", 'r');
// Return The Current Pointer Position
echo ftell($handle) . "<br>"; // 0
echo fgets($handle) . "<br>";
echo ftell($handle) . "<br>"; // 16
echo fgets($handle) . "<br>";
echo ftell($handle) . "<br>"; // 28
echo fgets($handle) . "<br>";
echo ftell($handle) . "<br>"; // 42

fseek($handle, -7, SEEK_END);

// Set The Pointer Position To Any Position You Want!!!
echo fgets($handle) . "<br>";

rewind($handle);
echo ftell($handle) . "<br>"; // 0

// Get String Length (Bytes)
echo mb_strlen("Awesome") . "<br>"; // 16

fclose($handle);
echo "<hr>";

/*
  File System Functions

  - glob(Pattern[Required], Flags[Optional])
  --- Find Pathnames Matching A Pattern And Return Array

  - rename(Old[Required], New[Required]) => Move
  --- Renames A File Or Directory

  - copy(Old[Required], New[Required], Context[Optional])
  --- Copy A File

  - unlink(File[Required], Context[Optional])
  --- Delete A File

  Same Concept
  - opendir()
  - readdir()
  - closedir()
*/

echo "<pre>";
// Find Pathnames Matching A Pattern And Return Array
print_r(glob("Old/*"));
echo "</pre>";
echo "<pre>";
// Find Pathnames Matching A Pattern And Return Array
print_r(glob("New/*"));
echo "</pre>";

// Rename In Same Place
// rename("Old/work.Kdenlive", "Old/work_2.txt");

// Rename In Another Place
// rename("Old/main.py", "New/base.py");

// Move Without Rename
// rename("Old/work_2.txt", "New/work_2.txt");

// Copy Without Rename
// copy("Old/base.c", "New/base.c");

// Copy With Rename
// copy("Old/index.js", "New/index_2.js");

// Unlink => Delete File
// unlink("New/index_2.js");

echo "<pre>";
// Find Pathnames Matching A Pattern And Return Array
print_r(glob("Old/*"));
echo "</pre>";
echo "<pre>";
// Find Pathnames Matching A Pattern And Return Array
print_r(glob("New/*"));
echo "</pre>";

echo "<hr>";

/*
  File System Functions

  - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
  --- Reads Entire File Into A String

  - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
  --- Write Data To File
  --- Mode
  ------ FILE_APPEND => If File Exists Append To It

  - Create If Not Exists
  - Open And Close
  - Return Number Of Bytes

  Search
  - Get Set Include Path

*/

echo file_get_contents("test.txt") . "<br>"; // Read The File As String
echo "<pre>";
print_r(file('test.txt')); // Read The File As Array
echo "</pre>";
// Make Overwrite But When Using FILE_APPEND It Will Append
// echo file_put_contents("test.txt", "\nLife Is Short", FILE_APPEND) . "<br";

echo get_include_path() . "<br>";

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