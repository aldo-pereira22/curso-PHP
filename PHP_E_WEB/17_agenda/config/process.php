<?php 
    session_start();

    include_once("connection.php");
    include_once("url.php");

    $id;
    if(!empty($_GET)){
        $id = $_GET['id'];
    }
    // Retorna o dado de um contato

    if(!empty($id)){
        $query = "SELECT *FROM contatcts where id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();
    }else {

    //RETORNA TODOS OS CONTATOS
    $contacts = [];

    $query = "SELECT * FROM contatcts";

    $stmt = $conn->prepare($query);

    $stmt->execute();
    
    $contacts = $stmt->fetchAll();


    }

?>