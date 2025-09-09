<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditional </title>
</head>
<body>
    <h1>conditional statement<h1>
    <h1>if statement</h1>
    <?php 

$year = 2024;
if ($year % 4 == 0) {
    echo "$year is a Leap Year";
} else {
    echo "$year is NOT a Leap Year";
}
?>


<h1>nested if</h1>
<?php

$age = 20;
$mood = "happy";

if ($age >= 18) {
    if ($mood == "happy") {
        echo "😊 Adult and happy!";
    } else {
        echo "🙂 Adult but not happy.";
    }
} else {
    echo "👶 Underage.";
}
?>
<h1>if else statement</h1>
<?php
$age = 22;

if ($age >= 18) {
    echo "$age is good to vote 👍";
} else {
    echo "$age is not eligible to vote ❌";
}
?>


<h1>else if statement</h1>
<?php 
$number = 2;

if ($number > 0) {
    echo " $number The number is Positive";
} elseif ($number < 0) {
    echo " $number The number is Negative";
} else {
    echo " $number The number is Zero";
}
?>

<h1>ladder else if</h1>
<?php
$age = 22;

if ($age < 0) {
    echo " $age Invalid age ❌";
} elseif ($age >= 0 && $age < 13) {
    echo "$age  is Child 👶";
} elseif ($age >= 13 && $age < 18) {
    echo " $age is Teenager 🧑‍🎓";
} elseif ($age >= 18 && $age < 60) {
    echo " $age  is Adult 🧑";
} else {
    echo "$age  Senior 👴";
}
?>
<h1>switch statement</h1>
<?php
$day = "Tuesday";

switch ($day) {
    case "Monday":
        echo "$day Start of the week!";
        break;

    case "Tuesday":
        echo " $day Second day of the week!";
        break;

    case "Wednesday":
        echo " $day Midweek!";
        break;

    case "Thursday":
        echo " $day Almost Friday!";
        break;

    case "Friday":
        echo " $day Weekend is coming!";
        break;

    case "Saturday":
    case "Sunday":
        echo " $day It’s the Weekend 🎉";
        break;

    default:
        echo " $day Invalid day!";
}
?>
<h1>nested switch statement</h1>
<?php
$category = "fruit";
$item = "apple";

switch ($category) {
    case "fruit":
        switch ($item) {
            case "apple":
                echo "🍎 You chose an apple!";
                break;
            case "banana":
                echo "🍌 You chose a banana!";
                break;
            default:
                echo "❓ Unknown fruit.";
        }
        break;

    case "vegetable":
        switch ($item) {
            case "carrot":
                echo "🥕 You chose a carrot!";
                break;
            case "potato":
                echo "🥔 You chose a potato!";
                break;
            default:
                echo "❓ Unknown vegetable.";
        }
        break;

    default:
        echo "🚫 Unknown category.";
}
?>


</body>
</html>