<?php

include_once("DataBase.php");

class Register {
    public function createUser($userData) {
        // Obtém a instância da conexão com o banco de dados
        $db = Database::getInstance();
        $conn = $db->getConnection();

        // Lógica para inserir o usuário no banco de dados
        // Aqui você pode usar $conn para executar consultas SQL ou operações no banco de dados
        // Por exemplo:
        $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('".$userData['username']."', '".$userData['email']."', '".$userData['password']."')";
        mysqli_query($conn, $query);
        // Você pode personalizar essa lógica conforme necessário
        
        return true;
    }
}

?>