<?php

    $data = new DateTime();

    echo $data->format('d/m/y') ."<br>";

    echo $data->format('d/m/y') ."<br>";

    echo $data->format('d*m*Y') ."<br>";


    $data->modify('+2 months');


    echo $data;
?>