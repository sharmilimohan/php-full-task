<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>static</h1>

<?php
class MathHelper{
    public static function Greeted($mess){
        echo "$mess";
    }
public $name;
public function __construct($n){
    $this ->name=$n;
}
}
MathHelper :: Greeted("Welcome Home");

?>
<h1>Accessing Static inside class
</h1>
<?php
class Test{
    public static $mess="Hello,Static";
    public static  function showmessage(){
        return self ::$mess;
    }
}
echo Test ::showmessage();


?>
<h1>Static with inheritance</h1>
<?php
class parentclass{
    public static function greet(){
        return "Hello from Parent";
    }
}

class childclass extends parentclass{}
echo childclass ::greet();
?>



<h1>Static with this vs self</h1>
<?php
class Example{
public $normal ="I am Normal";
public  static $static = "I am Static";
public function show (){
    echo $this->normal;
    echo "<br>";
    echo self ::$static ;
}
}
$obj=new example();
$obj ->show();
?>


</body>
</html>