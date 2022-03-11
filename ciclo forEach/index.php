<?php


    $array = [
        'a' => 'stringa_1',
        'b' => 'stringa_2',
        'c' => 'stringa_3',
        'd' => 'stringa_4',
    ];

    foreach($array as $chiave => $valore){
        echo $chiave . '-' . $valore . '<br>';
    }



    $animals = [
        'mammals' => ["cow", "pig", "horse", "dog"],
        'birds' => ["duck", "chicken"]
    ];

    foreach($animals as $key => $animalClass){

        echo '<h1>Sto ciclando '. $key . '<h1>';
        foreach($animalClass as $animal){
            echo '<p>'. $animal . '</p>';
        }
    }
?>