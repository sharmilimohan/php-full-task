<h1>$_GET</h1>

<form method="get" action="">
    name :<input type ="text" name ="name" >
    age:<input type ="text" name ="age">
    <input type ="submit">
</form>

<?php
if (isset($_GET["name"])&& isset($_GET["age"])){
echo "name:". $_GET["name"]."<br>";
echo "age:".$_GET["age"]."<br>";
}

?>
<h1>$_POST</h1>

<form method="post" action="">
    name :<input type ="text" name ="name" >
    age:<input type ="text" name ="age">
    <input type ="submit">
</form>
<?php
if(isset($_POST['name'])){
    echo "name:".$_POST['name']. "<br>";
    echo "age".$_POST['age']."<br>";
}

?>
<h1>$_REQUEST</h1>
<form method="get" action="">
    name :<input type ="text" name ="name" >
    age:<input type ="text" name ="age">
    <input type ="submit">
</form>
<?php
if(isset($_REQUEST["name"])&& isset($_REQUEST["name"])){
    echo "name:".$_REQUEST["name"]."<br>";
    echo "age".$_REQUEST["age"]."<br>";
}
?>



<h1>$_COOKIE</h1>
    <h4>SET A COOKIE</h4>

    <?php
    setcookie("user","sharmili",time()+3600);
        echo "cookie is set";
    ?>

    <h4>ACCESS A COOKIE</h4>

    <?php
    if(isset($_COOKIE['user'])){
        echo "user is:".$_COOKIE['user'];
    }else{
         echo "cookie is not set";
    }
    ?>
    <h4>delete a cookies</h4>
    <?php
    setcookie ("user","",time()-3600);
        echo "cookie is deteted"
    

    
    ?>