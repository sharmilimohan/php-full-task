
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Creating Class</h1>
<?php
class Car{
    public $brand;
    public $color;
    public function startEngine(){
        return "   The engine has started !! ";
    }
 
}
?>   
 <h1>Creating Object </h1> 
<?php 
$myCar=new Car();
$myCar->brand ="BMW";
$myCar->color="Red";
echo $myCar->brand;
echo $myCar->startEngine();

?>
<h1>Constructor ex-1</h1>
<?php
class CarV2 {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getDetail() {
        return "Brand: $this->brand, Color: $this->color";
    }
}

$car1 = new CarV2("Audi", "Black");
$car2 = new CarV2("BMW", "Red");

echo $car1->getDetail();
echo "<br>";
echo $car2->getDetail();
?>
<h1>Constructor ex-2</h1>
<?php
class  Cake{
    public $name;
    public $price;
    public function __construct($na,$prc){
        $this->name=$na;
        $this->price=$prc;
    }
public function cakeDetail(){
    echo "name: $this->name,price:$this->price</br>";
}
}
$obj=new Cake("dream cake","100");
$obj1=new Cake("brownie","120");
$obj->cakeDetail();
?>


<h1>Inheritance</h1>
<?php

class  Cake1{
    public $name;
    public $price;
    public function __construct($na,$prc){
        $this->name=$na;
        $this->price=$prc;
    }
    public function cakeDetail(){
    echo "name: $this->name,price:$this->price</br>";
}
}
class Flavour extends Cake1{
    public $flavour;
    public function __construct($fla,$name,$price){
        parent :: __construct($name,$price);
        $this->flavour=$fla;
    }
    public function fullDetail(){
        echo "name:$this->name,price:$this->price,flavour:$this->flavour";
    }
}

$o=new flavour("Chocolate","Black Forest",1000);
$o->fullDetail();

?>

</body>
</html>


