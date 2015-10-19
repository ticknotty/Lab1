<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
//    echo "Hello, world ";
//    echo "Hello," . " " . "world" . "!";
//    echo 5 * 7;
//    $myname = "Frodo Baggins";
//    $myage = 111;
//    echo "My name is " . $myname . " and I am " . $myage . ".";
//    $name = "Simon";

//    if ($name == "Simon"){
//        print "I know you!";
//    }
//    else {
//        print "Who are you?";
//    }
    $name = "Nick";
    $age = 20;
    print $name;

    if ($age > 21){
        print ", you can buy specs, mugs AND sausage rolls.";
    }

    if ($age >= 18 && $age < 21){
        print ", you can buy specs and mugs.";
    }

    if ($age >= 16 && $age < 18){
        print ", you can only buy specs.";
    }
    ?>


</p>
</body>
</html>
