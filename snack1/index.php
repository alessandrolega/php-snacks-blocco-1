<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite
 punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php

    $partite = [
        [
            "squadraCasa" => "Milano",
            "squadraOspite" => "Roma",
            "puntiCasa" => 70,
            "puntiOspiti" => 60,
        ],
        [
            "squadraCasa" => "Catania",
            "squadraOspite" => "Palermo",
            "puntiCasa" => 90,
            "puntiOspiti" => 80,
        ],
        [
            "squadraCasa" => "Torino",
            "squadraOspite" => "Treviso",
            "puntiCasa" => 40,
            "puntiOspiti" => 50,
        ]
        ];

   for( $i = 0; $i < count($partite); $i++){
    echo $partite[$i]['squadraCasa'] . '-' . $partite[$i]['squadraOspite'] . '|' . 
    $partite[$i]['puntiCasa'] . '-'. $partite[$i]['puntiOspiti'];
   }
?>