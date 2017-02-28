<!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>
    <?php
    $myname = "Kay";
    $myage = 21;

    if ($myage == 16){
        print "Welcome ". $myname. ". \nYou are only allowed to buy specs";
    }
    else if ($myage == 18){
        print "Welcome ". $myname. ". You are only allowed to buy mugs";
    }
    else if ($myage == 21){
        print "Welcome ". $myname. ". You are only allowed to buy sausage rolls";
    }
    else{
        print "Welcome ". $myname. ". \nSorry!!! You are under age. \nYou cannot buy 
        anything in Aberdeen";
    }
    ?>
</p>
<p>
    <?php
    $wantedgood = 'mugs';

    switch ($wantedgood){
        case 'specs':
            echo "You have to be 16 to buy mugs";
            break;
        case 'mugs':
            echo "You have to be 18 to buy mugs";
            break;
        case 'sausage rolls':
            echo "You have to be 18 to buy mugs";
            break;
        default:
            echo "Nothing available";
    }
    ?>
</p>
</body>
</html>
