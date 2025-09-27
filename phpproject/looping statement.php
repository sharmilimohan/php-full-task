<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>looping statement</title>
</head>
<body>
   <h1>
    LOOPING STATEMENT
   </h1>
   <h2>for loop</h2> 
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}
?>
<h2>for each loop</h2>
<?php
$fruits = ["Apple", "Banana", "Mango"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit <br>";
}

?>
<h2>while  loop</h2>
<?php
$task = 1;

while ($task <= 5) {
    echo "🔄 Task $task in progress...<br>";
    $task++;
}

echo "✅ All tasks completed!";
?>

<h2> do while  loop</h2>
<?php
$task = 1;

do {
    if ($task == 3) {
        echo "❌ Task $task failed!<br>";
    } elseif ($task == 5) {
        echo "⚠ Task $task needs review.<br>";
    } else {
        echo "✅ Task $task completed!<br>";
    }
    $task++;
} while ($task <= 5);
?>


</body>

</html>