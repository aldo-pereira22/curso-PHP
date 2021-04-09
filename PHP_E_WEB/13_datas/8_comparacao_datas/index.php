<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataC = new DateTime();

    $dataB->setTime(01, 10, 10);
    $dataC->setTime(01, 10, 10);

    
    if($dataB < $dataA){
        echo " A data B é menor que a data A <br>";
    }


    if($dataB < $dataA){
        echo " A data A é maior que a data B  <br>";
    }


    if($dataB == $dataC){

        echo "A data A e C são iguais";
    }
?>