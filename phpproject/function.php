<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Function with Default Parameter</h1>
    <?php
    function greet($name="guest"){
        echo "hello,$name!";
    }
    greet()."<br/>";
    greet("sharmili");
    
    ?>
</body>
</html>