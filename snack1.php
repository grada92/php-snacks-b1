<!---Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 --->

<?php
    $match = [
      [
        "hometeam" => "Olimpia Milano",
        "homepoints" => 55,
        "awayteam" => "Cantu'",
        "awaypoints" => 60
      ],

      [
        "hometeam" => "Olimpia Torino",
        "homepoints" => 65,
        "awayteam" => "Roma'",
        "awaypoints" => 40
      ],

      [
        "hometeam" => "Olimpia Firenze",
        "homepoints" => 25,
        "awayteam" => "Venezia'",
        "awaypoints" => 65
      ],

      [
        "hometeam" => "Olimpia Verona",
        "homepoints" => 35,
        "awayteam" => "Padova",
        "awaypoints" => 55
      ],

    ];
    
    for($i = 0; $i < count ($match); $i++){

    ?>

       <div><?= $match[$i]['hometeam'] ?> - <?= $match[$i]['awayteam']?> | <?= $match[$i]['homepoints']?> - <?= $match[$i]['awaypoints'] ?> </div> 
        
        
    <?php

    }

?>



