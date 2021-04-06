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
    $homelessMoney = 25;
    $vodkaPrice = 119;
    
    echo "<br>Soucítící studentka, čekající na vlak, vkládá do čepice 17 Kč.";
    $homelessMoney = $homelessMoney + 17;
    
    echo "<br>Muž, který právě skončil úspěšně s přijímacím pracovním pohovorem, věnuje bezdomovci peníze v hodnotě 40 Kč.";
    $homelessMoney = $homelessMoney + 40;
 
    echo "<br>Před vstupem do pendolina jde kolem bezdomovce bohatý podnikatel. Aby neměl těžkou peněženku zbaví se drobné bankovky v hodnotě 100 Kč.";
    $homelessMoney = $homelessMoney + 100;
    
    echo "<br>Kolem čepice bezdomovce se nenápadně prochází skupinka nepřizpůsobivých spoluobčanů a sebere mu z ní 50 Kč.";
    $homelessMoney = $homelessMoney - 50;
   
    echo "<br>Cena vodky: " . $vodkaPrice = $vodkaPrice;
    
    echo "<br>Peníze bezdomovce před návštěvou večerky: " . $homelessMoney . "<br>";

    if($homelessMoney >= $vodkaPrice) {
       echo "Vodka zakoupena!";
       $homelessMoney = $homelessMoney - $vodkaPrice; 
    }   else {
        echo "Nedostatek peněz!";
    }   
        echo "<br>Peníze bezdomovce po návštěvě večerky: " . $homelessMoney . "<br>";

?>  
</body>
</html>