<?php 
    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;
    
    if( !empty($data)){
        

        //Criar contato 
        if($data["type"] == "create"){
        
            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];

            $query = "INSERT INTO contatcts (name, phone, observations) VALUES (
                :name, :phone, :observations
            )";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);

            try {
                
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso";

        
                // Modo de erros
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            }catch(PDOException $e) {
                //Erro na conexão 
                $error = $e->getMessage();
                echo "Erro: $error";
            }

        header("Location: ../index.php");

        }else if($data["type"] === "edit"){

            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];
            $id =$data["id"];

            $query = "UPDATE contatcts SET name = :name, phone = :phone, observations = :observations where id = :id";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name",$name);
            $stmt->bindParam(":phone",$phone);
            $stmt->bindParam(":observations",$observations);
            $stmt->bindParam(":id",$id);

            try {
                
                $stmt->execute();
                $_SESSION["msg"] = "Contato atualizado com sucesso";

        
                // Modo de erros
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            }catch(PDOException $e) {
                //Erro na conexão 
                $error = $e->getMessage();
                echo "Erro: $error";
            }
            header("Location: ../index.php");
        }else if($data["type"] === "delete"){

            $id =   $data['id'];
            $query = "DELETE FROM contatcts where id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);
            

            try {
                
                $stmt->execute();
                $_SESSION["msg"] = "Contato excluido com sucesso";

        
                // Modo de erros
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            }catch(PDOException $e) {
                //Erro na conexão 
                $error = $e->getMessage();
                echo "Erro: $error";
            }
            header("Location: ../index.php");


        }


        //Seleção dos dados
    }else {

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
    

    }


    // Fechar conexxão
    $conn  = null;

?>