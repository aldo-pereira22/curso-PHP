<?php

    // TRATAR UM POSSIVEL ERRO

    if(isset($_GET['nome'])){


        print_r($_GET);
        $nome =  $_GET['nome'];
        $idade = $_GET['idade'];

    }else {
        $nome ="Padrão";
        $idade = "Padrão";
    }
?>


<h1>
    o seu nome é: <?= $nome ?> <br> sua idade é: <?= $idade ?>
</h1>