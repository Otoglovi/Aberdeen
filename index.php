<!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>
    <?php
    $myname = "Kay";
    $myage = 18;

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
    $wantedgood = 'sausage rolls';

    switch ($wantedgood){
        case 'specs':
            echo "You have to be over 16 to buy specs";
            break;
        case 'mugs':
            echo "You have to be over 18 to buy mugs";
            break;
        case 'sausage rolls':
            echo "You have to be over 21 to buy sausage rolls";
            break;
        default:
            echo "Nothing available";
    }
    ?>
</p>
<p>
    <?php
    $provisionedActivities = array("Specs", "Mugs", "Sausage Rolls");

    foreach ($provisionedActivities as $x){
        print "<p>$x</p>";
    }

    $provisionedActivities[1] = "Hugs";
    echo "<br/> Mugs have been modified to a more friendly alternative";

    foreach ($provisionedActivities as $x){
        print "<p>$x</p>";
    }

    unset($provisionedActivities[2]);
    echo "<br/> Sausage Rolls have been removed";

    foreach ($provisionedActivities as $x){
        print "<p>$x</p>";
    }
    ?>
</p>
</body>
</html>
