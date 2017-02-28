<!DOCTYPE html>
<html>
<head>

</head>
<body>
<p>
    <?php
    $myname = "Kay";
    $myage = 16;

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
</body>
</html>
