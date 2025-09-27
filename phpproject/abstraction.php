

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Abstract Class</h1>

<?php
abstract class justGreet {
    abstract public function msgprint($message);
    public function nameprint($name) {
        echo "Hello $name";
    }
}

class Greetwithmsg extends justGreet {
    public function msgprint($message) {
        echo "<br/> $message";
    }
}

$abs = new Greetwithmsg();
$abs->nameprint("Sowmiya");
$abs->msgprint("Welcome you");
?>

<h1>Abstract Class with Constructor</h2>

<?php 

class Greet {
    protected $name;

    public function __construct($n) {
        $this->name = $n;
    }
}

class GreetFully extends Greet {
    public function __construct($n) {
        parent::__construct($n);
    }

    public function greeted($m) {
        echo "<br/>Hello {$this->name} <br/> $m";
    }
}

$obj = new GreetFully("sharmili");
$obj->greeted("Good Morning");

?>


  
</body>
</html>

