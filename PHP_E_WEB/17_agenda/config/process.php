<?php 
    session_start();

    include_once("connection.php");
    include_once("url.php");




    $contacts = [];

    $query = "SELECT * FROM contatcts";

    $stmt = $conn->prepare($query);

    $stmt->execute();
    
    $contacts = $stmt->fetchAll();


?>