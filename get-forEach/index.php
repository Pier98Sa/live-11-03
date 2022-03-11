<?php

    $data = $_GET;

    if(empty($data)){
        echo 'Nessun parametro passato !';
    }else{
        foreach($data as $key => $parametro ){
        echo $key . '-' . $parametro. '<br>';
        }
    }
    