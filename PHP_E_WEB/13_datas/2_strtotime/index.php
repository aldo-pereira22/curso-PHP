<?php

    $cincodias = strtotime("5 days");

    echo $cincodias ."<br>";

    $dataAtualMaisCinco = date('d/m/y', $cincodias);

    echo $dataAtualMaisCinco . "<br>";

?>