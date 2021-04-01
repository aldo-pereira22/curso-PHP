<?php

    $host = "localhost";
    $dbname = "agenda";
    $user = "user";
    $pass = "1234";



    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

        // Modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $e) {
        //Erro na conexão 
        $error = $e->getMessage();
        echo "Erro: $error";
    }

?>

