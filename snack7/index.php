<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
 Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

 <?php
    $arraAlunni = [
        [
            'nome' => 'alex',
            'cognome' => 'red',
            'voti' => [2,4,8,5,10]
        ],
        [
            'nome' => 'alessia',
            'cognome' => 'jibby',
            'voti' => [5,12,3,7,10]
        ]

        ];

    for( $i=0; $i < count($arraAlunni); $i++){

        $mediaVoti = array_sum( $arraAlunni[$i]['voti']) / count($arraAlunni[$i]['voti'] );

        echo $arraAlunni[$i]['nome'] . ' - ' .  $arraAlunni[$i]['cognome'] . 'la media dei voti è: ' . $mediaVoti ;
        echo "<br>";

    }
 
 ?>