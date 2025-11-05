<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Hello World!";
    /* gunna say 
    yes you will follow me
    */
    //also son of a bi
    ?>

    <?php if (true) {?>
    <p>son of a bitch !!</p> 
    <?php } ?>

    <p>this is a Paragraph, <?php echo "Hello" ?></p>

    <?php //naming convention
    $name = "Partho";
    echo $name;
    echo ",,,  I am " . $name;
    ?>

    <?php 
    // variables-- Scaler type(one value)
    $string = "bitch";
    $int = 67;
    $float = 6.7;
    $bool = false;

    // array
    $array = ["you", "are a", "bitch"]
    ?>

    <p>Hi I am <?php echo "$name" ?></p>

    <?php 
    // global variables(gives name of the folder)
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $__SERVER["SERVER_NAME"];
    echo "<br>";
    ?>

    <?php 
    // get method
    echo $_GET["name"] //this will work for localhost/webphp(folder)/index.php?name=partho  --it gets value from the net
    ?>
</body>
</html>