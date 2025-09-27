<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>opening file</h1>
   <?php
$file = fopen("sample.txt", "r"); // open file in read mode

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>"; 
    }
    fclose($file);
} else {
    echo "Unable to open file!";
}
?>
<h1>reading a file</h1>
<?php
$lines = file("sample.txt"); // reads file into array
foreach ($lines as $line) {
    echo $line . "<br>";
}
?>
<h1>writing to a file</h1>
<?php
$file = fopen("newfile.txt", "w"); // open file in write mode
fwrite($file, "Hello, World!\n");
fwrite($file, "This is PHP file handling example.\n");
fclose($file);
?>
<?php
file_put_contents("quick.txt", "This is written using file_put_contents().\n");
?>
<?php

file_put_contents("quick.txt", "Another line added.\n", FILE_APPEND);


?>
<h1>deleteing file</h1>
<?php
if (file_exists("file.txt")) {
    unlink("file.txt");
    echo "File deleted successfully.";
} else {
    echo "File does not exist.";
}
?>

<?php
$filename = "sample.txt";

if (file_exists($filename)) {
    echo "File size: " . filesize($filename)."<br>";
    echo "Is writable? " . (is_writable($filename) ? "Yes" : "No") . "<br>";
    echo "Is readable? " . (is_readable($filename) ? "Yes" : "No") . "<br>";
}
?>


</body>
</html>