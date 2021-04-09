<?php 

    $dataNascimento = mktime(02,12,33, 02, 05, 1991);


    echo $dataNascimento ."<br>";

    $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);


    echo $dataNascimentoFormatada;
?>