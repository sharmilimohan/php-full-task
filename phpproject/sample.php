<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php
    $num1=10;
    $num2=19;
    $total=$num1+$num2;
    echo $num1+$num2;
        echo $num1-$num2;


    ?>
    <?php
    
    
    $a= 10;
    $a=19;
    echo $a;
    
    ?>
    <?php
    $a=23;
    $b=10;
    $c=$a;
    echo $c;
    
    
    
    ?> -->


<?php
for($i=1;$i<=20;$i++){
    echo "number $i </br>";
}
$color= array("amma","appa","akka","papa","sister");
for($i=0;$i< Count($color);$i++){
    echo "$color[$i] <br>";
}

?>
<?php
$students =array("name"=>"sharmili","age"=>"32","course"=>"php");
foreach($students as $k=>$v){
    echo $k .":". $v .  "<br>";

}

?>

<?php
class Car{
    public $brand;
    public $color;
    public function startEngine(){
        return "the value of mine";
    }
}

?>


<?php
$myCar= new Car();
$myCar ->brand

?>
</body>
</html>