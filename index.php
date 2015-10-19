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
//    $name = "Nick";
//    $age = 15;

//    if ($age > 21){
//        print $name . ", you can buy specs, mugs AND sausage rolls.";
//    }

//    else if ($age >= 18 && $age < 21){
//        print $name . ", you can buy specs and mugs.";
//    }

//    else if ($age >= 16 && $age < 18){
//        print $name . ", you can only buy specs.";
//    }
//    else {
//        print $name . ", you are not allowed to buy specs, mugs or SAUSAGE ROLLS.";
//    }

    $numberOfHobbits = 2;

    switch ($numberOfHobbits){
        case 1:
            echo "1 sad hobbit";
            break;
        case 2:
            echo "2 happy hobbits";
            break;
        case 3:
            echo "3 hobbits are a crowd";
            break;
        default:
            echo "All the hobbits have gone home";
    }
    ?>


</p>
</body>
</html>
