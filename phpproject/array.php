<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Indexed Array</h1>
    <?php
    $color=array("blue","black","pink");
    echo $color[1]."<br>";
    print_r($color);
    
    
    ?>
    <h1>Associative Array</h1>
    <?php 
    $student=array(
        "name"=>"sharmili",
        "age"=>21,
        "course"=>"full stack developer"
    );
    
    echo $student["course"]."<br>";
    echo $student["name"]."<br>";
    echo $student["age"]."<br>";
    ?>
<h1>Multidimensional Array</h1>
<?php
$student=array(
    array("sharmili"),
    array("kaviya","soma","renu"),
    array("good","bad","sun"),
);
echo $student[1][2]."<br>";
echo $student[2][0];

?>


<h1>Array Function</h1>
<?php
$student=array(
    array("sharmili"),
    array("kaviya","soma","renu","kavi"),
    array("good","bad","sun"),
  
);

echo count($student)."<br>";
echo array_push($student,334)."<br>";
print_r($student)."<br>";
echo array_pop($student)."<br>";
echo array_shift($student[1])."<br>";
print_r($student)."<br>";
echo in_array("red",$student)."<br>";
print_r($student)."<br>";

echo sort($student)."<br>";
print_r($student)."<br>";

echo rsort($student)."<br>";
print_r($student)."<br>";

echo asort($student)."<br>";
echo ksort($student)."<br>";
print_r($student)."<br>";


?>
<h1>For loop with array </h1>
<?php

$color=array("red","green","blue");
for ($i=0;$i<count($color);$i++){
    echo $color[$i]."<br>";
}



?>
<h1>For each with array</h1>
<?php

$student=array("name"=>"john","age"=>20 ,"course"=>"PHP");
foreach($student as $k =>$v){
    echo $k.":" .$v. "<br>" ;
}


?>
<?php

$students=array("name"=>"sharmili","age"=>21,"course"=>"full stack course");
foreach($students as $k =>$v){
    echo $k. ":".$v. "<br>";
}

?>

</body>
</html>