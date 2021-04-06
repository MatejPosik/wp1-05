<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $HomelessMoney = 25;
    $VodkaPrice = 119;
    
    echo "<br>Soucítící studentka, čekající na vlak, vkládá do čepice 17 Kč.";
    $HomelessMoney = $HomelessMoney + 17;
    
    echo "<br>Muž, který právě skončil úspěšně s přijímacím pracovním pohovorem, věnuje bezdomovci peníze v hodnotě 40 Kč.";
    $HomelessMoney = $HomelessMoney + 40;
 
    echo "<br>Před vstupem do pendolina jde kolem bezdomovce bohatý podnikatel. Aby neměl těžkou peněženku zbaví se drobné bankovky v hodnotě 100 Kč.";
    $HomelessMoney = $HomelessMoney + 100;
    
    echo "<br>Kolem čepice bezdomovce se nenápadně prochází skupinka nepřizpůsobivých spoluobčanů a sebere mu z ní 50 Kč.";
    $HomelessMoney = $HomelessMoney - 50;
   
    echo "<br>Cena vodky: " . $VodkaPrice = $VodkaPrice;
    
    echo "<br>Peníze bezdomovce před návštěvou večerky: " . $HomelessMoney . "<br>";

    if($HomelessMoney >= $VodkaPrice) {
       echo "Vodka zakoupena!";
       $HomelessMoney = $HomelessMoney - $VodkaPrice; 
    }   elseif($HomelessMoney <= $VodkaPrice) {
        echo "Nedostatek peněz!";
    }   
        echo "<br>Peníze bezdomovce po návštěvě večerky: " . $HomelessMoney . "<br>";

?>  
</body>
</html>